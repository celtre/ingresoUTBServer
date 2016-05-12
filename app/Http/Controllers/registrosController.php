<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BookController extends Controller{


  public function index(){

         $Registros  = Registros::all();

         return response()->json($Registros);

     }

     public function getBook($id){

         $Registros  = Registros::find($id);

         return response()->json($Registros);
     }

     public function createBook(Request $request){

         $Registros = Registros::create($request->all());

         return response()->json($Registros);

     }

     public function deleteBook($id){
         $Registros  = Registros::find($id);
         $Registros->delete();

         return response()->json('deleted');
     }

     public function updateBook(Request $request,$id){
         $Registros  = Registros::find($id);
         $Registros->title = $request->input('codigo');
         $Registros->author = $request->input('autor');
         $Registros->save();

         return response()->json($Registros);
     }

}
?>
