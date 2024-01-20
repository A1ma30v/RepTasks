<?php

class Person
{
    public function __construct($name, $age, $job, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
        $this->salary = $salary;
    }
}

class Developer extends Person
{
    public function work()
    {
        echo 'I am work developer!';
    }
}

class Director extends Person
{
    public function __construct($name, $age, $job, $salary, $timePerWeek)
    {
        parent::__construct($name, $age, $job, $salary);
        $this->timePerWeek = $timePerWeek;
    }

    public function work()
    {
        echo 'I am work director!';
    }
}

class Judje extends Person
{
    public function __construct($name, $age, $job, $salary,$timePerMonth)
    {
        parent::__construct($name, $age, $job, $salary);
        $this->timePerMonth = $timePerMonth;
    }

    public function work()
    {
        echo 'I am work judje!';
    }
}

class Driver extends Person
{
    public function work()
    {
        echo 'I am work driver!';
    }
}

class Teacher extends Person
{
    public function work()
    {
        echo 'I am work teacher!';
    }
}

$developer = new Developer("Brandon", 33, 'developer', 4500);
echo $developer->work() . "\n";
echo  $developer->name . " " . $developer->age . " " . $developer->job . " " . $developer->salary . "\n";

$director = new Director("Barbara", 43, 'director', 5500, 40);
echo "\n" .$director->work();
echo "\n" .$director->name . " " . $director->age . " " . $director->job . " " . $director->salary . " " . $director->timePerWeek;
$judje = new Judje("Alan", 30, 'judje', 3900, 160);
echo "\n" .$judje->work();
echo "\n" .$judje->name . " " . $judje->age . " " . $judje->job . " " . $judje->salary . " " . $judje->timePerMonth;
$driver = new Driver("Kate", 23, 'driver', 1000);
echo "\n" .$driver->work();
echo "\n" .$driver->name . " " . $driver->age . " " . $driver->job . " " . $driver->salary;
$teacher = new Teacher("Bob", 30, 'teacher', 1500);
echo "\n" .$teacher->work();
echo "\n" .$teacher->name . " " . $teacher->age . " " . $teacher->job . " " . $teacher->salary;