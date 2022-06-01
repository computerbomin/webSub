create table ordermembers (
    num int not null auto_increment,
    address char(30) not null,
    name char(10) not null,
    phone char(15) not null,
    primary key(num)
);