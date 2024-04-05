# PinCodes
 First Read Readme file 
INSERT INTO states (title, country_id)
SELECT DISTINCT state_name, 1
FROM pincodes;

INSERT INTO districts (title, state_id, country_id, status)
SELECT DISTINCT(pincodes.district), states.id, states.country_id, 1
FROM pincodes
JOIN states ON pincodes.state_name = states.title;

INSERT INTO zip_codes (title,zip_code, district_id, status)
SELECT pincode.office_name,pincode.pincode, districts.id, 1
FROM pincode
JOIN districts ON pincode.district = districts.title;
