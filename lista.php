<?php

require_once 'config.php';

$db = new PDO("mysql:host=localhost;dbname=vizsga;charset=utf8", 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result = [];

$sql = "SELECT vendeg.id, vendeg.nev, vendeg.cim, vendeg.email , vendeg.telefonszam, foglalas.erkezes, foglalas.vejszaka  FROM vendeg, foglalas WHERE vendeg.id=foglalas.vendegid ";

foreach ($db->query($sql) as $row) {
    $result[] = new szalloda($row);
    $foglalasok=$result[0];
}
?>
<!doctype html>
<html lang="hu">
	<head>
		<meta charset="utf-8">
		<title>TopSchool Szállásmester </title>
		<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>
	<div id="keret">
    	<div id="header">
        	TopSchool Szállás
    	</div>
        
        <div id="content">
            <table style="border: 1px solid black;"   >
    <tr>
        <th>id</th>
        <th>Név</th>
        <th>Cím</th>
        <th>E-mail cím</th>
        <th>Telefonszám</th>
        <th>Érkezés napja</th>
        <th>Vendégéjszakák száma</th>
    </tr>
<?php foreach ($result as $foglalas) : ?>
        <tr>

            <td><a href="/modify.php?id=<?= $foglalas->id ?>"><?= $foglalas->id ?></a></td>
            <td><?= $foglalas->nev ?></td>
            <td><?= $foglalas->cim ?></td>
            <td><?= $foglalas->email ?></td>
            <td><?= $foglalas->telefonszam ?></td>
            <td><?= $foglalas->erkezes ?></td>
            <td><?= $foglalas->vejszaka ?></td>
        </tr>
<?php endforeach; ?>
</table>
<a href="/add.php">Hozzáadas</a>

