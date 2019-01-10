<?php
/**
 * Created by PhpStorm.
 * User: petter
 * Date: 11/12/2018
 * Time: 21:29
 */

namespace CI\Controllers;

class Request
{
    function __construct()
    {
        $this->bootstrapSelf();
    }
    private function bootstrapSelf()
    {
        foreach($_SERVER as $key => $value)
        {
            $this->{$this->toCamelCase($key)} = $value;
        }
    }
    private function toCamelCase($string)
    {
        $result = strtolower($string);

        preg_match_all('/_[a-z]/', $result, $matches);
        foreach($matches[0] as $match)
        {
            $c = str_replace('_', '', strtoupper($match));
            $result = str_replace($match, $c, $result);
        }
        return $result;
    }
    public function getBody()
    {
        if($this->requestMethod === "GET")
        {
            return null;
        }
        if ($this->requestMethod == "POST")
        {
            $result = array();
            foreach($_POST as $key => $value)
            {
                $result[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
            return $result;
        }
    }
}