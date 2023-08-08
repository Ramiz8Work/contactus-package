# Contact Admin Package

The Contact Admin Package is a simple Laravel package that provides functionality to manage contact messages, including name, email, and message fields. It allows you to easily collect and manage contact information from users on your website.

## Features

- Capture and store contact messages from users.
- Easily configure receiver email address for contact messages.
- Seamless integration with Laravel's mail system.

## Installation

To get started with the Contact Admin Package, follow these steps:

1. **Install the Package**:
   Install the package using Composer:

   ```bash
   composer require ramiz/contact
   ```

2. **Set Mail Credentials**:
   Add your mail credentials to your `.env` file to ensure the package can send email notifications:

   ```env
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.example.com
   MAIL_PORT=587
   MAIL_USERNAME=your_username
   MAIL_PASSWORD=your_password
   MAIL_ENCRYPTION=tls
   ```

3. **Configure Receiver Email**:
   Set the receiver email address for contact messages in the `config.contact` file located in your Laravel project's `config` directory.

4. **Publish Configuration**:
   Publish the package's configuration files:

   ```env
   php artisan vendor:publish
    ```


5. **Run Migrations**:
   Run the database migrations to create the necessary tables:


   ```env
   php artisan migrate
    ```


## Usage

Once the package is installed and configured, you can easily manage contact messages through the provided routes and views. Access the contact admin panel by navigating to `/contact` in your browser.

## License

This package is open-source software licensed under the [MIT License](LICENSE).
