<?php
//incerting emails into db
$db_connect = mysql_connect("opinologos.db.11730628.hostedresource.com","opinologos","asd@ASD1");
mysql_select_db("opinologos");

$pars_MailsQuery = "SELECT * FROM `contact_emails`"; 
$MailsQuery = mysql_query($pars_MailsQuery);

?>
<table border="1" style="text-align:center; maw-width:600px;">
	<tr>
		<td>id</td>
		<td>nombre</td>
		<td>trabajo</td>
		<td>email</td>
		<td>empresa</td>
		<td>mensaje</td>
	</tr>
<?php
while($mailList = mysql_fetch_array($MailsQuery))
{
	echo '<tr><td>'.$mailList['id'].'</td><td>'.$mailList['nombre'].'</td><td>'.$mailList['trabajo'].'</td><td>'.$mailList['email'].'</td><td>'.$mailList['empresa'].'</td><td style="max-width:700px;">'.$mailList['mensaje'].'</td></tr>';
}
?>
</table>