<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER strony kalkulatora
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';


// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$x,&$y, &$z){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$x,&$y,&$z,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($x) && isset($y) && isset($z))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $x == "") {
		$messages [] = 'Nie podano parametru "Kwota"';
	}
	if ( $y == "") {
		$messages [] = 'Nie podano parametru Okres kredytowania';
	}
	if ( $z == "") {
		$messages [] = 'Nie podano parametru Oprocentowanie';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
        if (! is_numeric( $z )) {
		$messages [] = 'Trzecia wartość nie jest liczbą dziesiętną';
	}

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$x,&$y,$z,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$x = intval($x);
	$y = intval($y);
        $z = floatval($z);
        
	//wykonanie operacji
        if ($role == 'admin'){
            $result =  ($x * (1+($z /100)) )/( $y * 12 );
            }	
        else{
            $messages [] = 'Tylko administrator może dokonać kalkulacji !';
        }
	}


//definicja zmiennych kontrolera
$x = null;
$y = null;
$z = null;
$result = null;
$messages = array();
$infos = null;
$form = null;

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($x,$y,$z);
if ( validate($x,$y,$z,$messages) ) { // gdy brak błędów
	process($x,$y,$z,$messages,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator dla amatorow');
$smarty->assign('page_description',' Szablonowanie Smarty');
$smarty->assign('page_header','Nagłówek Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');