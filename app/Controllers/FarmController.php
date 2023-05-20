<?php

namespace App\Controllers;
use App\Models\Farm;
use CodeIgniter\Controller;

class FarmController extends BaseController
{
    private $farm = '' ;
    protected $session;
    
    public function __construct(){
      
        $this->farm = new Farm();   
        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;    
    }
    public function index()
    {
        $data['farms'] = $this->farm->orderBy('id', 'DESC')->findAll();
        return view('farms', $data);
    }

    public function store()
    {
        $data = [
            'nome_fazenda' => $this->request->getVar('name'),
            'espaco'  => $this->request->getVar('area'),
        ];

        $create = $this->farm->insert($data);
        if($create) 
        {
            $this->session->setFlashdata('success_message', 'Criou a fazenda com sucesso!') ;
        }

        return $this->response->redirect(site_url('/farms'));
    }


    public function delete($id = null){
        $delete = $this->farm->where('id', $id)->delete($id);
        if($delete) 
        {
            $this->session->setFlashdata('success_message', 'Apagou a fazenda com sucesso!') ;
        }
        return $this->response->redirect(site_url('/farms'));
    }    
    
}
