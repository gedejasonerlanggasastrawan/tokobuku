# BOOK STORE

small project from timedoor web dev team 

## FEATURES

- Showing list all the books that user needit

- Filters top 10 most famoust authors 

- It can input rating every user after they read the books

## REQUIRMENT
- Laravel framework version 10.0

- PHP version 8.1

- Composer

- MySQL Database

## INSTRUCTION 
First thing first
Configure the database in the .env file with the name of your database. This is the example using my database
DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=bookstore DB_USERNAME=your_username DB_PASSWORD=your_password

After that run the database migrations in the terminal of the visual code using this command to make the table:
php artisan migrate

Run this command to make the table:
php artisan make:model Author -m
php artisan make:model Category -m
php artisan make:model Book -m
php artisan make:model Rating -m

in this project we are gonna use fake data using factories so wee configure the fake data an then seed the database use this line:
php artisan db:seed

Start the Laravel development server:
php artisan serve

Last step access the application in your browser:
http://127.0.0.1:8000/books (Access the List of books with filter)

http://127.0.0.1:8000/top-authors (Access the List of top 10 most famous author)

http://127.0.0.1:8000/rate (Access the Input rating)
