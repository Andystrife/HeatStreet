-- Create Database
CREATE SCHEMA `hotsauce` ;

--Create Tables

--Customer Table
CREATE TABLE `hotsauce`.`customer` (
  `CustomerID` INT(11) NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `city` VARCHAR(45) NULL,
  `province` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  PRIMARY KEY (`CustomerID`));

--Inventory Table
CREATE TABLE `hotsauce`.`inventory` (
  `ProductID` INT(11) NOT NULL,
  `ProductDesc` VARCHAR(45) NULL,
  `QuantityInStock` VARCHAR(45) NULL,
  `UnitPrice` VARCHAR(45) NULL,
  PRIMARY KEY (`ProductID`));

--Orders Table
CREATE TABLE `hotsauce`.`orders` (
  `OrderID` INT(11) NOT NULL AUTO_INCREMENT,
  `CustomerID` VARCHAR(45) NULL,
  `MildQuantity` VARCHAR(45) NULL,
  `MediumQuantity` VARCHAR(45) NULL,
  `HotQuantity` VARCHAR(45) NULL,
  `ExtremeQuantity` VARCHAR(45) NULL,
  `FruityQuantity` VARCHAR(45) NULL,
  `TotalCost` VARCHAR(45) NULL,
  PRIMARY KEY (`OrderID`));


  --Fill Up the Inventory Table
INSERT INTO `hotsauce`.`inventory` (`ProductID`, `ProductDesc`, `QuantityInStock`, `UnitPrice`) VALUES ('1', 'Mild Sauce', '50', '4.95');
INSERT INTO `hotsauce`.`inventory` (`ProductID`, `ProductDesc`, `QuantityInStock`, `UnitPrice`) VALUES ('2', 'Medium Sauce', '50', '4.95');
INSERT INTO `hotsauce`.`inventory` (`ProductID`, `ProductDesc`, `QuantityInStock`, `UnitPrice`) VALUES ('3', 'Hot Sauce', '50', '4.95');
INSERT INTO `hotsauce`.`inventory` (`ProductID`, `ProductDesc`, `QuantityInStock`, `UnitPrice`) VALUES ('4', 'Extreme Sauce', '50', '6.95');
INSERT INTO `hotsauce`.`inventory` (`ProductID`, `ProductDesc`, `QuantityInStock`, `UnitPrice`) VALUES ('5', 'Fruity Sauce', '50', '6.95');
