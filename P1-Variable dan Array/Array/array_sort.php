<?php

     //mendeklarasikan array
     $buah = [
        'p' =>'Pisang',
        'a' =>'Apel',
        'j' => 'Jeruk',
        'm' => 'Mangga',
        'k' => 'Kelapa'
    ];

    //menampilkan array dengan foreach dengan list
    echo '</ol>';
    foreach ($buah as $b => $value) {
        echo '<li>'.$b.' => '.$value.'</li>';
    }
    echo '</ol>';

    sort($buah);
?>