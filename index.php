<?php

function sayHello($name) {
    $textHello = "Hello";

    return $textHello . " " . $name;
}

echo sayHello("world");