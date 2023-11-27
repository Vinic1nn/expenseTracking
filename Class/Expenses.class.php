<?php

class Expenses
{
    private $day;
    private $description;
    private $amount;

    public function __construct($day, $description, $amount)
    {
        $this->setDay($day);
        $this->setDescription($description);
        $this->setAmount($amount);
    }
    
    public function getDay()
    {
        return $this->day;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setDay($day)
    {
        $this->day = $day;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
}

?>