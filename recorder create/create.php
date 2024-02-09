<?php
  
  $nombre_json = 'mm6';
  
  $all_url = 
    "
    https://ledianmotos.com.ar/topeka-ks-kansas-hookup-mobile-dating-app-2/
    https://ledianmotos.com.ar/transgender-hookup-app-2/
    https://ledianmotos.com.ar/transgender-hookup-app-2/feed/
    https://ledianmotos.com.ar/tuscaloosa-find-an-escort-2/
    https://ledianmotos.com.ar/tuscaloosa-find-an-escort-2/uk-mail-order-brides-all-you-need-to-find-out/
    https://ledianmotos.com.ar/uberhorny-it-review/
    https://ledianmotos.com.ar/ukraine-date-review/
    https://ledianmotos.com.ar/ukraine-date-review/that-is-elena-from-vampire-diaries-relationship/
    https://ledianmotos.com.ar/usa-payday-loans-2/
    https://ledianmotos.com.ar/usa-payday-loans-2/cracking-development-the-biden-harris/
    https://ledianmotos.com.ar/usa-payday-loans-2/tax-reduction-financing-plans-and-also-the/
    https://ledianmotos.com.ar/utah-online-payday-loans-2/
    https://ledianmotos.com.ar/utah-online-payday-loans-2/first-midwest-bank-licenses-off-put-cds/
    https://ledianmotos.com.ar/vancouver-wa-washington-hookup-site-2/feed/
    https://ledianmotos.com.ar/victoria-milan-dating-app-2/new-6-better-online-dating-sites-to-own-unmarried/
    https://ledianmotos.com.ar/victoria-milan-de-review/
    https://ledianmotos.com.ar/vietnamcupid-visitors-2/
    https://ledianmotos.com.ar/vietnamcupid-visitors-2/feed/
    https://ledianmotos.com.ar/visalia-ca-california-review/feed/
    https://ledianmotos.com.ar/washington-review/an-excellent-strategy-for-finding-invisible-2/
    ";


//echo $all_url . '<br>';


// Separar las URLs en un array
$url_array = explode("\n", $all_url);

// Eliminar espacios en blanco alrededor de cada URL
$url_array = array_map('trim', $url_array);

// Eliminar elementos vacíos del array
$url_array = array_filter($url_array);
/*
array(15) {
  [1]=>
  string(119) "https://ledianmotos.com.ar/best-hookup-apps-hookuphotties-review-2/seven-greatest-100-free-lds-internet-dating-sites-2/"
  [2]=>
  string(54) "https://ledianmotos.com.ar/best-online-payday-loans-2/"
  [3]=>
  string(46) "https://ledianmotos.com.ar/best-payday-loan-2/"
  [4]=>
  string(45) "https://ledianmotos.com.ar/best-paydayloan-2/"
  [5]=>
  string(71) "https://ledianmotos.com.ar/best-research-paper-writing-service-reviews/"
  [6]=>
  string(44) "https://ledianmotos.com.ar/bgclive-review-2/"
  [7]=>
  string(93) "https://ledianmotos.com.ar/bgclive-review-2/try-morgan-wallen-still-involved-to-help-you-his/"
  [8]=>
  string(54) "https://ledianmotos.com.ar/biker-planet-visitors/feed/"
  [9]=>
  string(60) "https://ledianmotos.com.ar/billings-mt-montana-hookup-sites/"
  [10]=>
  string(52) "https://ledianmotos.com.ar/bisexual-dating-username/"
  [11]=>
  string(55) "https://ledianmotos.com.ar/black-dating-sites-username/"
  [12]=>
  string(60) "https://ledianmotos.com.ar/black-hookup-apps-user-reviews-2/"
  [13]=>
  string(107) "https://ledianmotos.com.ar/black-hookup-apps-user-reviews-2/what-you-should-explore-which-have-feamales-in/"
  [14]=>
  string(61) "https://ledianmotos.com.ar/blackchristianpeoplemeet-visitors/"
  [15]=>
  string(107) "https://ledianmotos.com.ar/blackchristianpeoplemeet-visitors/sogar-in-der-globus-bei-irgendeiner-verbunden/"
}
*/


// Convertir el array a JSON (no se usa de momento)
$json_urls = json_encode($url_array, JSON_PRETTY_PRINT);
/*
string(1296) "{
    "1": "https:\/\/ledianmotos.com.ar\/best-hookup-apps-hookuphotties-review-2\/seven-greatest-100-free-lds-internet-dating-sites-2\/",
    "2": "https:\/\/ledianmotos.com.ar\/best-online-payday-loans-2\/",
    "3": "https:\/\/ledianmotos.com.ar\/best-payday-loan-2\/",
    "4": "https:\/\/ledianmotos.com.ar\/best-paydayloan-2\/",
    "5": "https:\/\/ledianmotos.com.ar\/best-research-paper-writing-service-reviews\/",
    "6": "https:\/\/ledianmotos.com.ar\/bgclive-review-2\/",
    "7": "https:\/\/ledianmotos.com.ar\/bgclive-review-2\/try-morgan-wallen-still-involved-to-help-you-his\/",
    "8": "https:\/\/ledianmotos.com.ar\/biker-planet-visitors\/feed\/",
    "9": "https:\/\/ledianmotos.com.ar\/billings-mt-montana-hookup-sites\/",
    "10": "https:\/\/ledianmotos.com.ar\/bisexual-dating-username\/",
    "11": "https:\/\/ledianmotos.com.ar\/black-dating-sites-username\/",
    "12": "https:\/\/ledianmotos.com.ar\/black-hookup-apps-user-reviews-2\/",
    "13": "https:\/\/ledianmotos.com.ar\/black-hookup-apps-user-reviews-2\/what-you-should-explore-which-have-feamales-in\/",
    "14": "https:\/\/ledianmotos.com.ar\/blackchristianpeoplemeet-visitors\/",
    "15": "https:\/\/ledianmotos.com.ar\/blackchristianpeoplemeet-visitors\/sogar-in-der-globus-bei-irgendeiner-verbunden\/"
}"
*/

