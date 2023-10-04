<?php
    session_set_cookie_params(3); // ustawianie dlugosc trwania ciasteczek na 3 sekundy
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["iloscPol"] = $_POST["iloscPol"];
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="iloscPol">ilość pól:</label>
        <!-- Wartosc value to kod PHP ktory ustawia wartosc pola na wartosc przechowywana w sesji pod kluczem iloscPol, jesli istnieje. Jesli nie istnieje (czyli jesli isset($_SESSION['iloscPol]) zwraca false oraz ustawia wartosc pola na pusty '') -->
        <input type="number" id="iloscPol" name="iloscPol" min="1" required value="<?php echo isset($_SESSION['iloscPol']) ? $_SESSION['iloscPol'] : '' ?>">
        <input type="submit" value="generuj formularz">
    </form>

    <div id="formularz"></div>
    <div id="suma"></div>

    <script>

        function generujFormularz(iloscPol) {
            let formularz = '<form>';
            for (let i = 1; i <= iloscPol; i++) { // generowanie formularza z wartosciami pol do wpisania liczb
                formularz += '<label for="pole' + i + '">Pole ' + i + ':</label>';
                formularz += '<input type="number" id="pole'+ i +'" name="pole'+ i +'" oninput="obliczSume()"><br>';
            }
            
            formularz += '</form>';
            document.getElementById('formularz').innerHTML = formularz;
        }

        function obliczSume() {
            let iloscPol = document.getElementById('iloscPol').value;
            let suma = 0;

            for (let i = 1; i <= iloscPol; i++) { // kod na obliczanie wpisanych wartosci w pola w wygenerowanym formularzu
                let poleValue = parseFloat(document.getElementById('pole' + i).value);
                if (!isNaN(poleValue)) { // sprawdzanie czy liczba nie jest not a number ( czyli czy podana wartosc jest liczba) jezeli tak to sumujemy
                    suma += poleValue;
                }
            }


            document.getElementById('suma').innerHTML = 'Suma: ' + suma;
        }


    </script>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $iloscPol = $_SESSION["iloscPol"]; // wyciaganie iloscPol z obecnej sesji
         echo "<script>generujFormularz($iloscPol);</script>"; // wywolywanie skryptu generujFormularz jezeli otrzymamy POST od formularza
    }
?>