<?php

namespace RefactoringGuru\FactoryMethod\Conceptual;

abstract class Logistics
{
    abstract public function createTransport(): Transport;

    public function planDelivery(): string
    {
        $transport = $this->createTransport();
        $result = "Creator: The same creator's code has just worked with" . $transport->deliver();
        return $result;
    }
}

class RoadLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Truck();
    }
}

class SeaLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Ship();
    }
}

interface Transport
{
    public function deliver(): string;

    public function load(): string;

    public function unload(): string;
}

class Truck implements Transport
{
    public function deliver(): string
    {
        return "{Result of the Truck}";
    }

    public function load(): string
    {
        return "{Result of the Truck}";
    }

    public function unload(): string
    {
        return "{Result of the Truck}";
    }
}

class Ship implements Transport
{
    public function deliver(): string
    {
        return "{Result of the Ship}";
    }

    public function load(): string
    {
        return "{Result of the Ship}";
    }

    public function unload(): string
    {
        return "{Result of the Ship}";
    }
}

function clientCode(Logistics $transport)
{
    echo "Client: I`m not aware of the creator`s class, but it still works.\n" . $transport->deliver();
}

echo "App: Launched with the Road Logistics.\n";
clientCode(new RoadLogistics());
echo "\n\n";

echo "App: Launched with the Sea Logistics.\n";
clientCode(new SeaLogistics());