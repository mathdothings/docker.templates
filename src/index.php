<?php
class Person
{
    public function __construct(
        public string $name,
        public int $age
    ) {}

    public function personToJson(): string
    {
        return json_encode([
            "name" => $this->name,
            "age" => $this->age
        ]);
    }
}

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$person = new Person('John', 30);
echo $person->personToJson();
