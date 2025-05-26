CREATE TABLE admins (
  login varchar(15) NOT NULL DEFAULT '',
  pass varchar(60) NOT NULL DEFAULT '',

  PRIMARY KEY (login)
);
INSERT INTO admins (login, pass) VALUES ("admin", "$2y$10$zqy2wGJh9g2fOd2p/vthMeUg9025p5xlEW9tkczf17Xzf915g.zIC");

CREATE TABLE application (
  id_app int(10) unsigned NOT NULL AUTO_INCREMENT,
  name varchar(150) NOT NULL DEFAULT '',
  phone varchar(15) NOT NULL DEFAULT '',
  email varchar(100) NOT NULL DEFAULT '',
  dateBirth DATE NOT NULL,
  sex varchar(7) NOT NULL DEFAULT '',
  bio varchar(1000) NOT NULL DEFAULT '',
  
  PRIMARY KEY (id_app)
);

CREATE TABLE auth (
  id_app int(10) unsigned NOT NULL,
  login varchar(15) NOT NULL DEFAULT '',
  pass varchar(50) NOT NULL DEFAULT '',

  PRIMARY KEY (id_app)
);

CREATE TABLE langs (
  id_lang int(10) unsigned NOT NULL AUTO_INCREMENT,
  name varchar(150) NOT NULL DEFAULT '',
  
  PRIMARY KEY (id_lang)
);

CREATE TABLE connection (
  id_app int(10) unsigned NOT NULL,
  id_lang int(10) unsigned NOT NULL,
  
  PRIMARY KEY (id_app, id_lang),
  FOREIGN KEY (id_app) REFERENCES application (id_app),
  FOREIGN KEY (id_lang) REFERENCES langs (id_lang)
);

INSERT INTO langs (name) VALUES ("Pascal");
INSERT INTO langs (name) VALUES ("C");
INSERT INTO langs (name) VALUES ("C++");
INSERT INTO langs (name) VALUES ("JavaScript");
INSERT INTO langs (name) VALUES ("PHP");
INSERT INTO langs (name) VALUES ("Python");
INSERT INTO langs (name) VALUES ("Java");
INSERT INTO langs (name) VALUES ("Haskel");
INSERT INTO langs (name) VALUES ("Clojure");
INSERT INTO langs (name) VALUES ("Prolog");
INSERT INTO langs (name) VALUES ("Scala");
INSERT INTO langs (name) VALUES ("Go");