<?php
//SQL Connect and generate JSON
$sql = "SELECT [Staff ID]
,[Full Names]
,[First Name]
,[Last Name]
,[Occupation]
,[Section]
,[Job Grade]
,[Location]
,[Budget Point]
,[Department]
,[Surface/Undergrounnd]
,[Report to]
,[Position Start Date]
,[Racial Group]
,[Gender]
,[BirthDate]
,[Mobile number]
,[Alternative number]
,[Passport or ID]
,[Contract Condition]
,[CompanyRuleDisplay]
,[EmailAddress]
,[BPL_Tag]

FROM [IntegrationViews].[dbo].[vPPESelect]
ORDER BY [Staff ID] DESC;";

// echo $sql . " <br> \n\r";;

$sqlargs = array();
require_once 'config/db_query.php';
$empDataRS =  sqlQuery($sql, $sqlargs);
