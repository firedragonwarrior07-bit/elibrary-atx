-- 1. Cipta pangkalan data untuk sistem
CREATE DATABASE elibrary_db;
USE elibrary_db;

-- 2. Cipta jadual untuk Pendaftaran Pengguna
CREATE TABLE pengguna (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    matrik VARCHAR(20) NOT NULL UNIQUE,
    emel VARCHAR(50) NOT NULL,
    telefon VARCHAR(20) NOT NULL
);

-- 3. Masukkan SATU (1) rekod pengguna sebagai contoh
INSERT INTO pengguna (nama, matrik, emel, telefon) 
VALUES ('Ahmad Bin Ali', 'ATX12345', 'ahmad.ali@atx.edu.my', '012-3456789');

-- 4. Cipta jadual untuk Tempahan Bilik Bacaan
CREATE TABLE tempahan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    matrik VARCHAR(20) NOT NULL,
    tarikh DATE NOT NULL,
    masa_mula TIME NOT NULL,
    masa_tamat TIME NOT NULL,
    FOREIGN KEY (matrik) REFERENCES pengguna(matrik) ON DELETE CASCADE ON UPDATE CASCADE
);

-- 5. (Pilihan) Masukkan satu contoh tempahan untuk pengguna Ahmad Bin Ali
INSERT INTO tempahan (matrik, tarikh, masa_mula, masa_tamat)
VALUES ('ATX12345', '2026-04-20', '09:00:00', '11:00:00');