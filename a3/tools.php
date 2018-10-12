
<?php
      
  function printMyCode() {
    $lines = file($_SERVER['SCRIPT_FILENAME']);
    echo "<pre class='mycode'>\n";
    foreach ($lines as $lineNo => $lineOfCode)
       printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
    echo "</pre>";
  }

  function preShow( $arr, $returnAsString=false ) {
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
      return $ret;
    else 
      echo $ret; 
  }
  function topModule($pageTitle) {

     $output = <<<"THELASTJEDI"
    <!DOCTYPE html>
    <script src="script.js"></script> 
    <html>
        <head>
                    <meta charset="utf-8" />
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <title>$pageTitle</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
                    <link href="https://fonts.googleapis.com/css?family=Dancing Script" rel="stylesheet" type="text/css">
                    <link href="https://fonts.googleapis.com/css?family=Indie Flower" rel="stylesheet" type="text/css">
                    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet" type="text/css">
                    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
        </head>
        <body>
            <header>
                <nav>
                    <ul>
                            <li><a href="https://titan.csit.rmit.edu.au/~s3722599/wp/a3/index.php">Home</a></li>
                            <li><a href="https://titan.csit.rmit.edu.au/~s3722599/wp/a3/products.php">Products</a></li>
                            <li><a href="https://titan.csit.rmit.edu.au/~s3722599/wp/a3/login.php">Login</a></li>
    
                    </ul>
                </nav>       
                    <br><br>
                    <div id="logodiv">
                        <img id ="Lindt-logo" src ="../../media/images-a2/lindt-logo.png" alt="Lindt Logo">
                    </div>
            </header>
     <main>
THELASTJEDI;
     echo $output;
  } 
 
  function bottomModule() {
    $session = preShow($_SESSION, true);
    $post = preShow($_POST, true);

    $output1 = <<<"OUTPUTTING"
    <script src="script.js"></script>
    <footer>
    <p> © 2018 Lindt & Sprüngli (Australia) PTY LTD- <span class="fancy">Yonathan Kogan s3719826 | Minh Le s3722599 </span> </p>
    </footer>
    $session;
    $post;
OUTPUTTING;
    echo $output1;
  }


   function redirect() {
       $id = $_GET['id'];
     if ((isset($_GET['id']))&&($_GET['id'] === "option1")) {
        $choice1 = <<<"CHOICE1"
        <script>

        option1();
        </script>
        <div class=content> 
                <div class="clearfix">
            <p>Lindor</p>
            <img id ="Assorted-Lindor" src ="../../media/images-a2/Assorted-Lindor.jpg" alt="Assorted-Lindor">
            <p class="paragraph">Lindor, the smoothest creation from the Lindt Master Chocolatiers. When you break the delicate chocolate shell, the irresistibly smooth filling starts to melt… and so will you.</p>
            <form action="https://titan.csit.rmit.edu.au/~s3722599/wp/a3/cart.php" method="post" onsubmit="return validateForm()">
            <div class= "con">
                <div class= "section">
                    <label>Variety</label>
                    <input type="hidden" name= "id" value="1234">
                    <select name="option">
                            <option value="Milk">Milk</option>
                            <option value="Dark">Dark</option>
                            <option value="White">White</option>                           
                        </select>
                </div>
                <div class = "section">
                <label>Lindor ($2.00)</label>
                <input type=button value ="-" id="negative" onclick="minus('Lindor')" ></button>
                <input type="number" id="Lindor" name ="qty" value="0" min="1" oninput="updateTotal()">
                <input type=button value="+" id="positive" onclick="plus('Lindor')" ></button>
                </div>
             </div>   
                <p id="total"></p>
                <p id="error"></p>
                <!--<input type="hidden" name="a[0]" value="b"> 
                <input type="hidden" name="a[1]" value="c"> -->
                <input type="hidden" name= "price" id = "price">
                <input type="submit" id="Purchase" value="Purchase">           
                </div> 
            </form>
                </div>
CHOICE1;
    echo $choice1;        
   }
//    if ((isset($_GET['id']))&&($_GET['id'] === "option2")) {
//     $choice2 = <<<"CHOICE2"
//     <script>

//     option1();
//     </script>
//     <div class=content> 
//             <div class="clearfix">
//         <p>Exellence</p>
//         <img id ="Assorted-Lindor" src ="../Assignment2-5/images/Assorted-Lindor.jpg" alt="Assorted-Lindor">
//         Lindt Excellence offers chocolate lovers a unique and sophisticated sensory experience for the ultimate chocolate pleasure  <p class="paragraph">.</p>
//         <form action="../Assignment2-5/cart.php" method="post" onsubmit="return validateForm()">
//             <div class= "section">
//                 <input type="hidden" name= "id" value="2345">
//                 <select name="option">
//                         <option value="Milk">Milk</option>                          
//                     </select>
//             </div>
//             <div class = "section">
//             <label>Exellence ($5.00)</label>
//             <input type=button value ="-" id="negative" onclick="minus('Lindor')" ></button>
//             <input type="number" id="Exellence" name ="qty" value="0" min="1" oninput="updateTotal()">
//             <input type=button value="+" id="positive" onclick="plus('Lindor')" ></button>
//             </div>
//             <p id="total"></p>
//             <p id="error"></p>
//             <!--<input type="hidden" name="a[0]" value="b"> 
//             <input type="hidden" name="a[1]" value="c"> -->
//             <input type="submit" id="Purchase" value="Purchase">           
//             </div> 
//         </form>
//             </div>
// CHOICE2;
// echo $choice2;        
//    }
     if ((($_GET['id']!="option1")) && ($_GET['id'] != "")){
    $error1 = <<<"ERROR1"
    <script>
     optionE();
     </script>
ERROR1;
    echo $error1;     
   }
 }


?>
