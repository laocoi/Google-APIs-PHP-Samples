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
// Unofficial sample for the classroom v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Manages classes, rosters, and invitations in Google Classroom.
// API Documentation Link https://developers.google.com/classroom/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/Classroom/v1/rest
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

print_r(modifyAttachments($service, $courseId, $courseWorkId, $id));

/**
* Modifies attachments of student submission.Attachments may only be added to student submissions belonging to coursework objects with a `workType` of `ASSIGNMENT`.This request must be made by the Developer Console project of the[OAuth client ID](https://support.google.com/cloud/answer/6158849) used tocreate the corresponding course work item.This method returns the following error codes:* `PERMISSION_DENIED` if the requesting user is not permitted to access therequested course or course work, if the user is not permitted to modifyattachments on the requested student submission, or foraccess errors.* `INVALID_ARGUMENT` if the request is malformed.* `NOT_FOUND` if the requested course, course work, or student submissiondoes not exist.
* @service Authenticated Analyticsreporting service.

* @courseWorkId Identifier of the course work.
* @courseId Identifier of the course.
This identifier can be either the Classroom-assigned identifier or an
alias.
* @id Identifier of the student submission.
* @return StudentSubmission</returns>
*/
function modifyAttachments($service, $courseId, $courseWorkId, $id)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if (courseWorkId == null)
			throw new Exception("courseWorkId is required.");
		if (courseId == null)
			throw new Exception("courseId is required.");
		if (id == null)
			throw new Exception("id is required.");
		// Make the request and return the results.
		return $service->modifyAttachments($courseId, $courseWorkId, $id);
	}
	catch (Exception $ex)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
