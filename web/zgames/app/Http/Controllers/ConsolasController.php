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
    public function crearConsola(){
    //equivalente a un insert into
        
        $consola=new Consola();
        $consola->nombre="Nintendo Switch";
        $consola->marca="Nintendo";
        $consola->anio=2015;
        $consola->save();
        return $consola;
    }       
}
