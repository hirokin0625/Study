<?php
class Tsubo
{
    function answer($input)
    {
        $answer = "";
        $answer .= $this->getPatternAnswer($input, 3);
        $answer .= $this->getPatternAnswer($input, 5);
        $answer .= $this->getPatternAnswer($input, 7);
        return ($answer) ? $answer : $input;
    }

    function getPatternAnswer($input, $pattern)
    {
        if ($this->isEnableConvert($input, $pattern)) {
            return $this->convertPattern($pattern);
        }
        return "";
    }

    function isEnableConvert($input, $pattern)
    {
        if (!is_numeric($pattern)) {
            return false;
        }
        if ($input % $pattern !== 0) {
            return false;
        }
        return true;
    }

    function convertPattern($pattern)
    {
        if ($pattern == 3) {
            return "Fizz";
        } elseif ($pattern == 5) {
            return "Buzz";
        } elseif ($pattern == 7) {
            return "Hoge";
        }
        return "";
    }
}

//$obj = new Tsubo();
//echo $obj->answer($argv[1]) ."\n";
