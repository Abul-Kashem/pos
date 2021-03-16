CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name text NOT NULL,
    user text NOT NULL,
    password text NOT NULL,
    profile text NOT NULL,
    photo text NOT NULL,
    status int(1) NOT NULL,
    lastLogin DATETIME NOT NULL,
    date  timestamp DEFAULT CURRENT_TIMESTAMP
);
