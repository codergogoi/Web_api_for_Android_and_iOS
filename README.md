# Web_api_for_Android_and_iOS
Web service example for mobile apps using php

required Specification :

Basic PHP and SQL knowledge.
MAMP or XAMP or Wamp application for run in localhost

Once any of the above application installed.

Just Create Database  " my_apps"

CREATE TABLE IF NOT EXISTS `app_user` (
  `sl` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;


--
-- Indexes for table `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for table `app_user`
--
ALTER TABLE `app_user`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;
  
Create a Database User named : demox and password demox123 and grant newly created "my_apps" database access on it.

Place the API files inside the WAMP/XAMP/MAMP httpdocs folder and run it.

Thank you
