<html>
<head>
<body style="background-color:#F0F3FF">

<style>
header 
{
    background-color:green;
    color:black;
    text-align:center;
    padding:8px;
    top: 10px
    display: block;
}
   
table	{ border-right:3px solid #ccc; border-bottom:1px solid #ccc ; }
table tr	{ background:#eee; padding:8px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
table  td	{ padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc}

</style>





<?php
$dbhost = "acadmysql.duc.auburn.edu";
$dbname = "jzl0084db";
$dbuser = "jzl0084";
$dbpassword = "03169503Aa1";


$connection = mysql_connect("$dbhost","$dbuser","$dbpassword") or die("Unable to connect to server");
mysql_select_db("$dbname") or die("Unable to select database"); 

$query = $_POST['query1'];
$result = mysql_query($query);

$rowcount=mysql_num_rows($result);

if($rowcount == 0)
{
echo ("Record retrieval unsuccessful". mysql_error($connection));
}
else
{
	echo "</br>";
	
	echo "<table border='1'>";
	while($row = mysql_fetch_array($result))
  {
	  echo "<tr>";
	  for($i = 0; $i < mysql_num_fields($result); $i++)
	  {
        echo "<td>$row[$i]</td>";
	  }
    echo "</tr>";
  } 
echo "</table>";	
}	
	
?>

</body>
</html>