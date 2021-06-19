CREATE TABLE tb_category (
	cat_id tinyint (3) NOT NULL AUTO_INCREMENT,
	cat_name VARCHAR (10) NOT NULL,
	cat_text VARCHAR (100) NOT NULL,
	PRIMARY KEY (cat_id),
);

CREATE TABLE tb_post (
	post_id int (11) NOT NULL,
	post_date DATE NOT NULL,
	post_slug VARCHAR (25) NOT NULL,
	post_title VARCHAR (100) NOT NULL,
	post_text TEXT NOT NULL,
	cat_id tinyint (3) NOT NULL,
	PRIMARY KEY (post_id),
	FOREIGN KEY (cat_id) REFERENCES tb_category (cat_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_photos (
	photos_id int (11) NOT NULL,
	photos_date DATE NOT NULL,
	photos_title VARCHAR (100) NOT NULL,
	photos_text TEXT NOT NULL,
	post_id int (11) NOT NULL,
	PRIMARY KEY (photos_id),
	FOREIGN KEY (post_id) REFERENCES tb_post(post_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_album (
	album_id int (11) NOT NULL,
	album_name VARCHAR (100) NOT NULL,
	album_text VARCHAR (100) NOT NULL,
	photos_id int (11) NOT NULL,
	PRIMARY KEY (album_id),
	FOREIGN KEY (photo_id) REFERENCES tb_photos(photos_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE admin (
	admin_id INT (11) NOT NULL AUTO_INCREMENT,
	admin_name VARCHAR (50) NOT NULL,
	admin_password VARCHAR (256) NOT NULL,
	PRIMARY KEY (admin_id)
);