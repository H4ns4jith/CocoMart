create database cocomart;
use cocomart;

create table users(userid INT primary key auto_increment,fname varchar(255),lname varchar(255),mail varchar(255),pswd varchar(255));

create table items(itemid INT primary key auto_increment,itemname varchar(255),itemprice decimal(9,2),itemcategory varchar(100),itemdetail text);