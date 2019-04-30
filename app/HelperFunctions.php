<?php

function toPersian($date)
{
    /** @var array $allowTypes Allowed Types of input value */
    $allowTypes = ['date','datetime'];
    if (!in_array($date,$allowTypes)) {
        return false;
    }
    return jdate(date_create($date));
}