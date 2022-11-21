CREATE TABLE `tbluser` (
    `ID` int(10) NOT NULL,
    `FullName` varchar(200) DEFAULT NULL,
    `MobileNumber` bigint(10) DEFAULT NULL,
    `Email` varchar(200) DEFAULT NULL,
    `Password` varchar(200) DEFAULT NULL,
    `RegDate` timestamp NULL DEFAULT current_timestamp()
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
