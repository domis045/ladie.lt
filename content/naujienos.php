<?php
include "nustatymai.php";
$result = mysql_query("SELECT * FROM News");
while($row = mysql_fetch_array($result))
{
echo "<h2>" . $row['Pavadinimas'] . "</h2>"; 
$sanitized = htmlspecialchars($row['Naujiena'],ENT_QUOTES);
echo "<p>".str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $sanitized)."</p>";
}
mysql_close();
?>
