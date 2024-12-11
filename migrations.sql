-- 1. Uztaisīt datubāzi
CREATE DATABASE blog_ipa23;

-- 2. Izmantot šo datu bāzi
USE blog_ipa23;

-- 3. Uztaisīt tabulu
CREATE TABLE posts (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	content VARCHAR(1000)
);

-- 4. Ievietot datus
INSERT INTO posts
(content)
VALUES
("Pirmais bloga ieraksts"),
("Otrais bloga ieraksts");

SELECT * FROM posts;

