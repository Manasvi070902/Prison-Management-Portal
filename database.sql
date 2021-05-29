CREATE TABLE Jailor(
	Jailor_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    Jailor_uname tinytext not null,
    Jailor_pwd longtext not null,
    First_name varchar(25) not null,
    Last_name varchar(25) not null
);

CREATE TABLE Jailor_phone(
	Jailor_phone varchar(10) not null,
    Jailor_id int(11) not null
);


INSERT INTO Jailor(Jailor_uname,Jailor_pwd,First_name,Last_name) VALUES ('jailor1','jailor1','Steve','Quay');
INSERT INTO Section(Section_id,Section_name,Jailor_id) VALUES ('111','A',1);
INSERT INTO Jailor_phone(Jailor_phone,Jailor_id) VALUES(8876171369,1);

INSERT INTO Jailor(Jailor_uname,Jailor_pwd,First_name,Last_name) VALUES ('jailor2','jailor2','Marcus','Quay');
INSERT INTO Section(Section_id,Section_name,Jailor_id) VALUES ('222','B',2);
INSERT INTO Jailor_phone(Jailor_phone,Jailor_id) VALUES(6559892327,2);

INSERT INTO Jailor(Jailor_uname,Jailor_pwd,First_name,Last_name) VALUES ('jailor3','jailor3','Jim','Smith');
INSERT INTO Section(Section_id,Section_name,Jailor_id) VALUES ('333','C',3);
INSERT INTO Jailor_phone(Jailor_phone,Jailor_id) VALUES(3893906914,3);

INSERT INTO Jailor(Jailor_uname,Jailor_pwd,First_name,Last_name) VALUES ('jailor4','jailor4','Cory','Roy');
INSERT INTO Section(Section_id,Section_name,Jailor_id) VALUES ('444','D',4);
INSERT INTO Jailor_phone(Jailor_phone,Jailor_id) VALUES(7473154442,4);

INSERT INTO Jailor(Jailor_uname,Jailor_pwd,First_name,Last_name) VALUES ('jailor5','jailor5','Rob','Cole');
INSERT INTO Section(Section_id,Section_name,Jailor_id) VALUES ('555','E',5);
INSERT INTO Jailor_phone(Jailor_phone,Jailor_id) VALUES(8251538586,5);
