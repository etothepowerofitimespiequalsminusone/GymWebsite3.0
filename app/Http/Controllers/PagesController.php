<?php
/**
 * Created by PhpStorm.
 * User: Laganovskis
 * Date: 10/14/2016
 * Time: 11:07 PM
 */
namespace GymWebsite\Http\Controllers;

class PagesController extends Controller {

    public function getIndex(){
        return view('pages.welcome');
    }

}