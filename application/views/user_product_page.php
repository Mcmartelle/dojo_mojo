<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <title><?php echo $product_name ?></title> -->
        <meta http-equiv="refresh" content="25">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link hrel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href = "assets/css/user_product_page.css">
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Inconsolata:700' rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
        </script>
    </head>
    <body>
        <div class = "container">    
        <header>
            <h2>dojo_Mojo</h2>
            <a id = "shopping_cart" href="">Shopping Cart</a>
        </header>
            <a id = "store_link" href="">Back to dojo_Mojo Store</a>
            <h1><?php echo "Product Name" ?></h1>
            <div id = "product_image">
                <div class = "row">
                <div class = "col-md-8">
                <img src = "/assets/weapons_icons/large/1.png">
                </div>
                <div class = "col-md-4">
                <div id = "product_desc">
                 <p>Ontgonnen perzische in herhaling nu honderden belasting. Bevaarbaar schipbreuk kilometers af al uitgevoerd. In zand alle daad na doet gold waar. Stam twee aan koel zijn aard met geld. Op geslaagd nu trouwens omgeving na omwonden de wakkeren. Oven acre sago in de tijd op wijk. Lot drong noemt aan dal ijzer wezen oog holte stuit. Verwijderd spoorwegen was beschikken bak natuurlijk van mislukking.</p>
                </div>
            </div> 
            <label>Quantity</label>
            <select>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <form action = "orders/order/buy" method = "POST">
                <input type = "submit" value = "Buy!">
            </form>
        </div>    
    </body>
</html>
<!--  <img id = "<?php echo $i ?>" src = "assets/product_images/<?php echo $i ?>.png" width = "500px" height = "500px" alt = "product image"> -->