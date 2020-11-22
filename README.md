# PHP 7.4 Docker setup for local development 
Basis PHP development environment for immediate use on any operating system that has docker installed. 

## Make up 
1. PHP 7.4 (FPM)
2. Composer 
3. Nginx 
4. MySQL 5.7 
5. Adminer

## First time build

```bash 
docker-compose build --no-cache 
```

### Run in the background 

```bash 
docker-compose up -d  
```

### Run with logs displayed in terminal 

```bash 
docker-compose up  
```

### Application 
To run your php application navigate to http://localhost 

### Adminer 
GUI for database, http://localhost:8080
Username: root
Password: password
Database: my_db
