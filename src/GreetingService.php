<?php
namespace Redoy\GreetingPackage;

class GreetingService
{
    public function greet($name)
    {
        return "Hello, $name! Welcome to our Laravel package.";
    }
}
