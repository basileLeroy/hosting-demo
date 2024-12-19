<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class Person
{
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function sayName ()
    {
        return "Hello From " . $this->name;
    }
}

$secretName = $_ENV["NAME"] ?? 'no name';

$janitor = new Person($secretName);

echo $janitor->sayName();

?>