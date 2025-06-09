<?php
// Creare una variabile di tipo Stringa chiamata $results che stampi sul terminale il testo (rispettando spazi e punteggiature) di questi due array.

// Ricordando l’accesso agli array con indici e chiavi visti a lezione, ricostruire questa frase:

// **Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita.**

// ATTENZIONE: Nell’array potreste trovare degli intrusi o non trovare alcune preposizioni. Approcciate il problema nel modo che ritenute più opportuno: nuove variabili, concatenamenti, apice singolo, doppio apice ecc..


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            [
                'cammin',
                'Nel',
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
    ]
];
$spazio = ' ';
//var_dump($words1);
//var_dump($words2);
$results =  $words1[6][3][1][1] . $spazio . $words1[6][3][0] . $spazio . 'del' . $spazio . $words1[6][3][1][0] . $spazio;
$results2 = 'di' . $spazio . $words2['elemento2'] . $words1[2] . ',' . $spazio . $words1[4] . $spazio . $words1[6][3] . $spazio;
//var_dump($results); //<--- Tutto in questa variabile
echo $results . $results2;
