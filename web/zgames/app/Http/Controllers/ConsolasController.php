<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consola;

class ConsolasController extends Controller
{
    public function getMarcas(){
        $marcas=["Sony","Microsoft","Nintendo","Sega"];
        return $marcas;
    }
    public function getConsolas(){
        //equivalente a un select * fron consolas
            $consolas=Consola::all();
            return $consolas;
        }
    /*Esta funcion va a registrar ina consola de ejemplo */
    public function crearConsola(Request $request){
    //equivalente a un insert into
        $input = $request->all();
        if(empty($input["nombre"]) || strlen($input['nombre']) == 0){
            return response()->json([
                'message' => 'Nombre es obligatorio'
            ], 404);

        }
        
        if(empty($input["anio"]) || strlen($input['anio']) == 0){
            return response()->json([
                'message' => 'Año es obligatorio'
            ], 404);

        }
        $consola=new Consola();
        $consola->nombre=$input["nombre"];
        $consola->marca=$input["marca"];
        $consola->anio=$input["anio"];
        $consola->save();
        return $consola;
    }       
}
