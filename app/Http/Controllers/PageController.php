<?php
/**
 * Created by PhpStorm.
 * User: Volkan
 * Date: 07.05.2017
 * Time: 13:31
 */

namespace App\Http\Controllers;


class PageController
{
    public function index()
    {








        return view('welcome');
    }



    public function impressum()
    {
        return view('impressum');
    }

    public function kontakt()
    {
        return view('kontakt');
    }
}
