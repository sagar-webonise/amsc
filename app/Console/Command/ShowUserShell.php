<?php
class ShowUserShell extends Shell {

    public $tasks=array('Show');
    public function main() {
        $this->Show->execute();
    }
}