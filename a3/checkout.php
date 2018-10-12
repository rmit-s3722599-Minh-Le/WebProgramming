
<?php

    session_start();
    function debug_to_console( $data ) {
        $output = $data;
        if ( is_array( $output ) )
            $output = implode( ',', $output);
    
        echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
    }
    debug_to_console($name);
    debug_to_console($_POST['nameinput']);
    debug_to_console($_POST['emailinput']);
    debug_to_console($_POST['addressinput']);
    debug_to_console($_POST['credit_cardinput']);
    debug_to_console($_POST['expire']);
    $name = $_POST['nameinput'];
    $email =$_POST['emailinput'];
    $address = $_POST['addressinput'];
    $phone = $_POST['phoneinput'];
    $creditcard = $_POST['credit_cardinput'];
    $monthexp = $_POST['expire'];
    $nameErr = $emailErr = $addressErr = $phoneErr = $creditcardErr = $monthexpErr = "";
    $check1 = false;
    $check2 = false;
    $check3 = false;
    $check4 = false;
    $check5 = false;
    $check6 = false;
    
   
    
        
     if(empty($name)) {
         $nameErr = "*Name is required";
     }
     else {
         if(!preg_match("/^([ ]|[a-zA-Z-.']|-|'|,){1,100}$/",$name)) {
             $nameErr = "*Name is Invalid..";
         }
         else $check1 = true;
     }

     if (empty($email)) {
        $emailErr = "*Email is required";
      } else {
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "*Invalid email format"; 
        }
        else $check2 = true;
      }

      if(empty($address)) {
        $addressErr = "*Address is required";
    }
    else {
        if(!preg_match("/^([a-zA-Z-.'\/,\d|[ ]|[\n|\s{2,}]){1,100}$/",$address)) {
            $addressErr = "*Adrress is Invalid..";
        }
       else $check3 = true;
    }

    if(empty($phone)) {
        $phoneErr = "*Phone num is required";
    }
    else {
        if(!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/",$phone)) {
            $phoneErr = "*Phone num is Invalid..";
        }
       else  $check4 = true;
    }

    if(empty($creditcard)) {
        $creditcardErr = "*Credit Card is required";
    }
    else {
        if(!preg_match("/^([ ])|( ?\d){12,19}$/",$creditcard)) {
            $creditcardErr = "*Credit Card is Invalid..";
        }
      else  $check5 = true;

    }
    
    // if ($check5== true && $check4 == true && $check3 == true && $check2 == true && $check1 == true) {
    //     if($_SESSION['checkout']['exp'] = "") {
    //     $_SESSION['user']['exp'] = $_POST['expire'];
    //     $check6 = true;
    //     }

    //     else {
    //         if($_SESSION['checkout']['exp'] - $_POST['expire'] < 29) {
    //             $monthexpErr = "*Expiry date is required";
    //         }
    //        else $check6 = true;
    //     }

    // }


        if(empty($monthexp)) {
            $monthexpErr = "*Credit Card Expry Date is required";
        }
        else {
            if (strtotime($monthexp) < 28*24*60*60 + strtotime('today'))
            {
                $monthexpErr = "*Credit Card Expry Date is invalid";
            }
            else $check6= true;
        }
        debug_to_console( date("Y-m-d",time()));
    if ($check6== true && $check5== true && $check4 == true && $check3 == true && $check2 == true && $check1 == true) {
        $_SESSION['checkout']['name']= $name;
        $_SESSION['checkout']['email'] = $email;
        $_SESSION['checkout']['address'] = $address;
        $_SESSION['checkout']['phone'] = $phone;
        $_SESSION['checkout']['time'] = date("Y-m-d",time());
        header("Location: https://titan.csit.rmit.edu.au/~s3722599/wp/a3/receipt.php");
        // $_SESSION['checkout']['creditcard'] = $creditcard;
        // $_SESSION['checkout']['exp'] = $monthexp;

        $now = date('d/m h:i');
//
    $fp = fopen('orders.txt', 'a');
    flock($fp, LOCK_SH);
    foreach ( $_SESSION['cart'] as $purchase ) { 
        $order =  array_merge( $now, $_SESSION['checkout'], $purchase );
        foreach ($order as $aorder) {
            fwrite($fp,implode("\t", $aorder, "\n"));

        }
        flock($fp, LOCK_UN);
        fclose($fp);
    }

fclose($fp);

    }
//
    include_once('tools.php');
    topModule('Lindt| Homepage');
   
    ?>
    <div class="content">
        <p>Checkout<p>
    </div>
<form action = 'checkout.php' method = "post"> 
    <div class= "block">
        <div class = miniblock>
            <label for="nameinput">Full Name<div class = "error102">*</div></label>
        </div>
        <div class = miniblock>
            <input type ="text" id="nameinput" name="nameinput" class = "clientinput"><?php echo '<p class="error101">'.$nameErr.'</p>';?>
        </div>
    </div>
    <div class= "block">
        <div class = miniblock>
            <label for="emailinput">Email<div class = "error102">*</div></label>
        </div>
        <div class = miniblock>
            <input type ="email" id="emailinput" name="emailinput" class = "clientinput"><?php echo '<p class="error101">'.$emailErr.'</p>';?>
        </div>
    </div>
    <div class= "block">
        <div class = miniblock>
            <label for="addressinput">Address<div class = "error102">*</div></label>
        </div>
        <div class = miniblock>
            <input type ="text area" id="addressinput" name="addressinput" class = "clientinput"><?php echo '<p class="error101">'.$addressErr.'</p>';?>
        </div>
    </div>
    <div class= "block">
        <div class = miniblock>
            <label for="phoneinput">Phone<div class = "error102">*</div></label>
        </div>
        <div class = miniblock>
            <input type ="text" id="phoneinput" name="phoneinput" class = "clientinput"><?php echo '<p class="error101">'.$phoneErr.'</p>';?>
        </div>
    </div>
    <div class= "block">
        <div class = miniblock>
            <label for="credit_cardinput">Credit Card<div class = "error102">*</div></label>
        </div>
        <div class = miniblock>
            <input type ="text" id="credit_cardinput" name="credit_cardinput" class = "clientinput" oninput = visacheck()><?php echo '<p class="error101">'.$creditcardErr.'</p>';?><img id ="Visa-Logo" src ="../../media/images-a2/visaLogo.png" alt="Visa Logo">
        </div>
    </div>
    <div class= "block">
        <div class = miniblock>
            <label for="expirydate">Expiry Date</label>
        </div>
        <div class = miniblock>
        <input type="date" id="expire" name="expire"><?php echo '<p class="error101">'.$monthexpErr.'</p>';?> 
           
        </div>
    </div>
     <div class = "abutton">
        <input type = "submit" name = "checkout" value = "Checkout">
     </div>  
</form>
    </body>
</main>

<?php

  
    bottomModule();  
    printMyCode()
   

    ?>
     
    <div><p><?php include('order.txt'); ?></p></div>
</html>   