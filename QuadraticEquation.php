<?php


class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        $delta = ($this->b * $this->b) - 4 * $this->a * $this->c;
        return $delta;
    }

    public function getRoot1()
    {
        $r1 = (-$this->b + sqrt($this->getDiscriminant())) / (2 * $this->a);
        return $r1;
    }

    public function getRoot2()
    {
        $r2 = (-$this->b - sqrt($this->getDiscriminant())) / (2 * $this->a);
        return $r2;
    }

    public function getRoot()
    {
        $r = (-$this->b) / (2 * $this->a);
        return $r;
    }
}

