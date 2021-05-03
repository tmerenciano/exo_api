<?php

require('../src/init.php');

use tutoAPI\Controllers\tutoController;

switch(true) {

    case preg_match('#^tutos/(\d+)$#', $uri, $matches):

        $id = $matches[1];

        $controller = new tutoController();

        return $controller->show($id);

        break;
    
    case preg_match('#^tutos((\?)|$)#', $uri):

        $controller = new tutoController();

        return $controller->index();

        break;
    
    case ($uri == 'tutos/add'):

        $controller = new tutoController();
        
        return $controller->add();
        
        break;
    
    default:
    
    http_response_code(404);
    
    echo "<h1>Tutoriels</h1><p>Page par défaut</p>";
    
}