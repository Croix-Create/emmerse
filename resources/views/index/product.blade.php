<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   

    <title>Products</title>
</head>

<style>
    .product-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    }   

    .product {
        border: 1px solid #ccc;
        padding: 20px;
        margin-bottom: 20px;
        width: 300px;
    }

    .product img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
</style>

<body>
    <div id="products-app">
        <div class="product-list">
            <div class="product" v-for="product in products" :key="product.id">
                <img :src="product.image" alt="Product Image">
                <h3>{{ product.name }}</h3>
                <p>{{ product.description }}</p>
                <p>Price: {{ product.price }}</p>
                <button @click="addToCart(product.id)">Add to Cart</button>
            </div>
        </div>
    </div>

<script>
    
import Vue from 'vue';

new Vue({
    el: '#products-app',
    data: {
        products: []
    },
    created() {
        axios.get('/api/products')
            .then(response => {
                this.products = response.data;
            })
            .catch(error => {
                console.error('Error fetching products:', error);
            });
    },
    methods: {
        addToCart(productId) {
            // Implement your add to cart logic here
            console.log('Adding product with ID:', productId);
        }
    }
});
    </script>
</body>
</html>