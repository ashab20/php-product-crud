MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| crud               |
| information_schema |
| mysql              |
| performance_schema |
| practice           |
| sys                |
+--------------------+
6 rows in set (0.002 sec)

MariaDB [(none)]> create database pos;
Query OK, 1 row affected (0.001 sec)

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| crud               |
| information_schema |
| mysql              |
| performance_schema |
| pos                |
| practice           |
| sys                |
+--------------------+
7 rows in set (0.001 sec)

MariaDB [(none)]> use pos;
Database changed
MariaDB [pos]> create table products(
    -> product_id int not null primary key auto_increment,
    -> product_name varchar(40) not null,
    -> qty int not null,
    -> price int not null,
    -> manufature_time date,
    -> created_at datetime);
Query OK, 0 rows affected (0.011 sec)

MariaDB [pos]> show tables;
+---------------+
| Tables_in_pos |
+---------------+
| products      |
+---------------+
1 row in set (0.001 sec)

MariaDB [pos]> describe products;
+-----------------+-------------+------+-----+---------+----------------+
| Field           | Type        | Null | Key | Default | Extra          |
+-----------------+-------------+------+-----+---------+----------------+
| product_id      | int(11)     | NO   | PRI | NULL    | auto_increment |
| product_name    | varchar(40) | NO   |     | NULL    |                |
| qty             | int(11)     | NO   |     | NULL    |                |
| price           | int(11)     | NO   |     | NULL    |                |
| manufature_time | date        | YES  |     | NULL    |                |
| created_at      | datetime    | YES  |     | NULL    |                |
+-----------------+-------------+------+-----+---------+----------------+
6 rows in set (0.002 sec)

MariaDB [pos]> insert into products set product_name='Iphone', price=3250, qty=5, manufature_time='2012-06-17', created_at=now();
Query OK, 1 row affected (0.004 sec)

MariaDB [pos]> select * from products;
+------------+--------------+-----+-------+-----------------+---------------------+
| product_id | product_name | qty | price | manufature_time | created_at          |
+------------+--------------+-----+-------+-----------------+---------------------+
|          1 | Iphone       |   5 |  3250 | 2012-06-17      | 2022-06-07 20:30:21 |
+------------+--------------+-----+-------+-----------------+---------------------+
1 row in set (0.000 sec)

MariaDB [pos]> alter table products add column modified datetime;
Query OK, 0 rows affected (0.010 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [pos]> select * from products;
+------------+---------------+-----+-------+-----------------+---------------------+----------+
| product_id | product_name  | qty | price | manufature_time | created_at          | modified |
+------------+---------------+-----+-------+-----------------+---------------------+----------+
|          1 | Iphone        |   5 |  3250 | 2012-06-17      | 2022-06-07 20:30:21 | NULL     |
|          2 | Android Phone |   5 | 12000 | 2022-06-22      | 2022-06-07 15:14:46 | NULL     |
|          3 | Great         |   5 |  2341 | 2022-06-15      | 2022-06-07 15:22:46 | NULL     |
|          4 | some          |   5 | 23122 | 2022-06-15      | 2022-06-07 15:24:28 | NULL     |
|          5 | Ear Phone     |   5 | 23122 | 2022-06-15      | 2022-06-07 15:44:41 | NULL     |
+------------+---------------+-----+-------+-----------------+---------------------+----------+
5 rows in set (0.001 sec)

