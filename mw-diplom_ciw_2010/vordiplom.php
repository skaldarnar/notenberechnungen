<?php
// Disclaimer: Gebaut mit wenig bis keinem Wissen über PHP :-D
include_once("../ressourcen/lib.php");

echo load_header("Berechnung der Vordiplomsnote", "Für Diplom Chemie-Ingenieurwesen (PO 2010), TU Dresden");

$module = array(
	"ciw_01"	=> array( 6, "", "Allgemeine und Anorganische Chemie"), 
	"ciw_02"	=> array( 4, "", "Grundlagen des Chemie-Ingeniuerwesens"),
	"ciw_03"	=> array(14, "", "Grundlagen Mathematik"),  
	"ciw_04"	=> array( 6, "", "Physik"),  
	"ciw_05"	=> array( 9, "", "Informatik"),  
	"ciw_06"	=> array( 8, "", "Konstruktion und Fertigung"),  
	"ciw_07"	=> array( 4, "", "Einführung in die Berufs- und Wissenschaftssprache"),  
	"ciw_08"	=> array( 6, "", "Organische Chemie"),  
	"ciw_09"	=> array(10, "", "Technische Mechanik"),  
	"ciw_10"	=> array( 4, "", "Thermodynamik"),  
	"ciw_11"	=> array( 5, "", "Allgemeine Biochemie"),  
	"ciw_12"	=> array(10, "", "Ingeniurmathematik"),  
	"ciw_14"	=> array( 8, "", "Mess- und Elektrotechnik"),  
	"ciw_17"	=> array( 4, "", "Wärmeübertragung"),  
	"ciw_19"	=> array( 6, "", "Allgemeine und Fachübergreifende Qualifikationen"),  
);

calculate($_GET, $module);
show_table_head();
show_modules($module);
?>
<?php echo load_footer(); ?>
