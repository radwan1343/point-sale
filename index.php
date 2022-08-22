<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point Of Sale</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/lib/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Header -->

    <header>
        <div class="container text-center ">
            <div class="row header align-items-center">
                <div class="logo col">
                    <img src="assets/img/logo/hyphen logo (147 × 40 px).png" alt="">
                </div>
                <div class="col ">
                    <div><a class="button-style-one" href="#0">Help</a></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Header End-->

<!-- main project -->

<section>
  <div class="container mb-200">
    <h1 class="text-center">Add you product</h1>

    <form action="" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputId">product Id</label>
          <input type="text" class="form-control" id="inputId" placeholder="product Id" name="id">
        </div>
        <div class="form-group col-md-6">
          <label for="inputName">product Name</label>
          <input type="text" class="form-control" id="inputName" placeholder="product Name" name="name">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPrice">price</label>
          <input type="number" class="form-control" id="inputPrice" placeholder="price" name="price">
        </div>
        <div class="form-group col-md-6">
          <label for="inputQuantity">quantity</label>
          <input type="number" class="form-control" id="inputQuantity" placeholder="quantity" name="quantity">
        </div>
      </div>
 
			<div style="margin: 10px;"><input type="button" onclick="submitForm();" name="save_contact" value="Save" /></div>
    </form>
  </div>
</section>

<!-- Product List -->



<section class="point-sale">
<div class="container">
  <h1 class="text-center" >Product List</h1>
   
    <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0"
    width="100%">
    <thead>
      <tr>
        <th class="th-sm">
            id
        </th>
        <th class="th-sm">Product name
        </th>
        <th class="th-sm">
        </th>
        <th class="th-sm">Price,$
        </th>
        <th class="th-sm">quantity
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="p_id"><p></p></td>
        <td id="p_name"><p></p></td>
        <td id="p_delete"><input type="button" value="Delete"></td>
        <td id="p_price"><p></p></td>
        <td id="p_quntity"><p></p></td>
      </tr>  
    </tbody>
  </table>
  
</div>
</section>

<!-- End Product List -->


</body>
<script src="assets/js/script.js"></script>
</html>