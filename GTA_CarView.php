<?php
$string = $_GET['veiculo'];
$link ="https://s.rsg.sc/sc/images/games/GTAV/vehicles/screens/mp/main/".$string.".jpg";
$profpic ="https://i.imgur.com/eWfUg3a.jpeg";

  
echo "<tr>"; 
echo "<td><center><img src={$link} alt=\"\" /><b>{$linha['sobrenome']}</b>   {$linha['nome']}</center></td>"; 
echo "</tr>";
?>

<html>
<head>
<style type="text/css">

body {
background-image: url('<?php echo $profpic;?>');
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GTA Car API</title>
</head>
<body>
</body>
</html>