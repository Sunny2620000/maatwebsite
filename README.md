 Step 1: Install maatwebsite/excel Package or composer require maatwebsite/excel:^3.1.47(in this project i have use this command)
    composer require maatwebsite/excel
If you encounter any issues, follow the installation guide to resolve missing PHP extensions like ext-gd or ext-zip.(php.ini)

Step 2: Publish the Configuration
php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config
This will create a config/excel.php configuration file.

Step 3: Create an Import Class
Generate an import class to handle CSV files:
php artisan make:import UsersImport --model=User

Step 4: Define Import Logic
Open the generated app/Imports/UsersImport.php and update it:
you can see my code inside the userimport file

Step 5: Create a Controller for CSV Upload
php artisan make:controller UserImportController
we can check my code inside the userImportController

 Step 6: Create the Upload Form
Create an import view resources/views/import.blade.php:

we can see my blade file of import.blade.php

Step 7: Define Routes
Add the following routes in routes/web.php:
we can see into web.php 



