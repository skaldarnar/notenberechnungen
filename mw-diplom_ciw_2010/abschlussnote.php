<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Abschlussnote", "Für Diplom Chemie-Ingenieurwesen (PO 2010), TU Dresden");

$module = array(
	"ciw_13"	=> array( 7, "", "Analytische und physikalische Chemie"),
	"ciw_15"	=> array( 4, "", "Apparatekonstruktion"),
	"ciw_16"	=> array( 5, "", "Strömungsmechanik"),
	"ciw_18"	=> array( 5, "", "Grundlagen der Bioverfahrenstechnik"),
	"ciw_20"    => array( 7, "", "Mechanische Verfahrenstechnik"),
	"ciw_21"	=> array( 9, "", "Thermische Verfahrenstechnik"),
	"ciw_22"	=> array( 7, "", "Chemische Verfahrenstechnik"),
	"ciw_23"	=> array(14, "", "Technische Chemie"),
	"ciw_24"    => array( 9, "", "Prozess- und Anlagentechnik"),
	"ciw_25"    => array( 8, "", "Automatisierungstechnik und Prozessanalyse"),
	"ciw_26"    => array(25, "", "Fachpraktikum (Kleiner Beleg)"),
    "ciw_27"    => array(26, "", "Forschungspraktikum (Großer Beleg)"),
    "ciw_28"    => array( 5, "", "Fachübergreifende technische Qualifikation"),
    "ciw_29"    => array( 5, "", "Fachübergreifende nichttechnische Qualifikation"),
	"vert1p"    => array( 5, "", "Vertiefungsempfehlung I - Pflichtmodul"),
	"vert1a"    => array( 5, "", "Vertiefungsempfehlung I - Wahlpflichtmodul A"),
	"vert1b"    => array( 5, "", "Vertiefungsempfehlung I - Wahlpflichtmodul B"),
	"vert2p"    => array( 5, "", "Vertiefungsempfehlung II - Pflichtmodul"),
	"vert2a"    => array( 5, "", "Vertiefungsempfehlung II - Wahlpflichtmodul A"),
	"vert2b"    => array( 5, "", "Vertiefungsempfehlung II - Wahlpflichtmodul B"),

	"da_note"   => array(211, "", "Note der Diplomarbeit"),
	"da_koll"   => array(105.5, "", "Kolloqium"),
);

calculate($_GET, $module);
show_table_head();
show_modules($module);
?>
<?php echo load_footer(); ?>
