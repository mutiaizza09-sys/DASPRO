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

select b.id_buku, b.judul_buku, b.penerbit_buku, g.genre_buku, b.harga_buku from buku b, genre g where b.id_genre =  g.id_genre;

insert into buku VALUES
(null, "Laskar Pelangi", "Gramedia", 45000, 3),
(null, "Laskar Matahari", "Gramedia", 30000, 2),
(null, "Laskar Bulan", "Gramedia", 35000, 1),
(null, "RPL Coding Java", "Gramedia", 50000, 2),
(null, "Membuat Website", "Gramedia", 35000, 4);

insert into genre VALUES 
(null, "Komik"),
(null, "Horor"),
(null, "Pendidikan"),
(null, "Romance"),
(null, "Komedi");
