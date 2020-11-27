<?php

/**
 * Tutorial ini mengacu pada dokumentasi php
 * https://www.php.net/manual/en/function.func-get-args.php
 */

// mengambil semua data parameter pada suatu function, tanpa
// kita mendefinisikannya

// Membuat fungsi bernama fungsiku
// tanpa kita definisikan parameternya

// tanpa parameter
function fungsiku()
{
    $getALlParam = func_get_args();

    echo "<pre>";
    print_r($getALlParam);
    echo "</pre>";
}

// jika dengan parameter
// akan terlalu panjang

// function fungsiku($fungsiSatu, $fungsiDua, $fungsiTiga, $danSeterusnya)
// {
//     # code...
// }

// masukan parameternya kedalam fungsi
fungsiku(1, 2, 2.5, 'Teguh', 'Rijanandi', true, false, ['ini','array']);

// hasilnya setelah dijalankan
// https://freeimage.host/i/FWLok7