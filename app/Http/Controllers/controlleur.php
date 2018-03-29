<?php

namespace App\Http\Controllers;

use App\modele1;
use Illuminate\Http\Request;

class controlleur extends Controller
{
    public function index(){
    return view("formulaire");
   }
    public function erreur(){
    return view("erreur");
   }
    public function affiche(){
    return view("affiche");
   }
   }
   ?>
