# Laravel Vue.js/Inertia Project

Welcome ShiffLaravue which using Laravel Vue.js/Inertia project! This repository contains the source code for a web application that combines the power of Laravel, Vue.js, and Inertia.

## Prerequisites

Before you can run this project, ensure that you have the following software installed on your system:

1. **Docker:** You can download Docker from [the official Docker website](https://www.docker.com/get-started).

## Getting Started

Follow these steps to set up and run the project:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/ShiffNetwork/shifflaravue.git
   cd shifflaravue

2. **Start Docker Containers**
    ```bash
    docker-compose up

3. **Migrate and Seed the Database**
    ```bash
    php artisan migrate --seed

4. **Start the Laravel Server**
    ```bash
    php artisan serve

5. **Install JavaScript Dependencies and Compile Frontend Assets**
    ```bash
    npm install
    npm run dev


## YOU DID IT !!!
You can now access your application by visiting http://localhost:8000 in your web browser.