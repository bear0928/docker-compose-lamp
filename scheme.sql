Create database test;
Use test;
CREATE TABLE susers (
    userid int(10) unsigned NOT NULL auto_increment,
    username varchar(32) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY (userid)
);
INSERT INTO susers (username, email, password)
VALUES('user', 'test@user.com', '123');