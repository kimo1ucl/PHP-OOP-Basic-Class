<?php
Class Teacher{

    public string $firstname;
    public string $middlename;
    public string $lastname;
    // Encapsulation
    // we make this access modyfier private
    private float $salary;

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

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        //do some security stuff
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        //do some security stuff
        $this->salary = $salary;

        return $this;
    }
}

//intantiating a new teatcher
$t = new Teacher;
$t->firstname = "Kim";
$t->middlename = "Vestergård";
$t->lastname = "Mogensen";
$t->setSalary(500);
echo($t->__toString());


?>