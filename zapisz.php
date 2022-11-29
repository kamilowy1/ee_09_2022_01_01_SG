<?php 
// utworzenie zmiennych polaczeniowych 
$server = "localhost"; 
$user = "root"; 
$passwd = "" ; 
$dbname = "wedkowanie";

// ustawienie polaczenia 

$conn = mysqli_connect($server,$user,$passwd,$dbname);

// sprawdzenie polaczenia 
if (!$conn) {
   die ("Brak polaczenia".mysqli_error($conn));
}
echo "Polaczono poprawnie";

// pobranie wartosci z bazy danych 

$imie = $_POST ['imie'];
echo $imie;
$nazwisko = $_POST ['nazwisko']; 
echo $nazwisko; 
$adres = $_POST ['adres'];
echo $adres; 

// wprowadzenie wartosci do bazy danych 

$conn = mysqli_connect($server,$user,$passwd,$dbname);
$sql = "INSERT INTO karty_wedkarskie (imie, nazwisko, adres) VALUES ('$imie','$nazwisko','$adres')";

// sprawdzenie wprowadzenia wartosci do bazy 

if (mysqli_query($conn,$sql)) {
   echo "Poprawnie wprowadzono dane";
} else {
   echo "fatalny blad".mysqli_error($conn);
}

?>