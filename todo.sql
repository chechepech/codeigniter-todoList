CREATE DATABASE `tasksdb`;
USE `tasksdb`;
CREATE TABLE `ci_sessions` (
`session_id` varchar(40) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
`ip_address` varchar(16) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
`user_agent` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
`last_activity` int(10) unsigned NOT NULL DEFAULT '0',
`user_data` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `tasks` (
`task_id` int(11) NOT NULL AUTO_INCREMENT,
`task_desc` varchar(255) NOT NULL,
`task_due_date` datetime DEFAULT NULL,
`task_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`task_status` enum('done','todo') NOT NULL,
PRIMARY KEY (`task_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;