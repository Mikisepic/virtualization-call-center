CREATE TABLE Employees (
 FNAME VARCHAR (30),
 LNAME VARCHAR (30),
 SSN     CHAR (11),
 BDATE   DATE,	
 ADDRESS VARCHAR (50),
 GENDER  CHAR (1),
 SALARY DECIMAL (10,2),
 DNO INTEGER
);

INSERT INTO Employees VALUES 
('Laimonas', 'Petrauskas', '12333333333', '1985-12-10', 'Vilnius', 'M', 15000,  12);
 
INSERT INTO Employees VALUES 
('Kristina', 'Vainytė', '45666666666', '1995-10-05', 'Senamiestis', 'F', 18000, 11);
 
INSERT INTO Employees VALUES 
('Karolina', 'Kilimienė', '78999999999', '2000-08-06', 'Naujamiestis', 'F', 14000, 11);
 
INSERT INTO Employees VALUES 
('Ugnius',  'Baranauskas', '11111111111', '1990-09-07', 'Lazdynai', 'M', 30000, 12);
 
INSERT INTO Employees VALUES 
('Jonas',   'Brazys', '22222222222', '1995-04-02', 'Naujininkai', 'M', 20000, 10);
 
INSERT INTO Employees VALUES 
('Paulina',  'Drąsutė', '33333333333', '1970-01-08', 'Centras', 'F', 35000,  10);
 
INSERT INTO Employees VALUES 
('Petras',  'Nerimantas', '98777777777', '1993-05-30', 'Lazdynai', 'M', 23000,  12);
 
INSERT INTO Employees VALUES 
('Nojus',  'Tadarauskas', '65444444444', '1983-02-27', 'Naujamiestis', 'M', 32000, 11);
 
INSERT INTO Employees VALUES 
('Domas',   'Jonauskas',  '32111111111', '1992-11-16', 'Senamiestis', 'M', 26000,  12);

INSERT INTO Employees VALUES 
('Søren',   'Gustavson',  '32111111155', '1994-06-06', 'Senamiestis', 'M', 28000,  12);

INSERT INTO Employees VALUES 
('Stinne',   'Øby',  '42111111156', '1999-10-16', 'Perkūnkiemis', 'F', 28500,  12);

SELECT COUNT (*) FROM Employees;

CREATE TABLE Departments (
 DNAME VARCHAR (20),
 DNUMBER INTEGER,
 MGRSSN CHAR (11),
 MGRSTARTDATE DATE
);

INSERT INTO Departments VALUES
('Client Support', 10, '33333333333', '1994-10-01');
 
INSERT INTO Departments VALUES
('International Relations', 11, '65444444444', '1995-05-01');
 
INSERT INTO Departments VALUES
('Research and Development', 12, '11111111111', '1990-06-15');


CREATE TABLE Projects(
 PNAME VARCHAR (30),
 PNUMBER NUMERIC (3,0),
 PLOCATION VARCHAR (20),
 DNUM INTEGER
);

INSERT INTO Projects VALUES
('MobApps', 1, 'Vilnius', 10);
 
INSERT INTO Projects VALUES
('OSINT', 2, 'Vilnius',  12);
 
INSERT INTO Projects VALUES
('MedCentre', 3, 'Kaunas',       11);
 
INSERT INTO Projects VALUES
('PalmTop', 4, 'Klaipėda',      10);
 
INSERT INTO Projects VALUES
('MobileOffice', 5, 'Kaunas', 11);


CREATE TABLE Locations(
 DNBR INTEGER,
 DLOCATION VARCHAR (20)
);

INSERT INTO Locations VALUES
(10, 'Klaipėda');
INSERT INTO Locations VALUES
(10, 'Vilnius');
INSERT INTO Locations VALUES
(11, 'Kaunas');
INSERT INTO Locations VALUES
(12, 'Vilnius');
INSERT INTO Locations VALUES
(12, 'Klaipėda');



CREATE TABLE Allocations(
 ESSN CHAR (11),
 PNO NUMERIC(3,0),
 HOURS NUMERIC (3,0)
);



INSERT INTO Allocations VALUES
('12333333333',  3,    27),
('45666666666',  3,    12),
('78999999999',  4,    35),
('11111111111',  1,    15),
('11111111111',  2,    5),
('22222222222',  5,    30),
('33333333333',  3,    20),
('33333333333',  5,    20),
('98777777777',  4,    25),
('65444444444',  2,    30),
('32111111111',  1,    15),
('32111111111',  2,    10),
('32111111155', 2, 35),
('42111111156', 2, 40)
;
