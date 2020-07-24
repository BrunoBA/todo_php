# dibre_todo_vanilla

## Initialize the server

```php -S 0.0.0.0:8080 -t public```

## SQL

```SQL
CREATE SCHEMA `default`;
```
``` SQL
CREATE TABLE `default`.`tasks` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  PRIMARY KEY (`id`));
```

## Docker
```
docker run -e MYSQL_ROOT_PASSWORD=root -p 3306:3306 mysql:5.7
```