<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title></title>

    
<?php

$product = array("type"=>"ipad",
                 "cash"=>"500",
                 "period"=>"12",
                 "benefits"=>".1"
                );
$month= $product['period'];
$name= $product['type'];
$price= $product['cash'];
$Installment= ($product['cash']*$product['benefits'])+$product['cash'];
$monthlyInstallment= round((($product['cash']*$product['benefits'])+$product['cash'])/$product['period'],2) ;
?>

</head>

<body>

    <div class="container">
        <div class="row row-cols-1 ">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/ipad/mainimage0Apple-iPad-Mini-2nd-Original-used-7-9-2013-16GB-32GB-64GB-Black-Silver-90-iOS.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$name?></h5>
                        <p class="card-text">cash:<span> <i>EG</i> <?=$price?></span></p>
                        <!-- <p class="card-text">Installment:<span> EG <?=$Installment?></span> </p> -->
                        <p class="card-text">Installment: <span> <i>EG</i> <?=$monthlyInstallment?>  </span> for <span><?=$month?></span> months <span>  ( <i>EG</i> <?=$Installment?>) </span></p>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
</body>

</html>














<!--
<script>
        var ipad = [
            type = "ipad",
            period = 12,
            cash = 500,
            benefits = .1

        ];
        console.log(`
    ${type}
    EG ${cash}
    EG ${((cash+(cash*off))/period).toFixed(1)} over ${period} months
    `)
    </script>
