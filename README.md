# Intro

this project is to confirm the basic knowledge in some apllication tools or each program language.


> (php-database)setting

- After installing mysql

```
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
