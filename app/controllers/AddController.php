<?php

class AddController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    public function adddataAction()
    {
    	 $user = new Data();
    	 $uuid = uniqid('', true);
    	 $data = $this->request->getPost();
    	 $data["uniqueid"] = $uuid;
        // Store and check for errors
        $success = $user->save(
            $data,
            [
            	"uniqueid",
                "firstname",
                "lastname",
                "email",
                "gender",
                "education",
                "skills",

            ]
        );

        if ($success) {
            echo "<h1>Thanks for registering!</h1>";
        } else {
            echo "<h1>Sorry, the following problems were generated:</h1> ";

            $messages = $user->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        $this->view->disable();
    }

}

