CREATE TABLE Company
(
    Com_ID SERIAL PRIMARY KEY,
    Name VARCHAR(25) NOT NULL,
    Phone INT NOT NULL
);

INSERT INTO Company VALUES (DEFAULT, 'Vilniaus Universitetas','863333333');
INSERT INTO Company VALUES (DEFAULT, 'IKI','864444444');
INSERT INTO Company VALUES (DEFAULT, 'LIDL','865555555');
INSERT INTO Company VALUES (DEFAULT, 'TOPO Centras','866666666');

CREATE TABLE ContactRequest
(
    Req_ID SERIAL PRIMARY KEY,
    Name VARCHAR(30) NOT NULL,
    Phone INT NOT NULL,
    Email VARCHAR(40) NOT NULL,
    Message VARCHAR(500)

);

INSERT INTO ContactRequest VALUES (DEFAULT, 'Monique Erans','867878787','monique123@yahoo.com', 'Hello, I cant seem to find you contacts, could you help?');
INSERT INTO ContactRequest VALUES (DEFAULT, 'Roland Reihns','864545454','roland.r@gmail.com', 'I have a question I want to discuss with your manager. Could you contact me via phone?');