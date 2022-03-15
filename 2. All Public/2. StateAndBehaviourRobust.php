<?php

Class Teacher{
    //state. 
    //Attribuets descibes different aspects of the object
    public string $firstname;
    public string $middlename;
    public string $lastname;
    public float $salary;


    //Behaviour
    //methods are thing the objects can do
    //now the function is robust handling
    //the use case that the salary has not yet been set.
    function __toString()
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
}


$t = new Teacher;
$t->firstname = "Kim";
$t->middlename = "Vestergård";
$t->lastname = "Mogensen";


echo $t->__toString()

?>