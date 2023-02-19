<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $habilidades = array(
            (object) [
                'nombre' => 'Laravel',
                'image' => 'images/svg/laravel.svg',
                'descripcion' => 'Desarrollo de APIs y aplicaciones web.',
            ],
            (object) [
                'nombre' => 'Node JS',
                'image' => 'images/svg/nodejs.svg',
                'descripcion' => 'Desarrollo de APIs y aplicaciones web.',
            ],
            (object) [
                'nombre' => 'Angular',
                'image' => 'images/svg/angular.svg',
                'descripcion' => 'Desarrollo de aplicaciones web.',
            ],
            (object) [
                'nombre' => 'SQL',
                'image' => 'images/svg/sql.svg',
                'descripcion' => 'Manejo de base de datos SQL, MySQL y PostgreSQL.',
            ],
            (object) [
                'nombre' => 'Soporte',
                'image' => 'images/svg/soporte.svg',
                'descripcion' => 'Soporte preventivo y correctivo de Hardware y Software.',
            ],
        );

        $experiencias = array(
            (object) [
                'periodo' => 'Desde mayo, 2019',
                'cargo' => 'Desarrollador de software.',
                'compania' => 'Marfil Bsc Tech, Empresa de tecnología.',
            ],
            (object) [
                'periodo' => 'Desde enero hasta mayo, 2019',
                'cargo' => 'Técnico jefe.',
                'compania' => 'Pc Técnico, Taller de reparación de hardware.',
            ],
            (object) [
                'periodo' => 'Desde octubre hasta diciembre, 2018',
                'cargo' => 'Técnico de sistemas.',
                'compania' => 'Selcomp Ltda, Empresa de tecnología.',
            ],
            (object) [
                'periodo' => 'Desde agosto, 2015 hasta julio, 2018',
                'cargo' => 'Técnico de sistemas.',
                'compania' => 'Pc Técnico, Taller de reparación de hardware.',
            ],
        );

        return view('home.home', compact(['habilidades', 'experiencias']));
    }
}
