<?php

namespace App\Controllers;
use App\Models\Potato;
use CodeIgniter\Controller;

class PotatoController extends BaseController
{
    private $potato = '' ;
    protected $session;

    public function __construct(){
      
        $this->potato = new Potato();       
        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;   
    }

    public function index()
    {
        $data['potatoes'] = $this->potato->orderBy('id', 'DESC')->findAll();
        return view('potatoes', $data);
    }

    public function store()
    {
        $data = [
            'tipo_batata' => $this->request->getVar('name'),
            'tempo'  => $this->request->getVar('time'),
            'espaco'  => $this->request->getVar('area')
        ];

        $create = $this->potato->insert($data);
        if($create) 
        {
            $this->session->setFlashdata('success_message', 'Criou o tipo de batata com sucesso!') ;
        }

        return $this->response->redirect(site_url('/potatoes'));
    }
 
    // delete user
    public function delete($id = null){
        $delete = $this->potato->where('id', $id)->delete($id);
        if($delete) 
        {
            $this->session->setFlashdata('success_message', 'Apagou o tipo de batata com sucesso!') ;
        }
        return $this->response->redirect(site_url('/potatoes'));
    }    
    
}
