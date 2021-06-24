<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{   
    /**
     * Mostra a página home
     *
     * @return void
     */
    public function index(){
        return view('home');

    }
    /**
     * Mosta a página sobre
     *
     * @return void
     */
    public function sobre(){
        echo "Página SOBRE!!!";
        
    }
    /**
     * mostra a pagina contato
     *
     * @return void
     */
    public function contato(){
        echo "Página CONTATO!!!";
        
    }
    /**
     * mostra a pagina serviço
     *
     * @return void
     */
    public function servico(){
         echo "Página SERVIÇO!!!";
    }

    /**
     * mostra a pagina curso pelo id
     *
     * @param integer $id
     * @return void
     */
    public function curso(int $id){
        $cursos = [
            1 =>
            [
            'nome' => 'PHP Moderno',
            'descricao' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis doloribus doloremque eligendi laboriosam quaerat aliquam quos voluptatem maiores labore provident reprehenderit, placeat eaque illo dignissimos rem velit, non delectus saepe!'
            ],
            2 =>
            [
            'nome' => 'LARAVEL',
            'descricao' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis doloribus doloremque eligendi laboriosam quaerat aliquam quos voluptatem maiores labore provident reprehenderit, placeat eaque illo dignissimos rem velit, non delectus saepe!'
            ],
            3 =>
            [
            'nome' => 'JAVASCRIPT',
            'descricao' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis doloribus doloremque eligendi laboriosam quaerat aliquam quos voluptatem maiores labore provident reprehenderit, placeat eaque illo dignissimos rem velit, non delectus saepe!'
            ],
    
    ];      
            
                return view('site.curso', [
                    'curso' => $cursos[$id]
                ]);
   }
   

}
