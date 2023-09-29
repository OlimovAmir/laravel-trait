<?php

namespace App\Http\Controllers;

use App\Traits\ActiveTrait;
use Illuminate\Http\Request;

class PageController extends Controller

{
    use ActiveTrait;
    public function PageHome()

    {
        $this->showModal('Страница Home Активировано'); // Вызов метода trait
        return view('layout.Pages.Home');
    }

    public function PageAbout()
    {
        return view('layout.Pages.About');
    }

    public function PageContact()
    {
        $this->showModal('Страница Contact Активировано'); // Вызов метода trait
        return view('layout.Pages.Contact');
    }
}
