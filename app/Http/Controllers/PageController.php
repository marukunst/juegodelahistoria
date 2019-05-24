<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Mostrarlogin(){
      return view('login');
    }
    public function MostrarRegister(){
      return view('register');
    }
    public function MostrarPreHome(){
      return view('preHome');
    }
    public function MostrarHome(){
      return view('home');
    }
    public function MostrarFaqs(){
      return view('faqs');
    }


}
