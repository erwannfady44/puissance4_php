create table partie (
    idPartie INT PRIMARY KEY,
    coups INT
);

create table joueur (
    idJoueur INT AUTO_INCREMENT PRIMARY KEY,
    idPartie INT,
    numeroJoueur INT,
    score INT,
    pseudo VARCHAR(255)
);

create table pions (
    idPions INT AUTO_INCREMENT PRIMARY KEY,
    idPartie INT,
    idJoueur INT
);
