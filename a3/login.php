<?php
    include_once('tools.php');
    topModule('Lindt| products');
    session_start();
    ?>
            <form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php">
            <h2 id = "Login-Title">Registered Customers</h2>
            <p class="Login-info">Email Address*</p>
            <input type="text" id="Email" name="Email" required placeholder="Your Email..">
            <p class ="Login-info">Password*</p>
            <input type="password" id="Password" name="Password" required placeholder="Your Password..">
            <p id="Required-field">*Required Fields</p>
            <div id = "Button">
            <input class="Login-Button" type="submit" value="Login">
            </div>
            </form>

        

        </main> 

        </body>
        <?php

    printMyCode();
    bottomModule();
    ?>
 
</html>

<!-- onclick="location.href='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php'" -->