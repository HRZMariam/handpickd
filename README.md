<h1 align="center"> Handpickd - Artisanal Marketplace</h1> 
<div align="center">
<img src="https://github.com/PaperTurtle/handpickd/assets/68080844/3a49f36e-d924-4e05-9e01-654bb12c588e" width=192 height=192 alt="logo" />
</div>

Handpickd is a community-driven platform that celebrates creativity and craftsmanship. This marketplace is a school project that provides a space for artisans to showcase their handmade goods and for enthusiasts to discover unique, handcrafted items.

## 📖 Table of Contents

-  [📖 Table of Contents](#-table-of-contents)
-  [🌟 Project Overview](#-project-overview)
-  [🔧 Requirements](#-requirements)
-  [⚙️ Installation Instructions](#️-installation-instructions)
   -  [NodeJS](#nodejs)
   -  [XAMPP](#xampp)
   -  [Composer](#composer)
   -  [Laravel](#laravel)
-  [📜 Page Breakdown](#-page-breakdown)
-  [✨ Features \& Functionality](#-features--functionality)
-  [🧰 Built with](#-built-with)
   -  [🖥️ Frontend](#️-frontend)
   -  [🗄️ Backend](#️-backend)
   -  [🧪 Testing](#-testing)
-  [🚀 Getting Started](#-getting-started)
-  [🐛 Known Issues](#-known-issues)
-  [📜 Authors](#-authors)

## 🌟 Project Overview

Handpickd offers an alternative to mass-produced goods by highlighting unique, handcrafted items. It's a digital homage to the tradition of artisanry, designed to connect makers with those who appreciate the value of bespoke creations.

## 🔧 Requirements

Handpickd requires the following tools to run:

-  [NodeJS](https://nodejs.org/en): A JavaScript runtime environment that executes JavaScript code outside of a browser.
-  [XAMPP](https://www.apachefriends.org/download.html): A free and open-source cross-platform web server solution stack package, mainly used for local development. It also comes preinstalled with MySQL and PHP, which are required for Handpickd.
-  [Composer](https://getcomposer.org/): A tool for dependency management in PHP, allowing you to declare the libraries your project depends on.
-  [Laravel](https://laravel.com/): Version 10, a robust PHP framework for web application development. Which will be installed via Composer

However, because the installation of Laravel and composer can be error-prone when installed via Powershell, it is highly recommended to install it via [Git Bash](https://gitforwindows.org/) instead.

## ⚙️ Installation Instructions

### NodeJS

First, install NodeJS from the link above. Once installed, open up a terminal and run the following command to verify that it has been installed correctly:

```shell
node -v
```

If the command returns a version number, then NodeJS has been installed correctly.

### XAMPP

Next, install XAMPP from the link above. Once installed, open up the XAMPP Control Panel and start the Apache and MySQL services. Once started, click on the "Admin" button for MySQL. This will open up a new tab in your browser. Click on the "New" button on the left-hand side and create a new database called "handpickd_db". Once created, click on the "Import" button on the top navigation bar. Click on the "Choose File" button and navigate to the `handpickd_db.sql` file in the root folder of this project. Once selected, click on the "Go" button on the bottom right-hand side. This will import the database into your local MySQL server. Below you will find pictures detailing the steps above.

![XAMMP Install 1](https://github.com/PaperTurtle/handpickd/assets/68080844/0ec2cade-07ec-4e6e-9b0a-140447fa5383)

![XAMPP Install 2](https://github.com/PaperTurtle/handpickd/assets/68080844/74c9092a-97a6-4fd9-a577-44a64e56ab9a)

> Note: The installation of Composer and Laravel will be done via Git Bash, so make sure to install it before proceeding. Errors may occur if you try to install it via Powershell.

### Composer

Next, install Composer from the link above. Once installed, open up a terminal and run the following command to verify that it has been installed correctly:

```shell
composer -v
```

If the command returns a version number, then Composer has been installed correctly.

### Laravel

Next, install Laravel via Composer. Open up a terminal and run the following command:

```shell
composer global require laravel/installer
```

## 📜 Page Breakdown

-  **Homepage**: Introduces the platform and features a search bar for finding products, along with a showcase of selected items.

-  **Login/Registration**: Allows new users to join the community and existing members to access their accounts.

-  **Post a Product**: Enables registered artisans to list new items, complete with detailed descriptions and images.

-  **Product Listings**: Displays items based on search criteria or browsing, with filters for categories and artisan location.

-  **Product Details**: Provides in-depth information about each product, including images, pricing, and artisan profiles.

-  **Artisan Profile**: Offers insights into the artisans' backgrounds, their product range, and customer reviews.

## ✨ Features & Functionality

-  **Responsive Design**: Ensures a consistent user experience across various devices.

-  **User Authentication**: Differentiates between artisan and buyer accounts for a personalized experience.

-  **Database Integration**: Maintains a secure record of products, user profiles, and transactions.

-  **Search and Filter System**: Helps users find products that match their interests.

-  **Shopping Cart & Checkout**: Allows users to reserve items they intend to purchase.

-  **User Reviews and Ratings**: Provides feedback on products and artisans, fostering a trustworthy community.

-  **Product Posting**: Allows Artisans to create new products and post them to the marketplace.

## 🧰 Built with

### 🖥️ Frontend

-  **[Tailwind CSS](https://tailwindcss.com/)**: Tailwind is a utility-first CSS framework that provides a comprehensive set of styling options. It's highly customizable and easy to use.
-  **[Alpine.js](https://alpinejs.dev/)**: A lightweight JavaScript framework for building interactive components. It's easy to learn and integrates seamlessly with Tailwind.
-  **[Heroicons](https://heroicons.com/)**: A set of free SVG icons from the makers of Tailwind CSS that are easy to customize and use in any project. They're designed to pair well with Tailwind.

### 🗄️ Backend

-  **[Laravel](https://laravel.com/)**: A PHP framework for building web applications. It's fast, secure, and easy to use. It also provides a robust set of tools for managing database migrations and seeding. Laravel is the foundation of Handpickd. It's used to create the backend API and handle routing.
-  **[MySQL](https://www.mysql.com/)**: A relational database management system that's fast, reliable, and easy to use. It's used to store data for Users, Products, and Transactions.
-  **[Laravel Breeze](https://laravel.com/docs/10.x/starter-kits#laravel-breeze)**: A lightweight authentication scaffolding for Laravel. It's used to create the authentication system for Handpickd. It provides a simple, minimalistic UI for user registration and login. It also includes password reset functionality.
-  **[Gmail](https://mail.google.com/)**: A free email service provided by Google. It's used to send emails to users when they register, reset their password, or purchase a product.

### 🧪 Testing

-  **[Pest](https://pestphp.com/)**: Pest is a testing framework for PHP. It's simple, elegant, and a pleasure to use. It's used to test the backend API for Handpickd.

## 🚀 Getting Started

To run Handpickd locally, follow these instructions:

First, open up XAMPP and start both the Apache and the MySQL server.

Next, navigate to the root folder of the project and open up a terminal. Run the following commands:

```shell
# Clone the repository
git clone https://github.com/PaperTurtle/handpickd.git

# Navigate to the repository
cd handpickd

# Install dependencies
npm install
composer install

# Set up the environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate // Optional

# Serve the application
php artisan serve // (Terminal 1)
npm run dev // (Terminal 2)
```

Once the application is running, you can access it at [http://localhost:8000](http://localhost:8000).

## 🐛 Known Issues

When you run the application, an error may occur stating that an sql driver does not exist. To fix this, download these two files: `php_pdo_sqlsrv_82_ts_x64` and `php_sqlsrv_82_ts_x64` from the [Microsoft SQL Drivers](https://learn.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server?view=sql-server-ver16). Place them in the following directory: `C:\xampp\php\ext`. Once placed, open up the `php.ini` file in the `C:\xampp\php` directory or open the XAMPP Control Panel and click on the Config Button in the Apache Section and add the following line to the bottom of the file:

```shell
extension=php_pdo_sqlsrv_82_ts_x64
extension=php_sqlsrv_82_ts_x64
```

Once added, save the file and restart the Apache and MySQL services in the XAMPP Control Panel. Once restarted, the application should run without any issues.

## 📜 Authors

-  Seweryn Czabanowski
-  Loran Heinzel
-  Tobias Neubert
