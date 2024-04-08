# PinCodes
 First Read Readme file 
 
INSERT INTO states (title, country_id)
SELECT DISTINCT state_name, 1
FROM pincode;

INSERT INTO districts (title, state_id, country_id, status)
SELECT DISTINCT(pincode.district), states.id, states.country_id, 1
FROM pincode
JOIN states ON pincode.state_name = states.title;

INSERT INTO zip_codes (zip_code, district_id, status)
SELECT DISTINCT(pincode.pincode), districts.id, 1
FROM pincode
JOIN districts ON pincode.district = districts.title;

INSERT INTO localities (title, zip_code_id, status, created_at, updated_at)
SELECT pincode.office_name AS title,
       zip_codes.id AS zip_code_id,
       1 AS status,
       NOW() AS created_at,
       NOW() AS updated_at
FROM pincode
JOIN zip_codes ON pincode.pincode = zip_codes.zip_code;
