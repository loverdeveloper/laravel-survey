<?php

function toPersian($date)
{
    if (!typeOf($date) == "date" OR !typeOf($date) == "datetime") {
        return false;
    }
    return jdate(date_create($date));
}