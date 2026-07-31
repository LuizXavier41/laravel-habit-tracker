<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public $name = 'Luiz';
    public $subjects = ['Algebra', 'Calculo', 'PROG', 'Analise'];



    public function mostrador()
    {
        return 'UserController@mostrador';
    }

    public function index()
    {
        return view(
            'home',
            [
                'name' => $this->name,
                'subjects' => $this->subjects
            ]
        );
    }
}
