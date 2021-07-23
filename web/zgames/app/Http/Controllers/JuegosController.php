<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;
use App\Models\Consola;
class JuegosController extends Controller
{
    //
    public function getJuegosByConsola(Request $request){
        $input=$request->all();
        $inConsola=$input["inConsola"];
        $consola=Consola::find($idConsola);
        return $consola->juegos()->get();//select 
    }
    public function getJuegos(){
        return Juego::all();
    }
    public function save(Request $request){
        $input =$request->all();
        $nombre=$input["nombre"];
        $fecha=$input["fecha_lanzamiento"];
        $apto=$input["apto_minios"];
        $precio=$inout["precio"];
        $descripcion=$input["descripcion"];
        $consolaId=$input["consolaId"];
        
        $juego=new Juego();
        $juego->nombre=$nombre;
        $juego->fecha_lanzamiento=$fecha;
        $juego->descripcion=$descripcion;
        $juego->apto_minios=$apto;
        $juego->precio=$precio;
        $juego->consola_id=$consolaId;
        //guardar en la bd
        $juego->save();
        return $juego;
    }
    public function remove(Request $request){
      //  $input=$request->all();
    }
}
