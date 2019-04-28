<?php 
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
// src/Controller/UsersController.php
class UsersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
        $connection = ConnectionManager::get('test');
        //var_dump($connection);exit;
        //$connection = ConnectionManager::get('default');
        $users = $connection->execute('SELECT * FROM user')->fetchAll('assoc');
        var_dump($users);exit;
        // $this->set([
        //     'users' => $users,
        //     '_serialize' => ['users']
        // ]);
    }

    // public function view($id)
    // {
    //     $user = $this->users->get($id);
    //     $this->set([
    //         'user' => $user,
    //         '_serialize' => ['user']
    //     ]);
    // }

    // public function add()
    // {
    //     $user = $this->users->newEntity($this->request->getData());
    //     if ($this->users->save($user)) {
    //         $message = 'Saved';
    //     } else {
    //         $message = 'Error';
    //     }
    //     $this->set([
    //         'message' => $message,
    //         'user' => $user,
    //         '_serialize' => ['message', 'user']
    //     ]);
    // }

    // public function edit($id)
    // {
    //     $user = $this->users->get($id);
    //     if ($this->request->is(['post', 'put'])) {
    //         $user = $this->users->patchEntity($user, $this->request->getData());
    //         if ($this->users->save($user)) {
    //             $message = 'Saved';
    //         } else {
    //             $message = 'Error';
    //         }
    //     }
    //     $this->set([
    //         'message' => $message,
    //         '_serialize' => ['message']
    //     ]);
    // }

    // public function delete($id)
    // {
    //     $user = $this->users->get($id);
    //     $message = 'Deleted';
    //     if (!$this->users->delete($user)) {
    //         $message = 'Error';
    //     }
    //     $this->set([
    //         'message' => $message,
    //         '_serialize' => ['message']
    //     ]);
    // }
}