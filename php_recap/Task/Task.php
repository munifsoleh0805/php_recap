<?php

class Task{
    // Propertis
    protected $description;
    protected $complete =false;

    // Method
    public function __construct($description)   // setters description
    {
        $this->description= $description;
    }

    public function complete()      // setters complete
    {
      $this->complete=true;
    }

    public function isComplete()    // getters complete
    {
        return $this->complete;
    }

    public function description()   // getters description
    {
        return $this->description;
    }
}

$tasks =[
   new Task( 'go to teh store'),
   new Task( 'go to teh store'),
   new Task( 'go to teh store')
];
$tasks[0]->complete();