# Invoice Management System

## Overview
This is a Laravel 11 project designed for managing invoices. Users can create, update, and delete invoices. The system also includes functionality to print invoices, export them as PDFs, and send the PDF as an email attachment.

## Features
-**User Authentication**: Secure login and registration.
-**Invoice Management**: Create, edit, and delete invoices.
-**Print Invoice**: Print invoices directly from the system.
-**Export as PDF**: Export invoices as PDF files.
-**Email PDF**: Automatically send the PDF version of the invoice via email.

## Requirements
- **PHP**: 8.1 or higher
- **Composer**
- **Laravel**: 11.x
- **Database**: MySQL, PostgreSQL, SQLite, or any other supported by Laravel

## Installation

### Clone the Repository:
```git clone https://github.com/yourusername/your-repository.git```

### Navigate to the Project Directory:
```cd your-repository```

### Install PHP Dependencies:
```composer install```

### Install JavaScript Dependencies:
```npm install```

## Set Up the Environment File:

### Copy the example environment file:
```cp .env.example .env```

### Generate the application key:
```php artisan key:generate```

### Configure the Database:
Open the .env file and update the database connection settings.

### Run Migrations:
```php artisan migrate```

### Seed the Database (if applicable):
```php artisan db:seed```

## Configure Mail Settings

### Update email configuration in the .env file:
- MAIL_MAILER=smtp
- MAIL_HOST=smtp.mailtrap.io
- MAIL_PORT=2525
- MAIL_USERNAME=your_username
- MAIL_PASSWORD=your_password
- MAIL_ENCRYPTION=tls
- MAIL_FROM_ADDRESS=no-reply@yourdomain.com
- MAIL_FROM_NAME="${APP_NAME}"


## Start the Development Servers:

### Laravel Development Server:
```php artisan serve```

### Vite Development Server (in a new terminal window):
```npm run dev```

### Access your application at http://localhost:8000.

## Usage
Login/Registration: Users can create an account or log in.
Invoice Management: Users can create, update, and delete invoices.
Print Invoice: Print an invoice using the print button.
Export as PDF: Export an invoice as a PDF.
Email PDF: The system will send an email with the PDF attached after exporting.

## Contributing
Contributions are welcome! Please:
Fork the repository and create a new branch for your changes.
Follow coding standards and submit a pull request with a clear description of your changes.

## License
This project is licensed under the MIT License - see the LICENSE file for details.
