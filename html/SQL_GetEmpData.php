<?php
//SQL Connect and generate JSON
$sql = "SELECT
  employeecode,
  erpNr,
  badgeNr,
  surname,
  initials,
  title,
  gender,
  idnumber,
  occupation,
  workType,
  status,
  employeeType,
  contractor,
  eligible,
  Site,
  operationType,
  location,
  [function],
  personnelArea,
  personnelSubarea,
  altSite,
  [Email Address] as EmailAddress,
  [Cell Number] as CellNumber,
  jobLevel,
  manager,
  managerEmployeeCode,
  managerEmail,
  managerCellNr,
  isManagerApprover,
  primaryCC,
  secondaryCC,
  thirdCC,
  fourthCC
From
  PPE.vPPESelect;";

// echo $sql . " <br> \n\r";;

$sqlargs = array();
require_once 'config/db_query.php';
$empDataRS =  sqlQuery($sql, $sqlargs);
