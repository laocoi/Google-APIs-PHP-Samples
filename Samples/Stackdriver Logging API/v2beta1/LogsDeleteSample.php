﻿<?php
// Copyright 2017 DAIMTO ([Linda Lawton](https://twitter.com/LindaLawtonDK)) :  [www.daimto.com](http://www.daimto.com/)
//
// Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
// the License. You may obtain a copy of the License at
//
// http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
// an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
// specific language governing permissions and limitations under the License.
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by DAIMTO-Google-apis-Sample-generator 1.0.0
//     Template File Name:  methodTemplate.tt
//     Build date: 2017-09-23
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the Logging v2beta1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Writes log entries and manages your Stackdriver Logging configuration.
// API Documentation Link https://cloud.google.com/logging/docs/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/Logging/v2beta1/rest
//
//------------------------------------------------------------------------------
// Installation
//
// The preferred method is via https://getcomposer.org. Follow the installation instructions https://getcomposer.org/doc/00-intro.md 
// if you do not already have composer installed.
//
// Once composer is installed, execute the following command in your project root to install this library:
//
// composer require google/apiclient:^2.0
//
//------------------------------------------------------------------------------  
// Load the Google API PHP Client Library.
require_once __DIR__ . '/vendor/autoload.php';
/***************************************************
* Include this line for service account authencation.  Note: Not all APIs support service accounts.  
//require_once __DIR__ . '/ServiceAccount.php';     
* Include the following for Oauth2 authencation.
//require_once __DIR__ . '/Oauth2Authentication.php';
//$_SESSION['mainScript'] = basename($_SERVER['PHP_SELF']);   // Oauth2callback.php will return here.
****************************************************/

session_start();

print_r(delete($service, $logName));

/**
* Deletes all the log entries in a log. The log reappears if it receives new entries. Log entries written shortly before the delete operation might not be deleted.
* @service Authenticated Analyticsreporting service.

* @logName Required. The resource name of the log to delete:
"projects/[PROJECT_ID]/logs/[LOG_ID]"
"organizations/[ORGANIZATION_ID]/logs/[LOG_ID]"
"billingAccounts/[BILLING_ACCOUNT_ID]/logs/[LOG_ID]"
"folders/[FOLDER_ID]/logs/[LOG_ID]"
[LOG_ID] must be URL-encoded. For example, "projects/my-project-id/logs/syslog", "organizations/1234567890/logs/cloudresourcemanager.googleapis.com%2Factivity". For more information about log names, see LogEntry.
* @return Empty</returns>
*/
function delete($service, $logName)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if (logName == null)
			throw new Exception("logName is required.");
		// Make the request and return the results.
		return $service->delete($logName);
	}
	catch (Exception $ex)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
