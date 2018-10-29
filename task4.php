
<?php
$countries = ["Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin",
    "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
    "Poland" => "Warsaw"];

$sorted = sort($countries);

foreach ($countries as $indeksas => $value) {
    $countries = $value;
    $countriesValue = $value;
    echo "The capital of " . $indeksas . " is" . $value . "<br>";
}
;

$countries = ["Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin",
    "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
    "Poland" => "Warsaw"];

$ksorted = ksort($countries);

foreach ($countries as $indeksas => $value) {
    $countries = $indeksas;
    $countriesIndeksas = $indeksas;
    echo "The capital of " . $indeksas . " is" . $value;

}