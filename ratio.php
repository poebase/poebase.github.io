<?php
      include('currency.php');
      include('simple_html_dom.php');
?>

<link href="css/style.css" rel="stylesheet">

<style>
#ratio-list {
  list-style: none;
  font-size: 1em;
    font-family: Arial, Helvetica, sans-serif;
  color: white;
  width: 100%;
  cursor: pointer;
  cursor: hand;
}
#ratio-list td {
  align-items: center;
  align-content: center;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  padding: 2px;

}
#ratio-list th {
  text-align: center;
  border: 1px solid rgba(0, 0, 0, 0.5);
  cursor: pointer;
}
#ratio-list tr {
  height:3em;
  padding: 1.5em;
}
#ratio-list img {
  width: 30%;
}
#ratio-list tr:hover {

}
.ratio {
  font-size: 1.3em;
  text-align: center;
}
.buy {
  text-align:right;
}
.tips {
  padding-top: 1em;
  font-size: 12px;
  color: #495763;
  text-align: center;
}
</style>
 <script>
 jQuery(document).ready(function($) {
 $(".clickable-row").click(function() {
     window.document.location = $(this).data("href");
 });
 });
 </script>

<table id=ratio-list>
  <tr>
    <th>Sell</th>
    <th>Ratio</th>
    <th>Buy</th>
  </tr>

  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=6&have=4">
    <td><?php echo $exalt?></td>
    <td class="ratio">
      <?php
          $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=6&have=4');

          $ratio = $html->find('.displayoffer-centered', 0);
                echo $ratio->plaintext; $html->clear();
unset($html);
      ?>
    </td>
    <td class="buy"><?php echo $chaos_last?></td>

  </tr>

  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=16&have=4">
    <td><?php echo $vaal?></td>
    <td class="ratio">
      <?php
            $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=16&have=4');

            $ratio = $html->find('.displayoffer-centered' , 0);

                  echo $ratio->plaintext; $html->clear();
unset($html);
        ?>
    </td>
    <td class="buy"><?php echo $chaos_last?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=5&have=4">
    <td><?php echo $gcp?></td>
    <td class="ratio">
      <?php
            $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=5&have=4');

            $ratio = $html->find('.displayoffer-centered' , 0);

                  echo $ratio->plaintext; $html->clear();
unset($html);
        ?>
    </td>
    <td class="buy"><?php echo $chaos_last?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=14&have=4">
    <td><?php echo $regal?></td>
    <td class="ratio">
      <?php
            $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=14&have=4');

            $ratio = $html->find('.displayoffer-centered' , 0);

                  echo $ratio->plaintext; $html->clear();
unset($html);
        ?>
    </td>
    <td class="buy"><?php echo $chaos_last?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=15&have=4">
    <td><?php echo $divine?></td>
    <td class="ratio">
      <?php
            $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=15&have=4');

            $ratio = $html->find('.displayoffer-centered' , 0);

                  echo $ratio->plaintext; $html->clear();
unset($html);
        ?>
    </td>
    <td class="buy"><?php echo $chaos_last?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=2&have=4">
    <td><?php echo $chaos?></td>
    <td class="ratio">
      <?php
            $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=2&have=4');

            $ratio = $html->find('.displayoffer-centered' , 2);

                  echo $ratio->plaintext; $html->clear();
unset($html);
        ?>
    </td>
    <td class="buy"><?php echo $fuse?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=1&have=4">
    <td><?php echo $chaos?></td>
    <td class="ratio">
      <?php
          $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=1&have=4');

          $ratio = $html->find('.displayoffer-centered' , 2);

                echo $ratio->plaintext; $html->clear();
unset($html);
      ?>
    </td>
    <td class="buy"><?php echo $alt?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=7&have=4">
    <td><?php echo $chaos?></td>
    <td class="ratio">
      <?php
            $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=7&have=4');

            $ratio = $html->find('.displayoffer-centered' , 2);

                  echo $ratio->plaintext; $html->clear();
unset($html);
        ?>
    </td>
    <td class="buy"><?php echo $chrom?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=3&have=4">
    <td><?php echo $chaos?></td>
    <td class="ratio">
      <?php
        $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=3&have=4');

        $ratio = $html->find('.displayoffer-centered' , 2);

              echo $ratio->plaintext; $html->clear();
unset($html);
      ?>
    </td>
    <td class="buy"><?php echo $alch?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=11&have=4">
    <td><?php echo $chaos?></td>
    <td class="ratio">
      <?php
            $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=11&have=4');

            $ratio = $html->find('.displayoffer-centered' , 2);

                  echo $ratio->plaintext; $html->clear();
unset($html);
        ?>
    </td>
    <td class="buy"><?php echo $scouring?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=13&have=4">
    <td><?php echo $chaos?></td>
    <td class="ratio">
      <?php
            $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=13&have=4');

            $ratio = $html->find('.displayoffer-centered' , 2);

                  echo $ratio->plaintext; $html->clear();
unset($html);
        ?>
    </td>
    <td class="buy"><?php echo $regret?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=9&have=4">
    <td><?php echo $chaos?></td>
    <td class="ratio">
      <?php
            $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=9&have=4');

            $ratio = $html->find('.displayoffer-centered' , 2);

                  echo $ratio->plaintext; $html->clear();
unset($html);
        ?>
    </td>
    <td class="buy"><?php echo $chance?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=10&have=4">
    <td><?php echo $chaos?></td>
    <td class="ratio">
      <?php
            $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=10&have=4');

            $ratio = $html->find('.displayoffer-centered' , 2);

                  echo $ratio->plaintext; $html->clear();
unset($html);
        ?>
    </td>
    <td class="buy"><?php echo $carto?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=8&have=4">
    <td><?php echo $chaos?></td>
    <td class="ratio">
      <?php
            $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=8&have=4');

            $ratio = $html->find('.displayoffer-centered' , 2);

                  echo $ratio->plaintext; $html->clear();
unset($html);
        ?>
    </td>
    <td class="buy"><?php echo $jeweller?></td>
  </tr>
  <tr class="clickable-row" target="_blank"  data-href="http://currency.poe.trade/search?league=Perandus&online=x&want=12&have=4">
    <td><?php echo $chaos?></td>
    <td class="ratio">
      <?php
            $html = file_get_html('http://currency.poe.trade/search?league=Perandus&online=x&want=12&have=4');

            $ratio = $html->find('.displayoffer-centered' , 2);

                  echo $ratio->plaintext; $html->clear();
unset($html);
        ?>
    </td>
    <td class="buy"><?php echo $blessed?></td>
  </tr>
</table>
<p class="tips">Click row to shop @ currency.poe.trade</p>
