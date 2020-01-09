<?php
  function randoomString($length) {
        $result = '';
        for($i = 0; $i < $length; $i++) {
            $result .= chr(rand(0, 25) + 97);
        }
        return $result;
    }
?>