<?php sleep(0.2); // 200ms verzögerung
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept' );
 header('Content-Type:application/json' );

  $fragen = '{"quiz":[
	[
    {"f":"Welche Jahreszeit folgt dem Sommer?",
			"a":[
				"Frühling",
				"Winter",
				"Herbst",
				"Ostern"
			],
			"c":2
		},
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
    {"f":"Neurodermitis ist eine ..?",
      "a":[
        "Nierenerkrankung",
        "Hauterkrankung",
        "Herzerkrankung",
        "Zanherkrankung"
      ],
      "c":1
    },
    {"f":"O du lieber Augustin, ...?",
      "a":[
        "alles am Kinn",
        "nichts in der Birn",
        "alles ist hin",
        "dort ist er drin"
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
    {"f":"Welche jQuery-Methode versteckt HTML-Elemente?",
      "a":[
        "hidden()",
        "invisible()",
        "hide()",
        "unshow()"
      ],
      "c":2
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
    {"f":"In welcher Programmiersprache ist jQuery geschrieben?",
      "a":[
        "CoffeeScript",
        "JavaScript",
        "C++",
        "Java"
      ],
      "c":1
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
    {"f":"Welcher vom Web-Server übermittelte HTTP-Header bewirkt, dass JavaScript auch AJAX-Aufrufe an Server anderer Domains senden bzw. das Ergebnis empfangen kann?",
      "a":[
        "Access-Control-Allow-Origin",
        "X-Access-Control-Allow-Origin",
        "Access-Control-Origin",
        "X-Access-Control-Origin"
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

 //$request = json_decode($_POST['data']);
 $request =  new stdClass();
 foreach( $_POST as $k => $v ) {
     $request->{$k} = $v;
 }
 $response = new stdClass();

  if ( !is_string($request->type) ) exit;

 //if ( $request->type == 0 ) exit;

 switch( $request->type ) {
	case "frageneu":

		$level = $request->level - 1;
		$id = mt_rand( 1, count($f[$level]) );

		$response->frageID = $id;
		$response->frage = $f[$level][$id-1]->f;
		$response->antworten = array(
			$f[$level][$id-1]->a[0],
			$f[$level][$id-1]->a[1],
			$f[$level][$id-1]->a[2],
			$f[$level][$id-1]->a[3]
		);

	break;
	case "check":
		$level = $request->level - 1;
		$id = $request->frageID;
		$response->checkOK = ( $request->antwort == $f[$level][$id-1]->c + 1);
		$response->correctAntwort = $f[$level][$id-1]->c + 1;
	break;
	case "showhighscore":
		$request->ms = 0;
	case "writehighscore":
		$filename = "highscore.txt";
		$filehandler = fopen($filename , "r");
		$contents = fread($filehandler, filesize($filename));
		fclose($filehandler);
		$highscore = json_decode( $contents )->highscore;
		$new_highscore = new StdClass();
		$new_highscore -> highscore = array();
		$response->html = '<ol>';

		if ( sizeof($highscore)==0 ) {
				$new_highscore->highscore[] = array($request->name,$request->ms);
				$response->html .= '<li style="font-weight:bold;">'.$request->ms.' - '.$request->name.'</li>';
		} else {
			$bSet = false;
			if ( $request->ms == 0 ) $bSet = true;
			foreach( $highscore as $item ) {

				if ( !$bSet && $request->ms >= $item[1] ) {
					$bSet = true;
					$new_highscore->highscore[] =  array($request->name,$request->ms);
					$response->html .= '<li style="font-weight:bold;">'.$request->ms.' - '.$request->name.'</li>';

				}
				$new_highscore->highscore[] = $item;
				$response->html .= '<li>'.$item[1].' - '.$item[0].'</li>';
			}
			if ( !$bSet ) {
				$new_highscore->highscore[] = array($request->name,$request->ms);
				$response->html .= '<li style="font-weight:bold;">'.$request->ms.' - '.$request->name.'</li>';
			}
		}
		$response->html .= '</ol>';
		$filehandler = fopen($filename , "w");
		fwrite($filehandler, json_encode( $new_highscore ));
		fclose($filehandler);


	break;
     default:
         echo 'type unknown';
 }

 echo json_encode( $response );
?>
