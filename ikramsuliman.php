<?php
class friendContlfo{
    private $name;
    private $id;
    private $email;
    function setName($name){$this->name=$name;}
    function setId($id){$this->id=$id;}
    function setEmail($email){$this->email=$email;}
    function getName( ){ return $this->name;}
    function getId( ){return $this->id;}
    function getEmail( ){return $this->email;}

    function __construct($name,$id,$email){
        $this->setName($name);
        $this->setId($id);
        $this->setEmail($email);
    }
    function Valiedemail($email2){
    
        if(filter_var($email2,FILTER_VALIDATE_EMAIL)){echo 'rrr';}
        else echo 'not valid';
    }
    function __destruct(){echo"Object delete";}
}

$user=new friendContlfo('ikram','11','rrr');

echo $user->getId();
echo '<br>';
echo $user->getName();
echo '<br>';
echo $user->getEmail();


// friendContlfo('ikram','11','rrr')::Valiedemail();

// $name->setName('ikram@gmail.com');