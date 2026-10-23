create table buku (
    id_buku INT(11) PRIMARY KEY AUTO_INCREMENT,
    judul_buku VARCHAR(100),
    penerbit_buku VARCHAR(100),
    harga_buku DOUBLE,
    id_genre INT (11)
);

create table genre(
    id_genre INT(11) PRIMARY KEY AUTO_INCREMENT,
    genre_buku VARCHAR(50)
);

