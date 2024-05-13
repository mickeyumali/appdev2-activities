--Creating a Database:
 CREATE DATABASE Company;

--selecting a Database:
 USE Company;

--Creating a Table:
 CREATE TABLE Employees (
    EmployeeID INT PRIMARY KEY,
    FirstName VARCHAR(20),
    LastName VARCHAR(20),
    Age INT,
    Department VARCHAR(50)
);

--Inserting Data into the Table:
 INSERT INTO Employees (EmployeeID, FirstName, LastName, Age, Department) VALUES
 (1, 'John', 'Michael', 30, 'Sales'),
 (2, 'Jayvee', 'Mendes', 25, 'HR'),
 (3, 'Mike', 'Jordan', 35, 'IT'),
 (4, 'Jethro', 'Cadang', 28, 'Finance'),
 (5, 'Mickey', 'Mouse', 40, 'Operations');


--Viewing Data:
 SELECT * FROM Employees;


--Updating Data:
 UPDATE Employees SET Department = 'Marketing' WHERE EmployeeID = 2;

--Deleting Data:
 DELETE FROM Employees WHERE EmployeeID = 3;

--Dropping the Table:
 DROP TABLE Employees;

