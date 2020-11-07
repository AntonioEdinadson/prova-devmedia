CREATE DATABASE posts;

CREATE TABLE post (
  id int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  titulo varchar(255) NOT NULL,
  descricao text NOT NULL
)
