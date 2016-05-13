<?php

namespace App\Http\Controllers;

use App\registros;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class registrosController extends Controller{


  public function index(){

         $Registros  = Registros::all();

         return response()->json($Registros);

     }

     public function getRegistros($id){

         $Registros  = Registros::find($id);

         return response()->json($Registros);
     }

     public function createRegistros(Request $request){

         $Registros = Registros::create($request->all());

         return response()->json($Registros);

     }

     public function deleteRegistros($id){
         $Registros  = Registros::find($id);
         $Registros->delete();

         return response()->json('deleted');
     }

     public function updateRegistros(Request $request,$id){
         $Registros  = Registros::find($id);
         $Registros->title = $request->input('codigo');
         $Registros->author = $request->input('autor');
         $Registros->save();

         return response()->json($Registros);
     }

}
?>
