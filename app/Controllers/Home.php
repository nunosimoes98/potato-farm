<?php

namespace App\Controllers;
use App\Models\Farm;
use App\Models\Potato;


class Home extends BaseController
{
    protected $session;

    public function __construct(){
      
        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
    }
    
    public function index($message_to_show = '')
    {
        $potato_model = new Potato();
        $data['potatoes'] = $potato_model->orderBy('id', 'DESC')->findAll();
        
        $farm_model = new Farm();
        $data['farms'] = $farm_model->orderBy('id', 'DESC')->findAll();
        
        if(!empty($message_to_show))
        {
            $data['message'] = $message_to_show;
        }

        return view('index', $data);
    }

    public function calculate()
    {
        $farm_id = $this->request->getVar('farm');
        $potato_id = $this->request->getVar('potato');
        $season = $this->request->getVar('season');

        $this_farm = $this->getDataWithId('farms', $farm_id);
        $this_potato = $this->getDataWithId('potatoes', $potato_id);

        $this->calculatePotatoesInFarmBySeason($this_farm, $this_potato, $season);
    }


    private function getDataWithId($table, $id)
    {
        $db = \Config\Database::connect();

        $query = $db->query("SELECT * FROM $table WHERE id = $id");

        $results = $query->getResult();

        if(!$results) return [];

        return $results[0];
    }

    private function calculatePotatoesInFarmBySeason($farm, $potato, $season) {

        $calculate = true;
        $session = session(); 

        // nr of the days by season
        $seasons = [
            'spring' => '93',
            'summer' => '94',
            'autumn' => '89',
            'winter' => '90'
        ];

        if($farm->espaco < $potato->espaco) {
            $this->session->setFlashdata('error_message','A área ócupada por cada batata não pode ser superior à da fazenda!') ;
            $calculate = false;
        }

        if($calculate)
        {
            // get the number of the days of the season 
            $season_days = $seasons[$season];

            // check how many times this type of potato can be planted 
            // during the season according to the potato growing time
            $times_to_be_planted = floor($season_days/$potato->tempo);

            // check how many potatoes are possible to plant in the farm
            $potatoes_to_be_planted = floor($farm->espaco/$potato->espaco);
            
            // it's time to calculate
            $potatoes_in_farm = $potatoes_to_be_planted * $times_to_be_planted;

            if($potatoes_in_farm > 0) {
                $this->session->setFlashdata('success_message','É possível plantar ' . $potatoes_in_farm . ' batatas na fazenda ' . $farm->nome_fazenda . '!') ;
            } else {
                $this->session->setFlashdata('error_message','Não é possível plantar nenhuma batata na fazenda ' . $farm->nome_fazenda . '!') ;
            }
        }

        return $this->response->redirect(site_url('/'));
        
    }
    
}
