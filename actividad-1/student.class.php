<?php 

class Student {
    public $id;
    public $avatar;
    public $name;
    public $surname;
    public $description;
    public $birthdate;

    function __construct($id, $name, $surname, $avatar, $description, $birthdate ) {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->avatar = $avatar;
        $this->description = $description;
        $this->birthdate = $birthdate;
    }

    public function __toString() {
        return self::class . ": " . $this->name . " " . $this->surname; 
    }
}