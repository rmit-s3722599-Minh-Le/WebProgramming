
                const LindorElement = document.getElementById("Lindor")
        
                const totalElement = document.getElementById("total")
                const errorElement = document.getElementById("error")    
                function updateTotal() {
                    // Total Lindor Ordered
                    const Lindor = parseInt(LindorElement.value)
        
                    const total = calculateTotal(Lindor)
        
                    const formattedTotal = formatTotal(total)
        
                    totalElement.innerHTML = formattedTotal
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
                    const inputError = "Please enter valid item quantities"
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
        
                updateTotal()