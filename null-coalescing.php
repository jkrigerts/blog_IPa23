<?php
// Šī datne nav daļa no projekta, tikai piemērs par
// Ternary un Null Coalescing operatoru izmantošanu


// Lietotājs ievada (vai neievada) vērtību mainīgajā $x.
// Ja $x ir ievadadīts, tad $y piešķirt to pašu
// Ja $x nav, tad $y ir "nav vērtības"
$x = 5;

// 1. Parasts if - else
if (isset($x)) {
  $y = $x;
} else {
  $y = "nav vērtības";
}

// 2. Ternary Operator - Trīskāršais operators
$y = isset($x) ? $x : "nav vērtības";

// 3. Null Coalescing Operator
$y = $x ?? "nav vērtības";

