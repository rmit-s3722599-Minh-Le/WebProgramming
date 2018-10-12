<?php

    session_start();
    function debug_to_console( $data ) {
        $output = $data;
        if ( is_array( $output ) )
            $output = implode( ',', $output);
    
        echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
    }
    if (isset($_POST['id'],$_POST['option'],$_POST['qty'])) {

        if($_POST['qty'] > 0 &&  $_POST['id'] == '1234' && $_POST['option'] == 'Milk') {
            $id = '1234';
            $option = 'Milk';
            $_SESSION['cart'][$id][$option]['price'] += $_POST['price'];
             $_SESSION['cart'][$id][$option]['qty'] += $_POST['qty'];
             $_SESSION['cart'][$id][$option]['option'] = $_POST['option'];
            // $_SESSION['cart'][$id]['qty'] += $_POST['qty'];
        }
        if($_POST['qty'] > 0 &&  $_POST['id'] == '1234' && $_POST['option'] == 'Dark') {
            $id = '1234';
            $option = 'Dark';
            //  $_SESSION['cart'][$id]['option'] = $_POST['option'];
            $_SESSION['cart'][$id][$option]['price'] += $_POST['price'];
            $_SESSION['cart'][$id][$option]['qty'] += $_POST['qty'];
            $_SESSION['cart'][$id][$option]['option'] = $_POST['option'];
        }
        if($_POST['qty'] > 0 &&  $_POST['id'] == '1234' && $_POST['option'] == 'White') {
            $id = '1234';
            $option = 'White';
            //  $_SESSION['cart'][$id]['option'] = $_POST['option'];
            $_SESSION['cart'][$id][$option]['price'] += $_POST['price'];
            $_SESSION['cart'][$id][$option]['qty'] += $_POST['qty'];
            $_SESSION['cart'][$id][$option]['option'] = $_POST['option'];
        }

        $asd = "asdasdasddsdas";
        debug_to_console($_POST['id']);
        debug_to_console($_POST['price']);
        debug_to_console($_SESSION['cart'][$id][$option]['price']);
        debug_to_console($asd);
        debug_to_console( $_SESSION['cart'][$id][$option]);
        debug_to_console( $_SESSION['cart'][$id][$option]['qty']);
        debug_to_console( $_SESSION['cart'][$id]);
        foreach($_SESSION['cart'][$id] as $array) {
            debug_to_console( $array);
            debug_to_console($array['qty']);
        }
        if ($_SESSION['cart']['asdf'] == "") {
            debug_to_console("it works");
        }
        if ($_SESSION['cart']['1234'] == "") {
            debug_to_console("it works");
        }
        // debug_to_console($_SESSION['cart'][$id] );
        // debug_to_console($_SESSION['cart']);
        // foreach($_SESSION['cart'][$id]['option'] as $key => $values) {
        //     debug_to_console($key);
        // }
      }
      if ( isset($_POST['clear-user-and-cart']) ) {
    unset ($_SESSION['cart'] );
    debug_to_console('cleared');
      }
 
    include_once('tools.php');
    topModule('Lindt| Cart-chan');
    ?>
    <div class="content">
        <p>A-La-Cart</p>
    </div>   
      <form action = 'checkout.php' method = "post">
        <table id = "cart_table">
            <tr class = 'style'>
                <th>Item</th>
                <th>Flavour</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
             <?php
                if($_SESSION['cart']['1234'] != "") {
                  foreach($_SESSION['cart']['1234'] as $array) {
                    echo '<tr>';
                    echo      '<td>Lindor</td>';
                    echo      '<td>'.$array['option'].'</td>';
                    echo      '<td>'.$array['qty'].'</td>';
                    echo      '<td> $'.number_format($array['price'], 2).'</td>';
                    echo '</tr>';
                }
                
            }
            if($_SESSION['cart']['2345'] != "") {
                foreach($_SESSION['cart']['2345'] as $array) {
                  echo '<tr>';
                  echo      '<td>Excellence</td>';
                  echo      '<td>'.$array['option'].'</td>';
                  echo      '<td>'.$array['qty'].'</td>';
                  echo      '<td> $'.number_format($array['price'], 2).'</td>';
                  echo '</tr>';
              }
              
          }
          if($_SESSION['cart']['3456'] != "") {
            foreach($_SESSION['cart']['3456'] as $array) {
              echo '<tr>';
              echo      '<td>Bunny</td>';
              echo      '<td>'.$array['option'].'</td>';
              echo      '<td>'.$array['qty'].'</td>';
              echo      '<td> $'.number_format($array['price'], 2).'</td>';
              echo '</tr>';
          }
          
      }
         if($_SESSION['cart']['4567'] != "") {
            foreach($_SESSION['cart']['4567'] as $array) {
              echo '<tr>';
              echo      '<td>Creation</td>';
              echo      '<td>'.$array['option'].'</td>';
              echo      '<td>'.$array['qty'].'</td>';
              echo      '<td> $'.number_format($array['price'], 2).'</td>';
              echo '</tr>';
          }
          
      }
            $total;
            foreach($_SESSION['cart'] as $idarray) {
                debug_to_console($idarray);
                foreach($idarray as $optionarray) {
                    debug_to_console($optionarray);
                          $total += $optionarray['price'];
 
                }
            }
            debug_to_console($total);
            ?> 
                
        </table>
        <?php
            
            echo '<div class="content">';   
            echo '<p class="paragraph">Total Price: $'.number_format($total,2).'</p>';
            echo '</div>'; 
  
        ?>
        <div class="cart_buttons">
            <div class = "abutton">
        <input type = "submit" name = "tocheckout" value = "Checkout">
            </div>
      </form>
            <div class = "abutton">
      <form action = 'products.php' method = "post">
      <input type = "submit" name = "update" value = "update"> 
        </div>
            <div class = "abutton">
      <form action = 'products.php' method = "post">
      <input type = "submit" name = "clear-cart" value = "clear">
            </div>
      </form>
      </div>
      

</body>

        </main>

<?php
    bottomModule();
    printMyCode();
    ?>
</html>   