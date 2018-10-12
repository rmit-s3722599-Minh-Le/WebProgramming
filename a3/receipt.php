<?php
    session_start();
    include_once('tools.php');
    topModule('Lindt| Homepage');
    ?>

    <div class = "center">
     <table id ="Reciepttable">
        <tr>
            <th><div class="heading">Purchase Date</div></th>
            <th><div class="heading">Name</div></th>
            <th><div class="heading">Address</div></th>
            <th><div class="heading">Mobile</div></th>
            <th><div class="heading">Email</div></th>
            <th><div class="heading">ID</div></th>
            <th><div class="heading">Option</div></th>
            <th><div class="heading">Quantity</div></th>
            <!-- <th><div class="text">"Unit Price"</div></th> -->
            <th><div class="heading">Subtotal</div></th>
        </tr>
             <?php
                if($_SESSION['cart']['1234'] != "") {
                  foreach($_SESSION['cart']['1234'] as $array) {
                      
                    echo '<tr>';
                    echo      '<td>'.$_SESSION['checkout']['time'].'</td>'; 
                    echo      '<td>'.$_SESSION['checkout']['name'].'</td>';  
                    echo      '<td>'.$_SESSION['checkout']['address'].'</td>';      
                    echo      '<td>'.$_SESSION['checkout']['phone'].'</td>';
                    echo      '<td>'.$_SESSION['checkout']['email'].'</td>';
                    echo      '<td>1234</td>';
                    echo      '<td>'.$array['option'].'</td>';
                    echo      '<td>'.$array['qty'].'</td>';
                    echo      '<td> $'.number_format($array['price'], 2).'</td>';
                    echo '</tr>';
                      
                }
                
            }
            if($_SESSION['cart']['2345'] != "") {
                foreach($_SESSION['cart']['2345'] as $array) {
                  echo '<tr>';
                  echo      '<td>'.$checkout['time'].'</td>'; 
                  echo      '<td>'.$checkout['name'].'</td>';  
                  echo      '<td>'.$checkout['address'].'</td>';      
                  echo      '<td>'.$checkout['phone'].'</td>';
                  echo      '<td>'.$checkout['email'].'</td>';
                  echo      '<td>2345</td>';//exellence
                  echo      '<td>'.$array['option'].'</td>';
                  echo      '<td>'.$array['qty'].'</td>';
                  echo      '<td> $'.number_format($array['price'], 2).'</td>';
                  echo '</tr>';
              }
              
          }
          if($_SESSION['cart']['3456'] != "") {
            foreach($_SESSION['cart']['3456'] as $array) {
              echo '<tr>';
              echo      '<td>'.$checkout['time'].'</td>'; 
              echo      '<td>'.$checkout['name'].'</td>';  
              echo      '<td>'.$checkout['address'].'</td>';      
              echo      '<td>'.$checkout['phone'].'</td>';
              echo      '<td>'.$checkout['email'].'</td>';
              echo      '<td>3456</td>';//bunny
              echo      '<td>'.$array['option'].'</td>';
              echo      '<td>'.$array['qty'].'</td>';
              echo      '<td> $'.number_format($array['price'], 2).'</td>';
              echo '</tr>';
          }
          
      }
         if($_SESSION['cart']['4567'] != "") {
            foreach($_SESSION['cart']['4567'] as $array) {
              echo '<tr>';
              echo      '<td>'.$checkout['time'].'</td>'; 
              echo      '<td>'.$checkout['name'].'</td>';  
              echo      '<td>'.$checkout['address'].'</td>';      
              echo      '<td>'.$checkout['phone'].'</td>';
              echo      '<td>'.$checkout['email'].'</td>';
              echo      '<td>4567</td>';//creation
              echo      '<td>'.$array['option'].'</td>';
              echo      '<td>'.$array['qty'].'</td>';
              echo      '<td> $'.number_format($array['price'], 2).'</td>';
              echo '</tr>';
          }
          
      }
      ?>
      </table>
     </main>
    <div>
 
    </body>
    <?php
        bottomModule();
        printMyCode()
        ?>
    </html>
    