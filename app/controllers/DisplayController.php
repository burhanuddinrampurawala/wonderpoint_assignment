<?php

class DisplayController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	//intializing model
    	$data = new Data();
    	// getting data from the model
 		$users = $data->getData();
        // Pass all the username and the posts to the views
        $this->view->setVar("users", $users);
    }

}

