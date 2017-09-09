CREATE TABLE omg_tbl(num_of_address INT, time_stamp TIMESTAMP );
CREATE TABLE qtum_tbl(num_of_address INT, time_stamp TIMESTAMP );
CREATE TABLE golem_tbl(num_of_address INT, time_stamp TIMESTAMP );
SELECT * FROM stx_tbl WHERE DATE(time_stamp) >= CURDATE();