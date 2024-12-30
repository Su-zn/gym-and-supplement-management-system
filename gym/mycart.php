<?php include("navbar1.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cart</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-15 text-center border rounded bg-light my-4">
        <h1>MY CART<H1>
    </div>

    <div class="col-lg-15">
      <table class="table caption-top">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
    </div>
  <tbody class="text-center">
    <?php 
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart']as $key=>$value)
      {
        $sr=$key+1;
        echo"
    <tr>
      <td>$sr</td>
      <td>$value[Item_name]</td>
      <td>$value[price] <input type='hidden' class='iprice' value='$value[price]'></td>
      <td>
      <form action='manage_cart.php' method='post'>
      <input class='text-center iquantity' onchange='this.form.submit();' name='Mod_Quantity' type='number' value='$value[Quantity]' min='1' max='10'>
      <input type='hidden' name='Item_name' value='$value[Item_name]'>
      </form>
      </td>
      <td class='itotal'></td>
      <td>
      <form action='manage_cart.php' method='post'>
      <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
      <input type='hidden' name='Item_name' value='$value[Item_name]'>
      </form>
      </td>
    </tr>
      ";
      }
    }
    ?>
  </tbody>
</table>
<div class="col-lg-4">
      <div class="border bg-light rounded p-1">
      <h4>Grand Total:</h4>
<h5 class="text-right" id="gtotal"></h5>
<?php 
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
  {
?>
<form action="purchase.php" method="POST">
    <div class="form-group row">
    <label>Full Name</label>
    <div class="col-sm-10">
      <input type="text" name="full_name" class="form-control" required>
    </div>
    <div class="form-group row">
    <label>Phone Number</label>
    <div class="col-sm-10">
      <input type="number" name="phone_no" class="form-control" required>
    </div>
    <div class="form-group row">
    <label>Address</label>
    <div class="col-sm-10">
      <input type="text" name="address" class="form-control" required>
    </div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Cash On delivery
  </label>
  <br>
  <button class="btn btn-primary btn-block p-1" name="purchase" >Make Purchase</button>
</div>
  </form>
  <?php
  } 
  ?>
</div>
      </div>
  </div>
  <script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subTotal()
    {
      gt=0;
      for(i=0;i<iprice.length;i++)
      {
        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
        gt=gt+(iprice[i].value)*(iquantity[i].value);
      }
      gtotal.innerText=gt;
    }
    subTotal();
  </script>
</body>
</html>