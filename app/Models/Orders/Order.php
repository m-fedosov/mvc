<?php

namespace App\Models\Orders;

class Order
{
    private int $id;
    private int $userId;
    private int $productId;
    private int $quantity;
    private string $date;

    public function __construct(int $id, int $userId, int $productId, int $quantity, string $date)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->date = $date;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getProductId(): int
    {
        return $this->productId;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        if ($quantity > 0) {
            $this->quantity = $quantity;
        }
    }

    public function getDate(): string
    {
        return $this->date;
    }
}
