# PinCodes
 First Read Readme file 
INSERT INTO states (title, country_id)
SELECT DISTINCT state_name, 1
FROM pincodes;

INSERT INTO districts (title, state_id, country_id, status)
SELECT pincodes.district, states.id, states.country_id, 1
FROM pincodes
JOIN states ON pincodes.state_name = states.title;

INSERT INTO zip_codes (title, district_id, status)
SELECT pincodes.office_name, districts.id, 1
FROM pincodes
JOIN districts ON pincodes.district = districts.title;
