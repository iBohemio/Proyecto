<?php
$cdCatalogXMLReader = new CDCatalogXMLReader();
$cdCatalogXMLReader->ImprimirDatos($cdCatalogXMLReader->LeerXML('prueba.xml'));
class CDCatalogXMLReader {
public function LeerXML($xmlPath) {
 // Cargar XML.
 $doc = new DOMDocument();
 $doc->load($xmlPath); 
 /*
 // Leer los valores del tag de cabecera
 $title = $doc->getElementsByTagName("catalog-name")
     ->item(0)->nodeValue;
 
 echo "<h1>$title</h1>";
 */
 // Leer todos los elementos del tag
 $cds = $doc->getElementsByTagName( "cd" ); 
  return $cds;
}

public function ImprimirDatos($cds)
{
	echo '<table border="1">';
	echo '<tr><th>ID</th><th>Title</th><th>Artist</th><th>Country</th><th>Company</th><th>Price</th><th>Year</th></tr>';
	foreach ($cds as $cd) {
		echo '<tr>';
		// Leer Atributos
		echo '<td>' . $cd->getAttribute('id') . '</td>';
		echo '<td>' . $cd->getElementsByTagName("title")->item(0)->getAttribute('value') . '</td>';
		echo '<td>' . $cd->getElementsByTagName("artist")->item(0)->getAttribute('value') . '</td>';
		echo '<td>' . $cd->getElementsByTagName("country")->item(0)->getAttribute('value') . '</td>';
		echo '<td>' . $cd->getElementsByTagName("company")->item(0)->getAttribute('value') . '</td>';
		echo '<td>' . $cd->getElementsByTagName("price")->item(0)->getAttribute('value') . '</td>';
		echo '<td>' . $cd->getElementsByTagName("year")->item(0)->getAttribute('value') . '</td>';
		echo '</tr>';
	}
	echo '</table>';
}
}

?>