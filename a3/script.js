function getCurrentDate() {
    inputdate
    var n = new Date();
    var c = format(n, "MM-YYYY")
    var m = n.getMonth() + 1;
    var y = n.getFullYear();
    console.log(y+"-" +   ('0' + m).slice(-2));
    
    // var w = y+"-" +   ('0' + m).slice(-2);
    // document.getElementById("expire").onfocus.w;
    //  return y+"-" +   ('0' + m).slice(-2);
     
    

}

function visacheck() {
    // var re = new RegExp('^(4)([ ])|( ?\d){13,16}$');
    var credit = document.getElementById("credit_cardinput").value;
    // var ok = re.exec(credit);
    if (/^(4)([ ])|( ?\d){13,16}$/.test(credit)) {
        document.getElementById("Visa-Logo").style.display = "inline";
    }
    else {
        document.getElementById("Visa-Logo").style.display = "none";
    }
}

function option1()  {
    document.getElementById("101").style.display = "none";
    console.log('something should happen');

}
function optionE() {
    // document.getElementById("product_list").style.display = "block";
    window.location.replace("../Assignment2-5/products.php");
    
}
                
        

                const errorElement = document.getElementById("error")   

                function updateTotal() {
                    // Total Lindor Ordered
                    const LindorElement = document.getElementById("Lindor")
                    const totalElement = document.getElementById("total")
                    const Lindor = parseInt(LindorElement.value)
        
                    const total = calculateTotal(Lindor)
        
                    const formattedTotal = formatTotal(total)
                    
        
                    totalElement.innerHTML = formattedTotal
                    price.value = total

                }

                

                function calculateTotal(Lindor) {
                    const LindorPrice = Lindor * 2.00
                    const total = (LindorPrice).toFixed(2) 
        
                    return total
                }
        
                function formatTotal(total) {
                    const formattedTotal = "Total: $" + total
        
                    return formattedTotal
                }
        
                function validateForm() {
                    const itemError = "Please purchase at least one item"
                    const inputError = "*Please enter valid item quantities"
                    const success = "Thank you for your purchase"
        

                    if (
                        parseInt(LindorElement.value) === 0 
                    ) {
                        errorElement.innerHTML = itemError
                        errorElement.style.color = 'red'
                        errorElement.style.display = 'block'
        
                        return false
                    }
        
        
                     if (
                        parseInt(LindorElement.value) < 0
                    ) {
                        errorElement.innerHTML = inputError
                        errorElement.style.color = 'red'
                        errorElement.style.fontWeight = 'bold'
                        errorElement.style.display = 'block'
        
                        return false
                    }
        
                    if (
                        parseInt(LindorElement.value) > 0
                    ) {

                    }

                    else {
                        errorElement.innerHTML = inputError
                        errorElement.style.color = 'red'
                        errorElement.style.fontWeight = 'bold'
                        errorElement.style.display = 'block'

                        return false
                    }
                    const headingElement = document.getElementById('heading')
                    headingElement.style.color = 'pink'
        
                    errorElement.innerHTML = success
                    errorElement.style.color = 'green'
                    errorElement.style.fontWeight = 'bold'
                    errorElement.style.display = 'block'
        
                    return false
                }


                

function plus(whichID) {
    var aString = document.getElementById(whichID);
    var x = parseInt(aString.value);
    
    if(isNaN(x)) {
      x = 0;
    }
  
  
    
     
      x= x+1;
      
      var formattedTotal = x;
      document.getElementById(whichID).value = x;
    
      console.log('plus button click,' + 'qty is: ' + x);
      updateTotal()

  
    }
    
  function minus(whichID) {
    var aString1 = document.getElementById(whichID);
    var y = parseInt(aString1.value);
    
    if(isNaN(y)) {
      y = 2;
    }
  
        
     
      y= y-1;
      if (y <= 0) {
        y = 1;
      }
      var formattedTotal = y;
      document.getElementById(whichID).value = y;
    
      console.log('minus button click,' + 'qty is: ' + y);

      updateTotal()
    }

        