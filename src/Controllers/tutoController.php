<?php

namespace tutoAPI\Controllers;

use tutoAPI\Models\TutoManager;
use tutoAPI\Models\Tuto;
use tutoAPI\Controllers\abstractController;

class tutoController extends abstractController
{

    public function show($id)
    {

        // Données issues du Modèle

        $manager = new TutoManager();

        $tuto = $manager->find($id);

        // Template issu de la Vue

        return $this->jsonResponse($tuto, 200);
    }

    public function index()
    {

        $tutos = [];

        $manager = new TutoManager();

        $tutos = $manager->findAll();

        return $this->jsonResponse($tutos, 200);
    }

    public function update($id)
    {

        // Données issues du Modèle

        $manager = new TutoManager();

        $_PATCH = json_decode(file_get_contents('php://input'));

        $tuto = $manager->update($_PATCH, $id);

        // Template issu de la Vue

        return $this->jsonResponse($tuto, 200);
    }

    public function add()
    {

        // Données issues du Modèle

        $manager = new TutoManager();

        $_PATCH = json_decode(file_get_contents('php://input'));

        $tuto = $manager->add($_PATCH);

        // Template issu de la Vue

        return $this->jsonResponse($tuto, 200);
    }

    public function delete($id)
    {

        // Données issues du Modèle

        $manager = new TutoManager();

        $tuto = $manager->find($id);
        
        $manager->delete($id);

        // Template issu de la Vue

        return $this->jsonResponse($tuto, 200);
    }
}
