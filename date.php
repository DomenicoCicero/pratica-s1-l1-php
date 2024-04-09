<?php
date_default_timezone_set('Europe/Rome');
$dataOdierna = date('l, j F Y');
$dataOdierna = translateDate($dataOdierna);
echo  $dataOdierna;

function translateDate($data) {
    // Traduci il nome del giorno
    $giorniInglese = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $giorniItaliano = array('Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato', 'Domenica');
    $data = str_replace($giorniInglese, $giorniItaliano, $data);

    // Traduci il nome del mese
    $mesiInglese = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $mesiItaliano = array('Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre');
    $data = str_replace($mesiInglese, $mesiItaliano, $data);

    return $data;
};
