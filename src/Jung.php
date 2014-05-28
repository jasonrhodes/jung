<?php

namespace rhodesjason;

class Jung {

  public static function analyze($subject) {

    $max = 10;
    $analysis = "";

    $analyze = function (&$subject, $session) use ($max, &$analysis, &$analyze) {

      if ($session > $max) return;
      if (is_null($subject) || is_callable($subject)) return;

      if (!is_object($subject) && !is_array($subject)) {
        $analysis .= $subject;
        return;
      }

      $analysis .= "{";

      foreach($subject as $key => $value) {

        if (is_null($value) || is_callable($value)) continue;

        $analysis .= $key;
        $analyze($value, $session + 1);

      }

    };

    $analyze($subject, 0);

    return $analysis;

  }

}
