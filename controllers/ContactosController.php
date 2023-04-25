<?php

namespace Controllers;
use Models\Contactos;

class ContactosController extends Controller{
    public function index(){
        return view('contactos/index',['contactos'=>Contactos::all()]);
    }

    public function crear(){
        return view('contactos/crear');
    }

    public function agregar(){
        $contacto = new Contactos;
        $contacto ->nombre= app()->request()->get('nombre');
        $contacto ->primerApellido= app()->request()->get('primerApellido');
        $contacto ->segundoApellido= app()->request()->get('segundoApellido');
        $contacto ->correo= app()->request()->get('correo');
        $contacto -> save();

        return response()->redirect('/');
    }
    public function borrar($id){
        Contactos::destroy($id);
        return response()->redirect('/');
    }

    public function editar($id){
        $datosContacto=Contactos::find($id);
        //print_r($datosContacto);

        return view('contactos/editar',['contacto'=>$datosContacto]);
    }
    public function actualizar($id){
        $nombre= app()->request()->get('nombre');
        $primerApellido= app()->request()->get('primerApellido');
        $segundoApellido= app()->request()->get('segundoApellido');
        $correo= app()->request()->get('correo');

        $contacto = Contactos::findOrFail($id);
        $contacto ->nombre= ($nombre !="")?$nombre:$contacto->nombre;
        $contacto ->primerApellido=($primerApellido !="")?$primerApellido:$contacto->primerApellido;
        $contacto ->segundoApellido=($segundoApellido!="")?$segundoApellido:$contacto->segundoApellido;
        $contacto ->correo= ($correo!="")?$correo :$contacto->correo; 
        $contacto ->update();

        return response()->redirect('/');
    }

}