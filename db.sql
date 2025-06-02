CREATE DATABASE blog_db;

USE blog_db;

CREATE TABLE artikel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    isi TEXT NOT NULL,
    link TEXT,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

insert into artikel values
('Barcelona Ungguli Benfica 3-1 di Babak Pertama', 'Barcelona - Barcelona berjarak 45 menit dari kelolosan ke perempatfinal. Barca memimpin Benfica 2-1 di babak pertama untuk unggul agregat 4-1...', 'https://sport.detik.com/sepakbola/uefa/d-7818779/barcelona-ungguli-benfica-3-1-di-babak-pertama'),
('Liverpool Vs PSG: Menang Adu Penalti, Les Parisiens ke Perempatfinal!', 'Liverpool - Paris Saint-Germain lanjut ke perempatfinal Liga Champions. Les Parisiens menang adu penalti 4-1 atas Liverpool usai imbang agregat 1-1...', 'https://sport.detik.com/sepakbola/uefa/d-7818837/liverpool-vs-psg-menang-adu-penalti-les-parisiens-ke-perempatfinal'),
('Leverkusen Vs Bayern: Die Roten Mulus ke 8 Besar Usai Menang 2-0', 'Leverkusen - Bayern Munich melaju mulus ke perempatfinal usai menang 2-0 di markas Bayer Leverkusen. Die Roten unggul secara agregat 5-0...', 'https://sport.detik.com/sepakbola/uefa/d-7818825/leverkusen-vs-bayern-die-roten-mulus-ke-8-besar-usai-menang-2-0');