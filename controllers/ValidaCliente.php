<?php


class ValidaCliente
{

    public function validaInserirCliente(){


        if(!isset($_POST['nomeCliente']) || trim($_POST['nomeCliente']) === ''){
            return ['res' =>'0', 'msg'=>'O nome do cliente não pode ser vazio.'];
        }

        if(is_numeric($_POST['nomeCliente'])){
            return ['res' =>'0', 'msg'=>'O nome do cliente não pode conter números.'];
        }

        if(strlen($_POST['nomeCliente']) > 50){
            return ['res' =>'0', 'msg'=>'O nome do cliente deve conter no máximo 50 caracteres.'];
        }

        return ['res' => '1'];

    }

    public function validaDeletarCliente(){

        if(!isset($_POST['prkCliente'])){
            return ['res' =>'0', 'msg'=>'O id do cliente não pode ser vazio.'];
        }

        if(!is_numeric($_POST['prkCliente'])){
            return ['res' =>'0', 'msg'=>'O id do cliente deve ser numérico.'];
        }

        return ['res' => '1'];

    }

    public function validaEditarCliente(){


    }

}