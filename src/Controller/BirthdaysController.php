<?php
namespace App\Controller;

use App\Controller\AppController;

class BirthdaysController extends AppController
{

    public function index()
    {
        $url = 'http://10.120.134.112:3002/getBirthday'; // Remplacez par l'URL réelle de l'API

        // Effectuer la requête
        $response = file_get_contents($url);
        $data = json_decode($response, true);
    
        // Traiter la réponse
        $this->processResponse($data);
    }
    
    // Méthode pour traiter la réponse
    private function processResponse($data) {
        $person = $data['students_birthday'][2];
        $this->set('person', $person);
        // Traitez la réponse comme nécessaire, par exemple, sauvegardez-la en base de données
        // Cette étape peut inclure le formatage des données, la validation, etc.
    }

}