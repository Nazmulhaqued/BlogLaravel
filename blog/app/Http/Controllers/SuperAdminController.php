<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Use Redirect;
use DB;
session_start();
class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

    }

    public function index()
    {
        $this->authCheck();
        $add_new_category = view('admin.pages.admin_home');
        return view('admin.admin_master')
                    ->with('add_new_category',$add_new_category);
    }

    public function addCategory(){
        $this->authCheck();
        $admin_home = view('admin.pages.add_category');
        return view('admin.admin_master')
                    ->with('admin_main_content',$admin_home);

    }

    public function manageCategory(){
        $this->authCheck();
        $all_category = DB::table('category')
                ->get();
        $manage_category = view('admin.pages.manage_category')
                            ->with('all_category_info', $all_category);
        return view('admin.admin_master')
                    ->with('admin_main_content',$manage_category);
    }

    public function saveCategory(Request $request){
        $data =array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;

        DB::table('category')->insert($data);
        Session::put('message','Save Category Successfully');
        return Redirect::to('/add-category');
    }
    public function unpublishedCategory($category_id){
        DB::table('category')
            ->where('category_id', $category_id)
            ->update(['publication_status' => 0]);
            return Redirect::to('/manage-category');
    }
    public function publishedCategory($category_id){
        DB::table('category')
            ->where('category_id', $category_id)
            ->update(['publication_status' => 1]);
            return Redirect::to('/manage-category');
    }
    public function editCategory($category_id){
        $category_info = DB::table('category')
            ->where('category_id', $category_id)
            ->first();
        $edit_category = view('admin.pages.edit_category')
                    ->with('category_info',$category_info);

        return view('admin.admin_master')
                  ->with('admin_main_content',$edit_category);

    }
    public function updateCategory(Request $request){
        $data=array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;
        $category_id =$request->category_id;

        DB::table('category')
            ->where('category_id',$category_id)
            ->update($data);
        return Redirect::to('/manage-category');
    }
    public function addBlog(){
        $published_category = DB::table('category')
            ->get();
        $add_blog_page = view('admin.pages.add_post')
                        ->with('all_published_category',$published_category);
        return view('admin.admin_master')
                ->with('admin_main_content',$add_blog_page);
    }

    public function savePost(Request $request)
        {
        $data=array();
        $data['blog_title']=$request->post_title;
        $data['category_id']=$request->category_id;
        $data['blog_short_description']=$request->blog_short_description;
        $data['blog_long_description']=$request->blog_long_description;
        $data['blog_image']='----';
        $data['author_name']=Session::get('admin_name');
        $data['publication_status']=$request->publication_status;
        DB::table('blog')->insert($data);
        Session::put('message', 'Save Blog Successfully !!');
        return Redirect::to('/add-blog');
    }

    public function manageBlog(){
        $this->authCheck();
        $all_blog = DB::table('blog')
                ->get();
        $manage_blog = view('admin.pages.manage_blog')
                            ->with('all_blog_info', $all_blog);
        return view('admin.admin_master')
                    ->with('admin_main_contentttt',$manage_blog);
    }



    public function deleteCategory($category_id){
        DB::table('category')
            ->where('category_id', $category_id)
            ->delete();
            return Redirect::to('/manage-category');
    }
    public function logout(){
        Session::put('admin_name','');
        Session::put('admin_id','');
        Session::put('message','You are Successfully Logout');
        return Redirect::to('/admin');
    }

    public function authCheck(){
        $admin_id = Session::get('admin_id');
        if($admin_id){

            return;
        }
        else{
            return Redirect::to('/admin')->send();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
