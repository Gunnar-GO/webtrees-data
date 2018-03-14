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


#1930
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
