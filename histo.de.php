<?php
// File: /data/histo.xx.php (where xx is a language code such as "fr" or "en_GB")
// Display historical facts on the personal facts tab of the individual page 
// Each line is a GEDCOM record to describe an event.
// Events must contain dates, and will only be shown if the individual was alive on that date.

if (!defined('WT_WEBTREES')) {
   header('HTTP/1.0 403 Forbidden');
   exit;
}

#BEISPIEL
#$histo[] = "1 EVEN\n2 TYPE >>>>Titel<<<<\n2 DATE >>>>DD MMM YYYY<<<<<\n2 NOTE >>>>>Inhalt der Ereigniszeile<<<<<";

#16xx
$histo[] = "1 EVEN\n2 TYPE Prager Fenstersturz\n2 DATE 23 MAY 1618\n2 NOTE Als Auslöser des 30-jährigen Krieges gilt der Prager Fenstersturz vom 23. Mai 1618, mit dem der Aufstand der protestantischen böhmischen Stände offen ausbrach.";

$histo[] = "1 EVEN\n2 TYPE Westfälischer Friede\n2 DATE 24 OCT 1648\n2 NOTE Die Unterzeichnung zweier Friedensverträge am 24. Oktober 1648 zu Münster markiert das Ende des 30-jährigen Krieges.";

#17xx

#18xx
$histo[] = "1 EVEN\n2 TYPE Ende des Heiligen Römischen Reiches Deutscher Nation\n2 DATE 06 AUG 1806\n2 NOTE Kaiser Franz II. legt die Krone nieder und erklärt das Heilige Römische Reich Deutscher Nation für aufgelöst";

$histo[] = "1 EVEN\n2 TYPE Kaiserkrönung\n2 DATE 18 JAN 1871\n2 NOTE Als Reichsgründungstag wurde später der 18. Januar benannt, an dem der preußische König Wilhelm I. in Versailles zum Deutschen Kaiser proklamiert worden war.";


#1910
$histo[] = "1 EVEN\n2 TYPE \n2 DATE 28 JUN 1914\n2 NOTE Ermordung des österreichischen Thronfolgers Franz Ferdinand und seiner Frau während eines Besuchs in Sarajewo durch einen serbischen Terroristen";

$histo[] = "1 EVEN\n2 TYPE Eintritt in den 1. Weltkrieg\n2 DATE m 04 AUG 1914\n2 NOTE Eine aus dem Bündnissystem resultierende Kettenreaktion führt zum ersten Weltkrieg: Rußland, auf serbischer Seite stehend, erklärt Österreich den Krieg, daraufhin mobilisiert das Deutsche Reich gegen Rußland und seinen Verbündeten Frankreich, marschiert in Belgien ein, womit auch für England der Bündnisfall eintritt; die englische Kriegserklärung an Deutschland erfolgt am 4. August ";

$histo[] = "1 EVEN\n2 TYPE Ende des 1.Weltkrieges\n2 DATE 11 NOV 1918\n2 NOTE Durch die Besiegelung des Waffenstillstands an allen Fronten wird der 1. Weltkrieg für beendet erklärt.";

#1930
$histo[] = "1 EVEN\n2 TYPE Ernennung des Reichskanzlers\n2 DATE 30 JAN 1933\n2 NOTE Hindenburg benennt Adolf Hitler zum Reichskanzler.";

$histo[] = "1 EVEN\n2 TYPE Beginn Zweiter Weltkrieg\n2 DATE 01 SEP 1939\n2 NOTE durch den deutschen Überfall auf Polen"

#1940-
$histo[] = "1 EVEN\n2 TYPE Kapitulation Zweiter Weltkrieg\n2 DATE 08 05 1945\n2 NOTE Die bedingungslose Kapitulation Deutschlands zum zweiten Weltkrieg in Berlin";

$histo[] = "1 EVEN\n2 TYPE Gründung der BRD\n2 DATE 23 MAY 1949\n2 NOTE Das Grundgesetz der Bundesrepublik Deutschland tritt in Kraft.
Gründung der Bundesrepublik Deutschland";

$histo[] = "1 EVEN\n2 TYPE Gründung der DDR\n2 DATE 07 OCT 1949\n2 NOTE Die Gründung der Deutschen Demokratischen Republik";

#1950-
$histo[] = "1 EVEN\n2 TYPE Volksaufstand in der DDR\n2 DATE 17 JUN 1953\n2 NOTE Aus einem Arbeiterprotest und einem Generalstreik in der DDR entwickelte sich spontan ein Volksaufstand, der blutig niedergeschlagen wurde.";

#1960-
$histo[] = "1 EVEN\n2 TYPE Bau der Berliner Mauer\n2 DATE 13 AUG 1961\n2 NOTE symbolischer \"Tag des Mauerbaus\";,  s. http://de.wikipedia.org/wiki/Berliner_Mauer";

#1970-
#1980-
$histo[] = "1 EVEN\n2 TYPE Fall der Berliner Mauer\n2 DATE 09 NOV 1989\n2 NOTE Öffnung der deutsch-deutschen Grenze";

#1990-
$histo[] = "1 EVEN\n2 TYPE Wiedervereinigung Deutschlands\n2 DATE 03 OCT 1990\n2 NOTE Wiedervereinigung der beiden deutschen Staaten";

#2000-
#2010-

?>
