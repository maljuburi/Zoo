<?php

class Animals {

	private $anid;
	private $name;
	private $dob;
	private $type;
    private $gender;

	public function __construct($anid, $name, $dob, $type, $gender) {
		$this->anid = $anid;
		$this->name = $name;
		$this->dob = $dob;
		$this->type = $type;
        $this->gender = $gender;
	}

    public function GetId(){
		return $this->anid;
	}

    public function GetName() {
		return $this->name;
	}

	public function SetName($name) {
		$this->name = $name;
	}

    public function GetDob() {
		return $this->dob;
	}

    public function SetDob($dob) {
		$this->dob = $dob;
	}
    
    public function GetType(){
        return $this->type;
    }

    public function SetType($type){
        $this->type = $type;
    }

	public function GetGender(){
		return $this->gender;
	}

	public function SetGender($gender){
		$this->gender = $gender;
	}


  }

?>