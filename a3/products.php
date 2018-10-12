<?php
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
    session_start();
    if (isset($_POST['clear-cart']) ) {
        unset($_SESSION['cart']);
        debug_to_console('cleared');
          }
    include_once('tools.php');
    topModule('Lindt| products');
    ?>

        <div class="grid-container" id = 101>
                <a href="https://titan.csit.rmit.edu.au/~s3722599/wp/a3/products.php?id=option1">
            <div class="grid-item">Lindor
                <img class="item" src ="../../media/images-a2/Lindor.jpg" alt="lindor">   
                <div class="middle">
                        <div class="text"><p class="darker">"Melt into a moment of bliss with our irresistibly smooth Lindor range, available in a variety of packs and delicious flavours."</p></div>
                </div>
            </div>
                    </a>
            <div class="grid-item">Excellence(SOLDOUT)
                                    
                 <img class="item" src ="../../media/images-a2/Lindt-Excellence.jpg" alt="Lindt-Excellence">
                 <div class="middle">
                        <div class="text"><p class="darker">"Discover the Lindt Excellence range of dark, milk and white chocolates. From exquisite fruit, nut and spice combinations to the intense complexity of pure 70%, 85% and 90% Cocoa chocolates."</p></div>
                 </div>
                 
            </div>
  
            <div class="grid-item">Bunny(SOLDOUT)
                 <img class="item" src ="../../media/images-a2/Gold_Bunny.jpg" alt="Gold_Bunny">
                 <div class="middle">
                        <div class="text"><p class="darker">"No Easter is complete without the iconic Lindt GOLD BUNNY, which continues to be the world’s most popular premium Easter chocolate." </p></div>
                 </div>
            </div>  
            <div class="grid-item">Creation(SOLDOUT)
                 <img class="item" src ="../../media/images-a2/Lindt_Mousse.jpg" alt="Creation">
                 <div class="middle">
                        <div class="text"><p class="darker">"Surrender to indulgence with Lindt Creation chocolates. A range of dessert-inspired recipes created with real, quality ingredients to tantalise your tastebuds."</p></div>
                </div>
            </div>
         </div> 
    
        <?php
                redirect();
        ?>     
    </main>
    
    <?php 

    printMyCode();
    bottomModule();
 
    ?>
</body>
</html>