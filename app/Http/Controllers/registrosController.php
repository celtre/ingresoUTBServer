<?php

namespace App\Http\Controllers;

use App\Registros;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class registrosController extends Controller{


  public function index(){

         $Registros  = Registros::all();

         return response()->json($Registros);

     }

     public function getRegistro($id){

         $Registros  = Registros::find($id);

         return response()->json($Registros);
     }

     public function createRegistro(Request $request){


         $Registros = Registros::create($request->all());

         return response()->json($Registros);

     }

     public function deleteRegistro($id){
         $Registros  = Registros::find($id);
         $Registros->delete();

         return response()->json('deleted');
     }

     public function updateRegistro(Request $request,$id){
         $Registros  = Registros::find($id);
         $Registros->title = $request->input('codigo');
         $Registros->author = $request->input('autor');
         $Registros->save();

         return response()->json($Registros);
     }

}
?>
