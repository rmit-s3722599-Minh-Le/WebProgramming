<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Dancing Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Indie Flower" rel="stylesheet" type="text/css">
    
</head>
<body>
        <header>
                <nav>
                    <ul>
			<li><a href="https://titan.csit.rmit.edu.au/~s3722599/wp/a2/index.php">Home</a></li>
                    	<li><a href="https://titan.csit.rmit.edu.au/~s3722599/wp/a2/products.php">Products</a></li>
                    	<li><a href="https://titan.csit.rmit.edu.au/~s3722599/wp/a2/login.php">Login</a></li>
                    </ul>
                </nav>       
            <br><br>
            <div id="logodiv">
                <img id ="Lindt-logo" src ="../media/images-a2/lindt-logo.png" alt="Lindt Logo">
            </div>
        </header>
        <main>
            <div class=content> 
                <div class="clearfix">
            <p>Lindor</p>
            <img id ="Assorted-Lindor" src ="../media/images-a2/Assorted-Lindor.jpg" alt="Assorted-Lindor">
            <p class="paragraph">Lindor, the smoothest creation from the Lindt Master Chocolatiers. When you break the delicate chocolate shell, the irresistibly smooth filling starts to melt… and so will you.</p>
            <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post" onsubmit="return validateForm()">
                <div class= "section">
                    <label>Variety</label>
		    <input type="hidden" name="Id" value="3487">
                    <select name="option">
                            <option value="Milk">Milk</option>
                            <option value="Dark">Dark</option>
                            <option value="Mint">Mint</option>
                            <option value="Liqour">Liqour</option>
                            <option value="White">White</option>
                            <option value="Orange">Orange</option>
                            <option value="Coffee">Coffee</option>
                            <option value="Hazelnut">Hazelnut</option>
                            <option value="Caramel">Caramel</option>
                            <option value="irish Cream">Irish Cream</option>
                            <option value="Stracciatella">Stracciatella</option>
                            <option value="Coconut">Coconut</option>
                            <option value="Strawberries & Cream">Strawberries & Cream</option>
                            <option value="Almond">Almond</option>                                
                        </select>
                </div>
                <div class = "section">
                <label>Lindor ($2.00)</label>
                <input type="number" id="Lindor" name="quantity" value="1" min="1" oninput="updateTotal()">
                </div>
                <p id="total"></p>
                <p id="error"></p>
                <!--<input type="hidden" name="a[0]" value="b"> 
                <input type="hidden" name="a[1]" value="c"> -->
                <input type="submit" value="purchase"> 
                </div> 
            </form>
                </div>
                
            
        </main>
        <script src="script.js"></script> 
        <footer>
                <p> © 2018 Lindt & Sprüngli (Australia) PTY LTD- <span class="fancy">Yonathan Kogan s3719826 | Minh Le s3722599 </span> </p>
        </footer>
</body>
</html>