<?php

require_once 'config.php';
require_once 'lista.php';

$result = [];
$eid = $_GET['id'];


$stm = $db->prepare("SELECT * FROM vendeg;");
$stm->execute();
$vendegek = $stm->fetchALL(PDO::FETCH_ASSOC);


$sql = " SELECT foglalas.*, vendeg.* FROM `foglalas`,`vendeg` where vendeg.id=foglalas.vendegid and vendeg.id=$eid;";


foreach ($db->query($sql) as $row) {
    $result[] = new szalloda($row);
}


$foglalas->id = $eid;
foreach ($result as $foglalas)
    
    ?>
<form action="" method="post">

    <table>
        <tr>
            <th>Név: <br>
        <select  name="vendeg">
            <?php foreach ($vendegek as $vendeg) { ?> 
            <option <?php echo $vendeg->id == $vendeg['id'] ? 'selected="selected"' : ''; ?>  value="<?= $vendeg['id']; ?>"><?= $vendeg['nev']; ?></option>
                    <?php } ?>
        </select>
  
            <th>Cím:  <br><input type="text" name="cim" value="<?= $foglalas->cim ?>"></th>
            <th>E-mail cím:  <br><input type="text" name="email" value="<?= $foglalas->email ?>" </th>
            <th>Telefonszám:  <br><input type="text" name="email" value="<?= $foglalas->telefonszam ?>" </th>
        </tr>
    </table>     

    <input type="submit" name="edit" value="Modosit">
    <input type="submit" name="delete" value="Töröl">

</form>    
<?php
if (isset($_POST['edit'])) {

    $vendegid = $vendeg->id;

    $stm = $db->prepare("update vendeg set cim = :cim, email = :email, telefonszam=:telefonszam");
    $stm->execute(
            ["cim" => $_POST["cim"],
                "email" => $_POST["email"],
                "telefon" => $_POST["telefon"],
               
    ]);



    header("Location:lista.php");
}

if (isset($_POST['delete'])) {

    $foglalas = $foglalas->id;

    $stmt = $db->prepare("delete from vendeg where id=$vendegid limit 1");
    $stmt->execute();


    header("Location: lista.php");
}
?>

</div>
<div id="footer">

</div>
</div>
</body>
</html>