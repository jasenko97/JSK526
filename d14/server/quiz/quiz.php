<?php

 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept' );
 header('Content-Type:application/json' );

if ( !isset( $_POST['type'] )) $_POST = $_GET;

  $fragen = '{"quiz":[

	[

		{"f":"Die Sonne ist ...?",
			"a":[
				"ein Planet",
				"eine Galaxie",
				"ein Stern",
				"ein Magnetfeld"
			],
			"c":2
		},
		{"f":"Welche Stadt ist die Hauptstadt Frankreichs?",
			"a":[
				"Paris",
				"Berlin",
				"London",
				"Madrid"
			],
			"c":0
		},
		{"f":"Der Chinese bereitet seine Speisen nicht im Kochtopf zu, sondern im....?",
			"a":[
				"Eimer",
				"Glas",
				"Wäschetrockner",
				"Wok"
			],
			"c":3
		},
		{"f":"Wen will Rotkäppchen im Wald besuchen?",
			"a":[
				"die Mutter",
				"den Jäger",
				"die Großmutter",
				"den Wolf"
			],
			"c":2
		},
		{"f":"Welche Farbe ist nicht Teil eines Regenbogens?",
			"a":[
				"schwarz",
				"gelb",
				"grün",
				"orange"
			],
			"c":0
		},
		{"f":"Wie heisst die Hauptstadt von China?",
			"a":[
				"Paris",
				"Wien",
				"Peking",
				"Hongkong"
			],
			"c":2
		},
		{"f":"Was das H in HTML",
			"a":[
				"Hybrid",
				"Hyper",
				"High",
				"Hong"
			],
			"c":1
		},
		{"f":"Was das L in HTML",
			"a":[
				"Hyper",
				"Text",
				"Markup",
				"Language"
			],
			"c":3
		},
		{"f":"Was das T in HTML",
			"a":[
				"Hyper",
				"Text",
				"Markup",
				"Language"
			],
			"c":1
		},
		{"f":"Was das M in HTML",
			"a":[
				"Hyper",
				"Text",
				"Markup",
				"Language"
			],
			"c":2
		},
		{"f":"Wenn Nudeln bissfest gekocht sind, dann sind sie ...?",
			"a":[
				"in memoriam",
				"ante portas",
				"il silenzio",
				"al dente"
			],
			"c":3
		}


	],
	[

		{"f":"Wovon ernährt sich der Gorilla?",
			"a":[
				"Fleisch",
				"Insekten",
				"Blätter",
				"Bambussprossen"
			],
			"c":2
		},
		{"f":"Wie heißt der höchste Berg Europas in den Alpen?",
			"a":[
				"Mont Blanc",
				"Großglockner",
				"Matterhorn",
				"Dufourspitze"
			],
			"c":0
		},
		{"f":"Wer wurde 2010 Fußballweltmeister?",
			"a":[
				"Brasilien",
				"Deutschland",
				"Spanien",
				"Senegal"
			],
			"c":2
		},
		{"f":"Wer wurde 2006 Fußballweltmeister?",
			"a":[
				"Brasilien",
				"Italien",
				"Spanien",
				"Frankreich"
			],
			"c":1
		},
		{"f":"Wie viele Tage hat ein Schaltjahr im gregorianischen Kalender?",
			"a":[
				"364",
				"365",
				"366",
				"367"
			],
			"c":2
		},
		{"f":"Aus was wird Tofu gemacht?",
			"a":[
				"Tofublätter",
				"Sojabohne",
				"Maniokwurzel",
				"Taroblüten"
			],
			"c":1
		},
		{"f":"Für welche Spezialität ist die französische Stadt Dijon bekannt?",
			"a":[
				"Champagner",
				"Gänseleber",
				"Austern",
				"Senf"
			],
			"c":3
		}

	],
	[
		{"f":"Welcher Staat hat die wenigsten Einwohner?",
			"a":[
				"Tuvalu",
				"San Marino",
				"Vatikan",
				"Monako"
			],
			"c":2
		},
		{"f":"Welcher Fluss fließt durch Rom?",
			"a":[
				"Po",
				"Reno",
				"Tiber",
				"Isonzo"
			],
			"c":2
		},
		{"f":"Wann war der erste Mensch auf dem Mond?",
			"a":[
				"1967",
				"1969",
				"1971",
				"1973"
			],
			"c":1
		},
		{"f":"Wie heißt die Hauptstadt von Madagaskar?",
			"a":[
				"Antananarivo",
				"Freetown",
				"Lilongwe",
				"Kampala"
			],
			"c":0
		},
		{"f":"Wo finden die FußballWM 2018 statt?",
			"a":[
				"Quatar",
				"Frankreich",
				"Südkorea",
				"Russland"
			],
			"c":3
		},
		{"f":"Wer war der Erfinder des Telefons?",
			"a":[
				"John Fitch",
				"Alessandro Volta",
				"Thomas Edison",
				"Phillip Reis"
			],
			"c":3
		}


	],
	[
		{"f":"Wer gewann erst einmal die Fußball WM? ",
			"a":[
				"Italien",
				"Frankreich",
				"Argentinien",
				"Uruguay"
			],
			"c":1
		},
		{"f":"Wer gewann erst einmal die Fußball WM? ",
			"a":[
				"Italien",
				"Frankreich",
				"Argentinien",
				"Uruguay"
			],
			"c":1
		},
		{"f":"Welche Staatsform hat Jamaika ? ",
			"a":[
				"Republik",
				"Islamische Republik",
				"Demokratie",
				"Monarchie"
			],
			"c":3
		},
		{"f":"Welcher Planet hat den laengsten Tag ? ",
			"a":[
				"Venus",
				"Pluto",
				"Merkur",
				"Saturn"
			],
			"c":0
		}
	],
	[
		{"f":"Wie heisst die Hauptstadt von Tuvalu?",
			"a":[
				"Funafuti",
				"Melekeok",
				"Avarua",
				"Majuro"
			],
			"c":0
		},
		{"f":"Nach wem wurde das Eisbärengehege im Tiergarten Schönbrunn benannt?",
			"a":[
				"Kaiserin Sissi",
				"Bundeskanzler Figl",
				"Bundespräsident Heinz Fischer",
				"Kaiser Franz Josef"
			],
			"c":3
		},
		{"f":"Die steinernen Rundbauten in Apulien nennt man ...?",
			"a":[
				"Trulli",
				"Salo",
				"Fisichella",
				"Barrichello"
			],
			"c":0
		},
		{"f":"Wie heißt der Herrscher in Mozarts Oper Die Entführung aus dem Serail?",
			"a":[
				"Bassa Ali",
				"Bassa Hassan",
				"Bassa Omar",
				"Bassa Selim"
			],
			"c":3
		}
	]

  ]}';


 $f = json_decode( $fragen );
 $f = $f->quiz;

