<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function first()
    {
        $title = 'Главная страница';
        $message = 'здесь будет логин и регистрация';
       
        return view('main_page', [
            'title'   => $title,
            'message' => $message,
        ]);
    }  
    public function second()
    {
        $title = 'Вторая страница';
        $message = 'Здесь будет страница с товарами например';
  
        return view('second_page', [
            'title'   => $title,
            'message' => $message,
        ]);
    }  
}
