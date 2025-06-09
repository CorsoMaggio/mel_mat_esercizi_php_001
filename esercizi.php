<?php
//questo è il tag di aperturam pe run file php puro non serve il tag di chiusura
//dichiarare una variabile con il dollaro

$stringa = 'Ciao'; //assegnazione

//costanti =si scrive const ivce che il $ const NOME= valore
const INTERO = 78;

//php è case sensitive!!
//non posso iniziare le variabili con simpoli o numeri, deve sempre iniziare con un carattere

$testoNuovo = 88; //camelCase
$testo_Nuovo = "ciaone";

//stampare a console
echo $testo_Nuovo;
echo ". il numero scelto è:" . $testoNuovo;

//tipi di dati
//predefiniti, sclari,o primitivi;
$stringa = 'ciao';
$intero = 345;
$float = 56.88;
$booleano = true;
$null = null;
//tipologie di stringhe:
//apici singoli non escape: non eeffttuano l'escape= non viene eseguita, ci andranno solo dati primitivi, non esegue nulla
//per sicurezza nel valore delle variabili vanno sempre usate queste
$stringa1 = 'ciao';
$stringa2 = 'mi chiamo Melania';
//apice doppio escape=ci posso inserire delle variabile e mi esgue il comando, oppure posso scrivere variabili concatenate
echo $stringa1 . ' ' . $stringa2;
echo "$stringa1 $stringa2";
//per andare a capo si usa  \n, ma va inserita in doppi apici all'interno di una variabile stringa:


$stringa1 = 'ciao' . "\n";
echo $stringa2;

echo $stringa1 . $stringa2;

//userDefined/Dati complessi;
//ARRAY SEMPLICI
$scatola1 = []; // array vuoto;
$scatola1 = ['ciao', 'sono', 'io'];
$scatola2 = [56755, 890];
$scatola3 = ['tepssino', 555, 'jhj'];
echo $scatola1[0];
//ARRAY CHIAVE VALORE O ARRAY COMPLESSI:
$person1 = [
    'name' => 'Francesco',
    'surname' => 'Mansi',
    0 => 89

]; //se non viene assegnato dall'utente, l'indice viene assegnato in automatico IN BASE ALL'ULTIMO VALORE CHIAVE
//NUMERICO INSERITO,

echo $person1 = [];
//array o oggetti;posssono ospitare tipi primitivi
//oggetti: possono ospirìtare array ma array non possono  contenere oggetti;


//ECHO:STAMPA SOLO I VALORI
//PRINT.R() STAMPA TUTTO MA SERVE PER DEBUG;
//VAR_DUMP() STAMPA TUTTO IN MANIERA DETTAGLIATA;
//DIE()PER FERMARE IL COMANDO  
