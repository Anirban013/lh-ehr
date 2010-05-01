CREATE TABLE IF NOT EXISTS `form_Chiro_personal_injury_form` (
id bigint(20) NOT NULL auto_increment,
date datetime default NULL,
pid bigint(20) default NULL,
user varchar(255) default NULL,
groupname varchar(255) default NULL,
authorized tinyint(4) default NULL,
activity tinyint(4) default NULL,
_patient_name TEXT,
_middle_name TEXT,
_last_name TEXT,
_address_direction TEXT,
_city TEXT,
_state TEXT,
_zip TEXT,
_phone_number_home TEXT,
_phone_number_work TEXT,
_sex TEXT,
_date_of_birth TEXT,
_social_security TEXT,
_nature_of_accident TEXT,
_other TEXT,
_date_of_accident TEXT,
_insurance_name TEXT,
_phone_no TEXT,
_address_of_insurance_company TEXT,
_claim_number TEXT,
_policy_number TEXT,
_attorney_name TEXT,
_attorney_phone_number TEXT,
_attorney_address TEXT,
_health_insurance TEXT,
_health_insurance_phone_number TEXT,
_address_of_health_insurance TEXT,
_subscriber_id_number TEXT,
_group_number TEXT,

PRIMARY KEY (id)
) TYPE=MyISAM;
