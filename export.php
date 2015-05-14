<?php 
$db_connect = mysql_connect("mysql51-060.wc1.ord1.stabletransit.com","947663_memory","Jpv7bTa7dQWw");
mysql_select_db("947663_memory");

//header to give the order to the browser
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=exported-data.csv');

//select table to export the data
$pars_MailsQuery = "SELECT * FROM `contact_emails`"; 
$select_table=mysql_query($pars_MailsQuery);
$rows = mysql_fetch_assoc($select_table);

if ($rows)
{
getcsv(array_keys($rows));
}
while($rows)
{
getcsv($rows);
$rows = mysql_fetch_assoc($select_table);
}

// get total number of fields present in the database
function getcsv($no_of_field_names)
{
$separate = '';


// do the action for all field names as field name
foreach ($no_of_field_names as $field_name)
{
if (preg_match('/\\r|\\n|,|"/', $field_name))
{
$field_name = '' . str_replace('', $field_name) . '';
}
echo $separate . $field_name;

//sepearte with the comma
$separate = ',';
}

//make new row and line
echo "\r\n";
}
?>