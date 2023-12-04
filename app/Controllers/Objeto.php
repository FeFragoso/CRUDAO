<?php

namespace App\Controllers;

class Objeto extends BaseController
{

    private $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index(): string
    {
        $objeto_id = 1;

        $query = ('
            SELECT
                OBJETO_COLUNA_DESCRICAO,
                OBJETO_COLUNA_TIPAGEM
            FROM
                OBJETO_COLUNAS WITH(NOLOCK)
            WHERE
                OBJETO_FK = '. $objeto_id
        );
        
        $campos = $this->db->query($query)->getResult();

        $operacao = view('modulos/objetos/edicao', ['campos' => $campos]);

        return
            view('componentes/header') .
            view('componentes/navegacao') .
            view('modulos/objetos/formulario', ['operacao' => $operacao]) .
            view('componentes/footer');
    }

    public function criacao(): string
    {

        $query = ('
            SELECT
                NULL AS OBJETO_COLUNA_DESCRICAO,
                NULL AS OBJETO_COLUNA_TIPAGEM
        ');
        
        $campos = $this->db->query($query)->getResult();

        $operacao = view('modulos/objetos/criacao', ['campos' => $campos]);
        
        return
            view('componentes/header') .
            view('componentes/navegacao') .
            view('modulos/objetos/formulario', ['operacao' => $operacao]) .
            view('componentes/footer');
    }

}
