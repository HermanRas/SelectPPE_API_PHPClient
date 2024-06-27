<?php
//Import CURL Function
require_once('config/_CURL.php');

// Fetch SQL Data
require("SQL_GetEmpData.php"); //returns $empDataRS

//loop through each record in employee table build integration records
for ($i = 0; $i < count($empDataRS[0]); $i++) {
    //set current record
    $rec = $empDataRS[0][$i];

    //build integration record.
    $request['apiKey'] = "d371009e-1c3f-47cc-8a99-7915a4319ff3";
    $request['clientKey'] = "f7bb6e25-15a3-4a2a-bf67-a0b565c95a75";
    $request['echo'] = false;
    $request['data'][$i]['employeeCode'] = "$rec[employeeCode]";
    $request['data'][$i]['erpNr'] = "$rec[erpNr]";
    $request['data'][$i]['badgeNr'] = "$rec[badgeNr]";
    $request['data'][$i]['surname'] = "$rec[surname]";
    $request['data'][$i]['initials'] = "$rec[initials]";
    $request['data'][$i]['title'] = "$rec[title]";
    $request['data'][$i]['gender'] = "$rec[gender]";
    $request['data'][$i]['idNumber'] = "$rec[idNumber]";
    $request['data'][$i]['occupation'] = "$rec[occupation]";
    $request['data'][$i]['workType'] = "$rec[workType]";
    $request['data'][$i]['status'] = "$rec[status]";
    $request['data'][$i]['employeeType'] = "$rec[employeeType]";
    $request['data'][$i]['contractor'] = "$rec[contractor]";
    $request['data'][$i]['eligible'] = "$rec[eligible]";
    $request['data'][$i]['site'] = "$rec[site]";
    $request['data'][$i]['operationType'] = "$rec[operationType]";
    $request['data'][$i]['location'] = "$rec[location]";
    $request['data'][$i]['function'] = "$rec[function]";
    $request['data'][$i]['personnelArea'] = "$rec[personnelArea]";
    $request['data'][$i]['personnelSubarea'] = "$rec[personnelSubarea]";
    $request['data'][$i]['altSite'] = "$rec[altSite]";
    $request['data'][$i]['email'] = "$rec[email]";
    $request['data'][$i]['cellNr'] = "$rec[cellNr]";
    $request['data'][$i]['jobLevel'] = "$rec[jobLevel]";
    $request['data'][$i]['manager'] = "$rec[manager]";
    $request['data'][$i]['managerEmployeeCode'] = "$rec[managerEmployeeCode]";
    $request['data'][$i]['managerEmail'] = "$rec[managerEmail]";
    $request['data'][$i]['managerCellNr'] = "$rec[managerCellNr]";
    $request['data'][$i]['isManagerApprover'] = "$rec[isManagerApprover]";
    $request['data'][$i]['primaryCC'] = "$rec[primaryCC]";
    $request['data'][$i]['secondaryCC'] = "$rec[secondaryCC]";
    $request['data'][$i]['thirdCC'] = "$rec[thirdCC]";
    $request['data'][$i]['fourthCC'] = "$rec[fourthCC]";
}
//DEBUG
echo json_encode($request);
die;


$PostResult = curl('/api/Employee/EmployeeImportBulk', $HEAD_Data, $_POST);
var_dump($PostResult);
