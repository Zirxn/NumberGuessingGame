<?php
echo "+==============================+\n";
echo "|======= SELAMAT DATANG =======|\n";
echo "|== DI PERMAINAN TEBAK ANGKA ==|\n";
echo "+==============================+\n";
while(true) {
    $computer = rand(1,9);
    echo "\n  Masukan Tebakanmu : ";
    $player = trim(fgets(STDIN));
    if ($player == $computer) 
    {
        echo "\n      ~(￣▽￣)~    \n";
        echo "  +===============+";
        echo "\n  |  KAMU MENANG  |\n  +===============+\n  |ANGKA TEBAK = $computer|\n  |ANGKA KAMU  = $player|\n  +===============+\n";
        exit;
    }
    else 
    {
        echo "\n      ( ͡° ͜ʖ ͡°)     \n";
        echo "  +===============+";
        echo "\n  |  KAMU KALAHH  |\n  +===============+\n  |ANGKA TEBAK = $computer|\n  |ANGKA KAMU  = $player|\n  +===============+\n";
    }
}




