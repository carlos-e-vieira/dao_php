<?php

include_once('models/Car.php');

class CarDAO implements CarDAOInterface
{
    private $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function create(Car $car): void
    {
        $query = 'INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)';

        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':brand', $car->getBrand());
        $stmt->bindParam(':km', $car->getKm());
        $stmt->bindParam(':color', $car->getColor());

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function findAll(): array
    {
        $cars = [];

        $query = "SELECT * FROM cars";

        $stmt = $this->conn->prepare($query);

        $data = $stmt->fetchAll();

        foreach ($data as $item) {
            $car = new Car();

            $car->getId($item['id']);
            $car->getBrand($item['brand']);
            $car->getKm($item['km']);
            $car->getColor($item['color']);

            $cars[] = $car;
        }

        return $cars;
    }
}
