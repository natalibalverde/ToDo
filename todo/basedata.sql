CREATE database todo;

USE todo;
CREATE TABLE tasks(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	description VARCHAR(200),
	date DATE NOT NULL,
	status ENUM ("PENDIENTE", "REALIZADA") default "PENDIENTE" 
);

SELECT * FROM tasks;
