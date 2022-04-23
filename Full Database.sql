
--
-- Table structure for table `shoutbox`
--

CREATE TABLE IF NOT EXISTS `shoutbox` (
  `msgid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `message` text DEFAULT NULL,
  PRIMARY KEY (`msgid`)
) ENGINE=MyISAM;
