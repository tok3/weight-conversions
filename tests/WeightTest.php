<?php

use Tok3\WeightConversions\Weight;

it('can convert kilograms to pounds correctly', function () {

    $pounds = Weight::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});
