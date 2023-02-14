<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" />
    <title>Scandiweb</title>
</head>
<body>
<div class="container">
    <?php
    include('config.php');
    $query = "SELECT * FROM testss LIMIT 12";
    $result = mysqli_query($conn, $query);
    ?>
    <p style="font-size: 25px;"><b>product list</b></p>
    <hr size="5" color="black">
    <span class="b">
        <form action='/addproduct' method="POST">
            <input type="submit" style="margin-left: -120%" value="ADD" name = "checkbox"  id = "checkbox"/>
        </form>
    </span>
 <form method='post' action=''>
    <input type="submit" value="MASS DELETE" style="float: right; margin-top: -6%;"id = "butt" name = "but_delete" />
    <?php
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result) ){
        $id = $row['id'];
        $sku = $row['sku'];
        $name = $row['name'];
        $price = $row['price'];
        $type = $row['type'];
        $atribute = $row['atribute'];
 ?>
<div style="margin-left: 3%; margin-top: 0%">

 <div class="float-child box">  
     <input type='checkbox' name='delete[]' value='<?= $id ?>' >
     <p class="a" style="margin-top: 17%;"><?= $sku ?></p>
     <p class="a"><?= $name ?></p>
     <p class="a"><?= $price ?></p>
     <p class="a"><?= $type ?></p>
     <p class="a"><?= $atribute ?></p>

 </div>
</div>
    <?php
    }} else { ?>
     <p colspan="8">No data found</p>
    <?php } ?>

    <?php 
if(isset($_POST['but_delete'])){

  if(isset($_POST['delete'])){
    foreach($_POST['delete'] as $deleteid){

      $deleteUser = "DELETE from testss WHERE id=".$deleteid;
      mysqli_query($conn,$deleteUser);
    }
  }
 
}
?>
</form>
</body>
</html>
<script type="text/javascript">
function myFunction() {
  
    if (checkbox.checked) {
      
    }
  }
</script>
