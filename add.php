<?php
require_once 'config.php';
require_once 'lista.php';
?>
<form action="" method="post">

    <table>
        <tr>
            <th>Név: <br> <input type="text" name="nev" value=""></th>
            <th>Cím: <br> <input type="text" name="cim" value=""></th>
            <th>E-mail cím:  <br><input type="text" name="email" value=""></th>
            <th>Telefonszám:   <br><input type="text" name="telefonszam" value=""></th>
            <th>Érkezés napja: <br> <input type="text" name="erkezes" value=""></th>
            <th>Vendégéjszakák száma: <br> <input type="text" name="vejszaka" value=""></th>
        </tr>
    </table>     

    <input type="submit" name="submit" value="Hozzáad">


</form>

<?php
if (isset($_POST['submit'])) {

    $vendegid = $db->lastInsertId();
    
    $stm = $db->prepare("insert into vendeg(nev, cim, email, telefonszam) values(:nev, :cim, :email, :telefonszam)");
    $stm->execute([
        
        
        "nev" => $_POST["nev"],
        "cim" => $_POST["cim"],
        "email" => $_POST["email"],
        "telefonszam" => $_POST["telefonszam"]
                 
    ]);
    
    $stm = $db->prepare("insert into foglalas(erkezes, vejszaka, vendegid) values(:erkezes, :vejszaka, :vendegid)");
    $stm->execute([
        
        
        "erkezes" => $_POST["erkezes"],
        "vejszaka" => $_POST["vejszaka"],
        "vendegid" => $vendegid
     
                 
    ]);

    header("Location: lista.php");
}

?>
   </div>
        <div id="footer">

        </div>
    </div>
</body>
</html>
