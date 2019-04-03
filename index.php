<?php

class Person
{
    var $firstName;
    var $lastName;

    function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

// $firstName = 'Miguel';
// $lastName = 'Hernandez';

// $fullName = "$firstName $lastName";

// $firstName2 = 'Ramon';
// $lastName2 = 'Lapenta';

// $fullName2 = "$firstName2 $lastName2";

// echo "$fullName es amigo de $fullName2";

// $person1 = new Person;
// $person1->firstName = 'Miguel';
// $person1->lastName = 'Hernandez';

// $person2 = new Person;
// $person2->firstName = 'Ramon';
// $person2->lastName = 'Lapenta';

// echo "{$person1->fullName()} es amigo de {$person2->fullName()}";

$person1 = new Person('Miguel', 'Hernandez');

$person2 = new Person('Ramon', 'Lapenta');


echo "{$person1->fullName()} es amigo de {$person2->fullName()}";
