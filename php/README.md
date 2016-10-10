# php

> (php-database)setting

- After installing mysql

```
CREATE DATABASE sample_db;

CREATE USER dbuser IDENTIFIED BY 'dbuser';

grant all on sample_db.* to dbuser@localhost identified by 'dbuser';
```

```
create table users (
id int not null auto_increment primary key,
name varchar(255),
score int
);
```
