# INSTRACTION
_Create Database:_
```
create database pos;
```
_Create Tables:_
```
create table products(product_id int not null primary key auto_increment, product_name varchar(40) not null,qty int not null, price int not null,manufature_time date, created_at datetime);
```


_INSERT DATA:_
```
insert into products set product_name='Iphone', price=3250, qty=5, manufature_time='2012-06-17', created_at=now();
```
_GET ALL DATA:_
```
select * from products;
```
_MODIFY DATA:_
```
alter table products add column modified datetime;
```


## Authors

- [@ashab20](https://www.github.com/ashab20)

