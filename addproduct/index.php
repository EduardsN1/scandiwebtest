<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css" />
    <title>Scandiweb</title>
</head>
<body>
<div class="container">
    <?php
    include('../config.php');
    $query = "SELECT * FROM testss LIMIT 12";
    $result = mysqli_query($conn, $query);
    ?>
    <p style="font-size: 25px;"><b>Product Add</b></p>
    <hr size="5" color="black">
    <span class="b">
        <form action='' method="POST">
            <input type="submit" style="margin-left: -120%" value="SAVE" />
        </form>
    </span>
    <span class="b">
        <form action='../' method="POST">
            <input type="submit" value="CANCEL" />
        </form>
    </span>
    <fieldset>
<legend>Add product</legend>
<form name="frmContact" method="post" action="action.php" id="productform">
<p>
<label for="SKU">SKU </label>
<input type="text" name="SKU" id="sku">
</p>
<p>
<label for="Name">Name</label>
<input type="text" name="name" id="name">
</p>
<p>
<label for="price">Price</label>
<input type="text" name="price" id="price">
</p>
<script type="text/javascript">
function yesnoCheck(that) {
    if (that.value == "dvd") {
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
    if (that.value == "furniture") {
        document.getElementById("ifYess").style.display = "block";
    } else {
        document.getElementById("ifYess").style.display = "none";
    }
    if (that.value == "book") {
        document.getElementById("ifYesz").style.display = "block";
    } else {
        document.getElementById("ifYesz").style.display = "none";
    }
}
</script>
<p>
<form action="action.php" method="post" id="productform">
<select  id="type" name="type" action = "action.php" onchange="yesnoCheck(this);">
    <option name = "dvd" id = "dvd" value="dvd">dvd</option>
    <option name = "furniture" id = "furniture" value="furniture">furniture</option>
    <option name = "book" id =  "book" value="book">book</option>
</select>
<div id="ifYes" type="text">
    <label for="size">size(mb)</label> <input type="text" name="atribute" id="atribute" /><br />
</div>
<div id="ifYesz" type="text">
    <label for="weight">weight(kg)</label> <input type="text" name="weight" id="weight" /><br />
</div>
<div id="ifYess" type="text">
    <label for="height">height(cm)</label> <input type="text" name="height" id="height" /><br />
    <label for="width">width(cm)</label> <input type="text" name="width" id="width" /><br />
    <label for="lenght">lenght(cm)</label> <input type="text" name="lenght" id="lenght" /><br />
</div>
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</body>
</html>