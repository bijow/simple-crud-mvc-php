<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {

    public function create() {
        $this->render('add');
    }
    public function edit($params) {
        // $usuario = Usuario::select()->where('id', $params['id'])->one();
        $usuario = Usuario::select()->find($params['id']);
        $this->render('edit', ['usuario' => $usuario]); 
    }
    public function editAction($params) {
        
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        if ($name && $email) {
            Usuario::update()
                ->set('name', $name)
                ->set('email', $email)
                ->where('id', $params['id'])
                ->execute();
            // redirect
            $this->redirect('/');
        }

        $this->redirect('/usuario/'.$params['id'].'/editar');
    }
    public function delete($params) {
        Usuario::delete()
            ->where('id', $params['id'])
            ->execute();
        $this->redirect('/');
    }

    public function createAction() {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if ($name && $email) {
            $data = Usuario::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                // insert
                Usuario::insert([
                    'name' => $name,
                    'email' => $email
                ])->execute();
                // redirect
                $this->redirect('/');
            }
        }
        // redirect
        $this->redirect('/novo');
    }

}