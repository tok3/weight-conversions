<?php

namespace Tok3\WeightConversions;
use App\Models\User;
class Weight
{
    protected float $kilograms;

    public static function kilograms(float $kilograms): self
    {
        $test = array(1, 2, 3, 5);


        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }

    public function toStones(): float
    {
        return $this->kilograms * 0.15747;
    }
}
