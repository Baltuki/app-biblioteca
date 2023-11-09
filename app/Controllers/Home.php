<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('front/head-view',$data);
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer');
    }

    public function quienes()
    {
        $data['titulo']='Quienes Somos';
        echo view('front/head-view',$data);
        echo view('front/navbar');
        echo view('front/quienes');
        echo view('front/footer');
    }

    public function acerca()
    {
        $data['titulo']='Acerca De';
        echo view('front/head-view',$data);
        echo view('front/navbar');
        echo view('front/acerca');
        echo view('front/footer');
    }

    public function login()
    {
        $data['titulo']='Iniciar Sesion';
        echo view('front/head-view',$data);
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer');
    }

    public function registro()
    {
        
        $data['titulo']='Registro';
        echo view('front/head-view',$data);
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer');
        
    }



}
