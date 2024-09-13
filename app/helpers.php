<?php

if (!function_exists('greet_user')) {
    function greet_user($name)
    {
        return "Hello, " . ucfirst($name) . "!";
    }
}

if (!function_exists('format_date')) {
    function format_date($date, $format = 'd-m-Y')
    {
        return \Carbon\Carbon::parse($date)->format($format);
    }
}
