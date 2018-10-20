<?php

require_once('vendor/autoload.php');

use MathPHP\Algebra;

// Greatest common divisor (GCD)
$gcd = Algebra::gcd(8, 12);
/*echo($gcd);*/

// Extended greatest common divisor - gcd(a, b) = a*a' + b*b'
$gcd = Algebra::extendedGcd(12, 8); // returns array [gcd, a', b']
print_r($gcd);
// Least common multiple (LCM)
$lcm = Algebra::lcm(5, 2);
echo($lcm);

// Factors of an integer
$factors = Algebra::factors(12); // returns [1, 2, 3, 4, 6, 12]

// Cubic equation
list($a₃, $a₂, $a₁, $a₀) = [2, 9, 3, -4]; // 2x³ + 9x² + 3x -4
list($x₁, $x₂, $x₃)      = Algebra::cubic($a₃, $a₂, $a₁, $a₀);


// Quartic equation
list($a₄, $a₃, $a₂, $a₁, $a₀) = [1, -10, 35, -50, 24]; // z⁴ - 10z³ + 35z² - 50z + 24 = 0
list($z₁, $z₂, $z₃, $z₄)      = Algebra::quartic($a₄, $a₃, $a₂, $a₁, $a₀);
 ?>
