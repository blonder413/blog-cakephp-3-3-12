<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class ArticlesController extends AppController
{
    /*
    public $paginate = [
        'Articles' => [
            'conditions' => ['published' => 1]
        ]
    ];
    */
    
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Auth', [
            'authorize' => 'Controller',
            'loginAction' => ['controller' => 'Users', 'action' => 'login']
        ]);
        $this->loadComponent('Csrf');
        $this->loadComponent('Flash');
    }
    
    public function index() {}
    
    public function update($id)
    {
        $this->Flash->success('Article updated.');
        $this->setAction('index');  // permite redirigir a otra acción dentro del mismo controlador
    }
}