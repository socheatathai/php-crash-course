<?php

// class -> Tesla Y

// Object -> My Tesla Y or Your Tesla Y

class Person {
    // public string $name; 
    // public int $age;

    public function __construct(public string $name, public int $age){
        // $this->name = $name;
        // $this->age = $age;
    }


    public function introduce () : string {
        return "Hi, I am {$this->name} and I am {$this->age} years old.\n";
    }
}

// $person = new Person("John", 30);

// echo $person->introduce();

// $person2 = new Person("Pater", 23);

// echo $person2->introduce();


class Employee extends Person {
    public string $position;
    public int $salary;

    public function __construct(string $name, int $age, string $position, int $salary) {
        parent::__construct($name, $age);
        $this->position = $position;
        $this->salary = $salary;
    }

    public function employers () : array {
        return [
            "name" => $this->name,
            "age" => $this->age,
            "position" => $this->position,
            "salary" => $this->salary
        ];
    }
}

$employee = new Employee("John", 30, "Software Developer", 500);

var_dump($employee->employers());

$employees = [
    new Employee("John", 30, "Software Developer", 500),
    new Employee("Peter", 23, "Designer", 300),
];

var_dump($employee->employers());