CREATE DATABASE Login;
use Login;

create table tbLogin (
	cdLogin int primary key auto_increment,
    nmLogin varchar(20) ,
    senha varchar(20) 
);

select * from tbLogin;

INSERT INTO tbLogin values
(default,'adm', '123'),
(default,'seg', '1234'),
(default,'Nicolas', '12345');