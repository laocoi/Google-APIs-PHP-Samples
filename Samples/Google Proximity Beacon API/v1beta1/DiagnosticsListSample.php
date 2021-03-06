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
//     Build date: 2017-10-08
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the proximitybeacon v1beta1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Registers, manages, indexes, and searches beacons.
// API Documentation Link https://developers.google.com/beacons/proximity/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/proximitybeacon/v1beta1/rest
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
session_start();

/***************************************************
* Include this line for service account authencation.  Note: Not all APIs support service accounts.  
//require_once __DIR__ . '/ServiceAccount.php';     
* Include the following four lines Oauth2 authencation.
* require_once __DIR__ . '/Oauth2Authentication.php';
* $_SESSION['mainScript'] = basename($_SERVER['PHP_SELF']);   // Oauth2callback.php will return here.
* $client = getGoogleClient();
* $service = new Google_Service_Proximitybeacon($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'pageToken' => '[YourValue]',  // Requests results that occur after the `page_token`, obtained from theresponse to a previous request. Optional.
            
  //'alertFilter' => '[YourValue]',  // Requests only beacons that have the given alert. For example, to findbeacons that have low batteries use `alert_filter=LOW_BATTERY`.
            
  //'pageSize' => '[YourValue]',  // Specifies the maximum number of results to return. Defaults to10. Maximum 1000. Optional.
            
  //'projectId' => '[YourValue]',  // Requests only diagnostic records for the given project id. If not set,then the project making the request will be used for looking updiagnostic records. Optional.
  'fields' => '*'
);
// Single Request.
$results = diagnosticsListExample($service, $beaconName, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $beaconName, $optParams);	
} while($results->getNextPageToken());  

/**
* List the diagnostics for a single beacon. You can also list diagnostics forall the beacons owned by your Google Developers Console project by usingthe beacon name `beacons/-`.Authenticate using an [OAuth access token](https://developers.google.com/identity/protocols/OAuth2)from a signed-in user with **viewer**, **Is owner** or **Can edit**permissions in the Google Developers Console project.
* @service Authenticated Proximitybeacon service.
* @optParams Optional paramaters are not required by a request.
* @beaconName Beacon that the diagnostics are for.
* @return ListDiagnosticsResponse
*/
function diagnosticsListExample($service, $beaconName, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (beaconName == null)
			throw new Exception("beaconName is required.");
		// Make the request and return the results.
		return $service->diagnostics->ListDiagnostics($beaconName, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