//------------------------------

$data = '';

//Base
$data .= '
{
    "title": "' . $nombre_json . '",
    "steps": [
        {
            "type": "setViewport",
            "width": 1124,
            "height": 881,
            "deviceScaleFactor": 1,
            "isMobile": false,
            "hasTouch": false,
            "isLandscape": false
        },
';

// Recorrer el array y concatenar cada URL a $url_value
$cont = 0;
foreach ($url_array as $value_url) {


    //Time Out
    $data .=
    '
            {
                "type": "waitForElement",
                "timeout": 3000,
                "selectors": [
                    "body"
                ]
            },
            {
                "type": "navigate",
                "assertedEvents": [
                    {
                        "type": "navigation",
                        "url": "https://search.google.com/search-console/removals?resource_id=https%3A%2F%2Fledianmotos.com.ar%2F",
                        "title": "Retirada de URLs"
                    }
                ],
                "url": "https://search.google.com/search-console/removals?resource_id=https%3A%2F%2Fledianmotos.com.ar%2F"
            },
            {
                "type": "waitForElement",
                "timeout": 3000,
                "selectors": [
                    "body"
                ]
            },
            {
                "type": "click",
                "target": "main",
                "selectors": [
                    [
                        "div.uPZ4Rc span > span"
                    ],
                    [
                        "xpath///*[@id=\"rMvdld\"]/div/div/div/div[1]/div/div[2]/div/span/span"
                    ],
                    [
                        "pierce/div.uPZ4Rc span > span"
                    ],
                    [
                        "text/Nueva solicitud"
                    ]
                ],
                "offsetX": 14.640625,
                "offsetY": 8
            },
            {
                "type": "click",
                "target": "main",
                "selectors": [
                    [
                        "aria/Nueva solicitud[role=\"dialog\"]",
                        "aria/[role=\"textbox\"]"
                    ],
                    [
                        "#c2"
                    ],
                    [
                        "xpath///*[@id=\"c2\"]"
                    ],
                    [
                        "pierce/#c2"
                    ]
                ],
                "offsetX": 481,
                "offsetY": 41.5
            },
            {
                "type": "waitForElement",
                "timeout": 3000,
                "selectors": [
                    "body"
                ]
            },
            {
                "type": "change",
                "target": "main",
                "selectors": [
                    [
                        "aria/Nueva solicitud[role=\"dialog\"]",
                        "aria/[role=\"textbox\"]"
                    ],
                    "#c2",
                    "xpath///*[@id=\"c2\"]",
                    "pierce/#c2"
                ],
                "value": "' . $value_url . '"
            },
            {
                "type": "click",
                "target": "main",
                "selectors": [
                    [
                        "div.XfpsVe > div.tWntE > span > span"
                    ],
                    [
                        "xpath///*[@id=\"yDmH0d\"]/div[6]/div/div[2]/div[3]/div[2]/span/span"
                    ],
                    [
                        "pierce/div.XfpsVe > div.tWntE > span > span"
                    ]
                ],
                "offsetX": 54.078125,
                "offsetY": 7.5
            },
            {
                "type": "click",
                "target": "main",
                "selectors": [
                    [
                        "div.XfpsVe > div:nth-of-type(2) > span > span"
                    ],
                    [
                        "xpath///*[@id=\"yDmH0d\"]/div[6]/div/div[2]/div[3]/div[2]/span/span"
                    ],
                    [
                        "pierce/div.XfpsVe > div:nth-of-type(2) > span > span"
                    ]
                ],
                "offsetX": 98.84375,
                "offsetY": 15.5
    ';
    //quitar la ultima coma del las lista de urls al finalizar el recorrido del array.
    $cont ++;
    $data .= ($cont === count($url_array)) ? '}' : '},';
}
//cierre
$data .= 
'
]
    }
';

//print
echo $data;

// Ruta completa del archivo json, ajusta "USUARIO" según sea necesario
$filePath = 'C:/Users/USUARIO/Desktop/' . $nombre_json . '.json';

// Escribir el contenido de $data en el archivo
file_put_contents($filePath, $data);

// Verificar si la operación fue exitosa
if (file_exists($filePath)) {
    echo '<br><br><br><br>Archivo creado exitosamente en ' . $filePath;
} else {
    echo '<br><br><br><br>Error al crear el archivo';
}


?>