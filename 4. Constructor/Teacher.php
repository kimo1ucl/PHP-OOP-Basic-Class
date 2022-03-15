<?php

Class Teacher{

    private string $firstname;
    private string $middlename;
    private string $lastname;
    private float $salary;

    //Class constructor
    public function __construct($firstname, $middlename, $lastname, $salary){
		$this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
        if (isset($salary)){
            $this->salary = $salary;
        }
        else{
            $this->salary = 0;
        }
    }
    //Class destructor
    //Usually we don't need to be explict about, the garbage collector
    //will do the work no matter what
    function __destruct() {
        echo "The teacher is being removed{$this->firstname}.\n";
        // sometimes you will see 
        // files and connections being closed 
        // inside the destruct body
      }

      public function __toString():string
      {
          $rt = "";
  
          if(isset($this->salary))
          {
              $rt =
              $this->firstname."\n".
              $this->middlename."\n".
              $this->lastname."\n".  
              (string) $this->salary."\n";  
          }
          else{
              $rt =
              $this->firstname."\n".
              $this->middlename."\n".
              $this->lastname."\n".  
              (string) "Salary is not set\n";  
          }   
          return $rt; 
        }

    public function getSalary():float{
        // do some security stuff
        return $this->salary;
    }
    public function setSalary(float $salary){
        // do some security stuff
        $this->salary = $salary;
        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of middlename
     */ 
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * Set the value of middlename
     *
     * @return  self
     */ 
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }
}
