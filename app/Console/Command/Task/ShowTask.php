<?php
class ShowTask extends Shell{
    public $uses=array("User");

    public function execute(){

        $users = $this->User->find("all");
        $this->out("Users:\n");
        $this->out("id        username");
        //echo print_r($params);
        foreach($users as $user)
        {
            print"\n";

            foreach($user as $item)
            {

               $this->out($item['id']."        ".$item['username']);
            }
        }
    }
};