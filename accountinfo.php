<?php
      include('simple_html_dom.php');
      ?>
<link href="../css/style.css" rel="stylesheet">



 <?php
     $acc = file_get_html('https://www.pathofexile.com/my-account');

     $accName = $acc->find('.infoLine1', 1);
     $level = $acc->find('.infoLine2', 0);
     $leagueinfo = $acc->find('.infoLine3', 0);
     $avatarimg = $acc->find('.avatar', 0);
 ?>
<div>
  <table class="accountinfo">
  <tr>
    <th colspan="2"><a href="https://www.pathofexile.com/shop/category/daily-deals/"><h4><?php echo $accName->plaintext ?></h4></a></th>
    <th rowspan="3"><a href="https://www.pathofexile.com/shop/category/daily-deals/"><img src="<?php echo $avatarimg->src?>"></a></th>
  </tr>
  <tr>
    <td colspan="2"><h5><?php echo $level->plaintext ?></h5></td>
  </tr>
  <tr>
    <td>Price <?php echo $leagueinfo->plaintext ?> points</td>
  </tr>
</table>

</div>
