<?php
//incerting emails into db
$db_connect = mysql_connect("mysql51-060.wc1.ord1.stabletransit.com","947663_memory","Jpv7bTa7dQWw");
mysql_select_db("947663_memory");

$pars_MailsQuery = "SELECT * FROM `contact_emails`"; 
mysql_query("SET NAMES 'utf8'");
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