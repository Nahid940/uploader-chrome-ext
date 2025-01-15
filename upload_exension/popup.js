document.getElementById('searchProduct').addEventListener('click', async () => {
    const code = document.getElementById('productTitle').value.trim();
    const errorMessage = document.getElementById('error_message');
    
    const endPoint = 'http://127.0.0.1:8001';
    
    if (!code) {
        errorMessage.textContent = 'Please enter a product code!'
        return;
    }

    const apiUrl = endPoint+'/api/product/'+code;

    try {
        const response = await fetch(apiUrl);
        const result = await response.json();
        let product = result.data;
        if (!product || product.error) {
            alert('Product not found. Please check the code and try again.');
            return;
        }

        // Populate the product details
        document.getElementById('productName').textContent = product.title;
        document.getElementById('productDescription').textContent = product.description;
        document.getElementById('productPrice').textContent = product.price;
        document.getElementById('productImage').src = product.image;

        // Show the product details section
        document.getElementById('productDetails').style.display = 'block';
    } catch (error) {
        alert('Error fetching product details: ' + error.message);
    }
});

document.getElementById('uploadProduct').addEventListener('click', () => {
    alert('Product upload functionality will be triggered here.');
    // Implement the product upload logic (e.g., open Facebook Marketplace page, autofill details)
});
