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
    public function __toString():string
    {
            $rt =
            $this->firstname."\n".
            $this->middlename."\n".
            $this->lastname."\n".  
            (string) $this->salary."\n";      
        return $rt; 
    }
}


$t = new Teacher;
//Note: We can access the attributes directly
//they are all public
$t->firstname = "Kim";
$t->middlename = "Vestergård";
$t->lastname = "Mogensen";
$t->salary = 500;

echo $t->__toString()

?>