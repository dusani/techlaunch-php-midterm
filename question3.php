<?php 
class User
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) 
    {
       $this->firstName = $firstName;
       $this->lastName = $lastName;

       echo "Hello!, ";
    }

    public function setFullName($firstName) 
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName() 
    {
        return $this->firstName . " " . $this->lastName;
    }
}

$person = new User("Daniel", "Usani");
echo $person->getFullName();