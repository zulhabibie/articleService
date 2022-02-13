<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Response;
use App\Http\Resources\ArticleResource;
use Illuminate\Validation\Rule;
use App\Models\Article;

class ArticleController extends Controller {
    // show all the
    public function index(){
        return ArticleResource::collection(Article::orderBy('id','DESC')->paginate(10));
    }

   
    // store new category into the database
    public function store(Request $request){
        $validators=Validator::make($request->all(),[
            'title'=>'required',
        ]);
        if($validators->fails()){
            return Response::json(['errors'=>$validators->getMessageBag()->toArray()]);
        }else{
            $category=new Category();
            $category->title=$request->title;
            $category->slug=strtolower(implode('-',explode(' ',$request->slug)));
            $category->save();
            return Response::json(['success'=>'Category created successfully !']);
        }
    }

    // show a specific category by id
    public function show($id){        
        if(Article::where('id',$id)->first()){
            return new ArticleResource(Article::findOrFail($id));
        }else{
            return Response::json(['error'=>'Category not found!']);
        }
    }


    // update  using id
    public function update(request $request, $id){
        $nama = $request->nama;
        $alamat = $request->alamat;

        $anggota = Article::find($id);
        $anggota->nama = $nama;
        $anggota->alamat = $alamat;
        $anggota->save();

        return "Data berhasil diupdate";
    }

    // remove  using id
    public function remove(Request $request){
        try{
            $Article=Article::where('id',$request->id)->first();
            if($Article){
                $Article->delete();
                return Response::json(['success'=>'Article removed successfully !']);
            }else{
                return Response::json(['error'=>'Article not found!']);
            }
        }catch(\Illuminate\Database\QueryException $exception){
            return Response::json(['error'=>'Article belongs to an article.So you cann\'t delete this Article!']);
        }        
    }


}