# Acme Widget Sales System

A PHP application to manage a sales system, featuring product management, discounts, and delivery charge calculations. Follows MVC architecture.

## Setup

### Without Docker

1. **Clone the repository:**
    git clone https://github.com/priyankaillikkattil/architected-labs.git
    cd project_name
2. **Install dependencies:**
        composer install
3. **Start the server:**
    php -S localhost:8000 -t public

   
### With Docker

1. **Clone the repository:**
    git clone https://github.com/priyankaillikkattil/architected-labs.git
    cd project_name  
2. **Build and run Docker containers:**
    docker-compose up --build
3. **Access the app:**
    Open `http://localhost:8000` in Postman.

### Adding Products
Use Postman to send a POST request with product data to `http://localhost:8000`. 

#### Example Request Body
{
  "products": [
    {"code": "R01", "name": "Red Widget", "price": 32.95},
    {"code": "G01", "name": "Green Widget", "price": 24.95},
    {"code": "B01", "name": "Blue Widget", "price": 7.95}
  ]
}

![image](https://github.com/user-attachments/assets/96628772-9a04-4304-83ec-15030f37a841)
![image](https://github.com/user-attachments/assets/453cc193-61be-4962-b0b1-0c65bd29abde)
