SELECT * FROM provinces;
SELECT * FROM regencies;
SELECT * FROM districts;
SELECT * FROM villages;

ALTER TABLE provinces RENAME TO provinsi;
ALTER TABLE regencies RENAME TO kabupaten_kota;
ALTER TABLE districts RENAME TO kecamatan;
ALTER TABLE villages RENAME TO desa;

SELECT kecamatan.id as id_desa, desa.name as desa, provinsi.name as provinsi
FROM desa
JOIN kecamatan ON desa.district_id = kecamatan.id
JOIN kabupaten_kota ON kecamatan.regency_id = kabupaten_kota.id
JOIN provinsi ON kabupaten_kota.province_id = provinsi.id
WHERE kecamatan.id = '1101010'
LIMIT 8

SELECT kabupaten_kota.id as id_kecamatan,  kecamatan.name as kecamatan, provinsi.name as provinsi
FROM desa
JOIN kecamatan ON desa.district_id = kecamatan.id
JOIN kabupaten_kota ON kecamatan.regency_id = kabupaten_kota.id
JOIN provinsi ON kabupaten_kota.province_id = provinsi.id
WHERE kecamatan.id = '1101010'
LIMIT 13


SELECT kabupaten_kota.id as id_kabupaten_kota, kabupaten_kota.name as kabupaten_kota, provinsi.name as provinsi
FROM desa
JOIN kecamatan ON desa.district_id = kecamatan.id
JOIN kabupaten_kota ON kecamatan.regency_id = kabupaten_kota.id
JOIN provinsi ON kabupaten_kota.province_id = provinsi.id   
WHERE kabupaten_kota.id = '1101'
LIMIT 18