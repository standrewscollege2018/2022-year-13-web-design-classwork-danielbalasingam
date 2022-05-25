CREATE TABLE `Category` (
	`ID` INT(11) NOT NULL AUTO_INCREMENT,
	`Name` varchar(255) NOT NULL,
	`Images` varchar(255) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `Items` (
	`ID` INT(11) NOT NULL AUTO_INCREMENT,
	`Name` varchar(255) NOT NULL,
	`Price` INT(11) NOT NULL,
	`Description` varchar(255) NOT NULL,
	`Images` varchar(255) NOT NULL,
	`Category_ID` INT(11) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `Users` (
	`ID` INT(11) NOT NULL AUTO_INCREMENT,
	`Name` varchar(255) NOT NULL,
	`Email` varchar(255) NOT NULL,
	`Password` varchar(255) NOT NULL,
	`City` varchar(255) NOT NULL,
	`Address` varchar(255) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `Users_Items` (
	`ID` INT(11) NOT NULL AUTO_INCREMENT,
	`user_ID` INT(11) NOT NULL,
	`item_ID` INT(11) NOT NULL,
	`Status` varchar(255) NOT NULL,
	PRIMARY KEY (`ID`)
);

ALTER TABLE `Items` ADD CONSTRAINT `Items_fk0` FOREIGN KEY (`Category_ID`) REFERENCES `Category`(`ID`);

ALTER TABLE `Users_Items` ADD CONSTRAINT `Users_Items_fk0` FOREIGN KEY (`user_ID`) REFERENCES `Users`(`ID`);

ALTER TABLE `Users_Items` ADD CONSTRAINT `Users_Items_fk1` FOREIGN KEY (`item_ID`) REFERENCES `Items`(`ID`);





