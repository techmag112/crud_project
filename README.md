# CRUD на PHP

Сделано в качестве практического задания на курсе **PHP**

### Примененные технологии
* PHP, Bootstrap 5.3

### Реализованный функционал

* Добавление записей.
* Удаление записей.
* Просмотр записей.        
* Редактирование записей.

## Как запустить проект:
1. Создать в MySQL базу db_main.
2. Создать таблицу:
**CREATE TABLE `customers` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `flag` bit(1) NOT NULL DEFAULT b'0'
)** 
3. Поместить код в папку локального сервера localhost
4. Запустить файл index.php

## TODO:
Пагинация.