$f_all = array();

foreach( $f as $k => $f_level ) {
    foreach( $f_level as $f_item ) {
      $f_item->level = $k;
      $f_all[] = $f_item;
    }
}

 $response = new stdClass();
 switch( $_POST['type'] ) {
   case "getcount":
    $response->count = sizeof( $f_all );
   break;

   case "getquestion":
    $q = $f_all[ $_POST['id'] ];
    $response->question = $q->f;
    $response->answers = $q->a;
    $response->level = $q->level;
   break;

   case "check":
    $q = $f_all[ $_POST['id'] ];
    $response->answer_id = $q->c;
   break;

	case "showhighscore":
		$_POST['ms'] = 0;
	case "writehighscore":
		$filename = "highscore1.txt";
		$filehandler = fopen($filename , "r");
		$contents = fread($filehandler, filesize($filename));
		fclose($filehandler);
		$highscore = json_decode( $contents )->highscore;
		$new_highscore = new StdClass();
		$new_highscore -> highscore = array();
		$response->html = '<ol>';

		if ( sizeof($highscore)==0 ) {
				$new_highscore->highscore[] = array($_POST['name'],$_POST['ms']);
				$response->html .= '<li style="font-weight:bold;">'.$_POST['ms'].' - '.$_POST['name'].'</li>';
		} else {
			$bSet = false;
			if ( $_POST['ms'] == 0 ) $bSet = true;
			foreach( $highscore as $item ) {

				if ( !$bSet && $_POST['ms'] >= $item[1] ) {
					$bSet = true;
					$new_highscore->highscore[] =  array($_POST['name'],$_POST['ms']);
					$response->html .= '<li style="font-weight:bold;">'.$_POST['ms'].' - '.$_POST['name'].'</li>';

				}
				$new_highscore->highscore[] = $item;
				$response->html .= '<li>'.$item[1].' - '.$item[0].'</li>';
			}
			if ( !$bSet ) {
				$new_highscore->highscore[] = array($_POST['name'],$_POST['ms']);
				$response->html .= '<li style="font-weight:bold;">'.$_POST['ms'].' - '.$_POST['name'].'</li>';
			}
		}
		$response->html .= '</ol>';
		$filehandler = fopen($filename , "w");
		fwrite($filehandler, json_encode( $new_highscore ));
		fclose($filehandler);


	break;

   default:
    $response->error = "Request Type fehlt.";

 }

 echo json_encode( $response );
