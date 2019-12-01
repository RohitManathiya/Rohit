create table users(
	id int(12) not null PRIMARY KEY AUTO_INCREMENT,
	name varchar(20) not null,
	email varchar(20) not null,
	phoneno int(10) not null,
	checkin varchar(20) not null,
	hostname varchar(20) not null,
	hostemail varchar(20) not null,
	hostphone int(10) not null,]
	address varchar(60) not null
);
insert into users(name,email,phoneno,checkout,hostname,hostemail,hostphone,address) values('amit','skdf',23232323,'2323','hostname','hostemail',
'hostphone','address');