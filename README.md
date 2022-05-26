## Oracle Store - Ecommerce Website

### Features

Guest
1. View Product
2. Register
3. Add product to cart

Customer
1. Login
2. Add product to cart
3. Checkout [Currently noGateway. So all purchase is PAID]
4. View purchase history

Admin 
1. Login to admin panel
2. CRUD product
3. CRUD size
4. Manage order
5. View user
6. Notes

### Installation
1. Clone the repository using the command "git clone [link]"
2. Configure the .env file accordingly with your Oracle Database Acccount
3. Run command below

```
composer update
php artisan key:generate
php artisan migrate:fresh --seed
php artisan storage:link
php artisan serve
```
