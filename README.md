# Revews Shopify Admin
This project is a Revews Shopify Admin.

### Docker Services
- nginx
- admin
- database
- redis
- mailhog

If you do not have docker installed please install `docker` and `docker-compose` first.

## Requirements
- Docker
- Docker Compose

## Installation
Clone the project from github and run below command on root directory to copy docker-compose.yml file

```shell
cp docker-compose.yml.example docker-compose.yml
```

Now goto the `admin` directory and copy .env.example into .env

```shell
cp .env.example .env
```
## Run
To run the project you have to run this command from Docker directory root

```shell
docker-compose up -d --build
```

Docker runs all the services in the background upon successful execution of above command.
Now install admin project dependencies running following commands step by step.

```shell
docker-compose exec admin composer install
```


```shell
docker-compose exec admin php artisan migrate
```

To database seed please run the command

```shell
docker-compose exec admin php artisan db:seed
```

```shell
docker-compose exec admin php artisan db:seed --class=IllumineAdminDatabaseSeeder
```

To show all the running process, run the command below

```shell
docker-compose ps
```
To stop all the services, run the command

```shell
docker-compose down
```
