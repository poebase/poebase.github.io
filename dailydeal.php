<?php
      include('currency.php');
      include('simple_html_dom.php'); ?>
<link href="../css/style.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">



 <?php
     $html = file_get_html('https://www.pathofexile.com/shop/category/daily-deals');

     $title = $html->find('.name', 0);
     $price = $html->find('.price', 0);
     $desc = $html->find('.description', 0);
     $save = $html->find('.amount', 1);
     $image = $html->find('img[class=itemImage]', 0);

     $imagesrc = $image->src;
     $displayImage = "<img src=" . $imagesrc . ">";
 ?>
<div>
  <table class="salebox">
  <tr>
    <th colspan="2" class="sale-title"><a href="https://www.pathofexile.com/shop/category/daily-deals/"><h4 class="title"><?php echo $title->plaintext ?></h4></a></th>
    <th rowspan="3"><a href="https://www.pathofexile.com/shop/category/daily-deals/"><img style="margin-left: 2em; opacity: 0.8; border:hidden 5px solid black; border-radius: 3em;" src="<?php echo $image->src?>"></a></th>
  </tr>
  <tr>
    <td colspan="2" class="sale-desc"><h5><?php echo $desc->plaintext ?></h5></td>
  </tr>
  <tr>
    <td class="sale-price"><button class="btn btn-default"><a style="text-decoration: none; color: black;" target="_blank" href="https://www.pathofexile.com/shop/category/daily-deals/">Price <?php echo $price->plaintext ?> points</a></button> You save <?php echo $save->plaintext ?></td>
  </tr>
</table>

</div>
