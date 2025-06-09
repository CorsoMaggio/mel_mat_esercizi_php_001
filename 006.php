<?php
//Date le seguenti variabili:


//Dicharazione Varabili
$a = false;
$b = true;
$c = true;
$d = false;


// Utilizzando la logica di un Sudoku, completare lo schema qui sotto riportato cosi da ottenere i valori stampati dai var_dump() a fondo pagina.

// Ogni blocco dovrà tassativamente avere:

// - 3 AND (&&)
// - 3 OR ( || );
// - 3 TRUE
// - 3 FALSE
// - Non ci sono limitazioni sull’operatore di negazione ( ! )
//Primo Blocco Esempio Completo
$ab = !$a && $b; //true
$ad = $a || $d; // false
$bc = $b || $c; //True
$bd = !$b || $d; //False
$cb = $c && $b; //True
$ca = $c && $a; //false

//Secondo Blocco Da completare
$cabc = $ca || $bc; //or-true
$cbbc = $cb && $bc; //and, true
$bdab = $bd && $ab; //and,false
$bccb = $bc && !$cb; //and-false--
$bcab = !$bc || !$ab; //or-false--
$bcca = $bc || $ca; //or-true



//Terzo Blocco Da completare
$cbbccabc = $cbbc || $cabc; //or- true
$bccbbdab = $bccb || !$bdab; // or-true
$cabcbcca = !$cabc && $bcca; //and-false
$bdabbccb = $bdab && $bccb; // or-false
$cbbcbccb = $cbbc && $bccb; //or-true
$cabcbccb = $cabc || $bccb;

//Output Esempio Completo
var_dump($cbbccabc); //True
var_dump($bccbbdab); //True
var_dump($cabcbcca); //False
var_dump($bdabbccb); //False
var_dump($cbbcbccb); //False
var_dump($cabcbccb); //True