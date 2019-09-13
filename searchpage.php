<?php require 'header.php'; ?>
<img src="bras-banner.jpg" width="100%">
<p>&nbsp;</p>
<?php
  $queryTerm = $_GET["queryTerm"];

  $queryString = "SELECT id, name, regprice, descr FROM boobs WHERE name like '%".$queryTerm."%'";

    $stid = oci_parse($conn, $queryString);
    oci_execute($stid);

    $count = 0;

    $f = false;

  while (($rw = oci_fetch_array($stid, OCI_BOTH)) != false) {
    if($count % 4 == 0) {
    ?>
      <div style="float:left;width:100%;height:350px">
    <?php
    }
    ?>
    <div style = "float:left; width: 300px; height: 350px;color:black">
      <div style="text-align:center">
        <a style="color:black" href='item.php?itemid=<?php echo $rw[0]; ?>'><?php echo $rw[1]; ?></a><br>
      </div>
      <div style="text-align:center">
        <a href='item.php?itemid=<?php echo $rw[0]; ?>' style="color:black"><nobr><form method="post" action="cart.php"><input type="hidden" name="itemid" value="<?php echo $rw[0]; ?>"><input type="submit" value="add to cart."></form></nobr><img src='<?php echo $rw[1]; ?>.jpg' width="120" height="180"></a><br><br>
                <a href='item.php?itemid=<?php echo $rw[0]; ?>'><font color="#cc0000" size="4">Price: $<?php echo $rw[2]; ?></font></a><br>
      </div>
    </div>
    <?php
    if($count % 4 == 3) {
    ?>
      </div>
    <?php
      $f = true;
    } else {
      $f = false;
    }
    ?>
<?php
  $count = $count + 1;
}

if(!$f) {
?>
</div>
<?php
}
    ?>
</div>
<?php require 'footer.php'; ?>