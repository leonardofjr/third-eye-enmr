<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Elegant_Appointment_Booking
 * @subpackage Elegant_Appointment_Booking/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<h2>Patients</h2>
<div class="col-md-4">
    <h3>All Patients</h3>
</div>
<div class="col-md-8">
    <h3>Add a new patient</h3>
    <form>
    <h4>Patient Information</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label  for="patient-first-name">First Name</label>
                    <input class="form-control" name="patient-first-name" id="patient-first-name" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label  for="patient-last-name">Last Name</label>
                    <input class="form-control" name="patient-last-name" id="patient-last-name" type="text">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label  for="patient-dob">Date of birth - Month</label>
                    <?php include 'dob-month-dropdown.php';?>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <label  for="patient-dob">Day</label>
                    <?php include 'dob-day-dropdown.php';?>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <label  for="patient-dob">Year</label>
                    <?php include 'dob-year-dropdown.php';?>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <label  for="patient-gender">Gender</label>
                        <select class="form-control" name="" id="">
                            <option> - Gender - </option>
                            <option value="">----</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label  for="patient-street-address">Street Address</label>
                    <input class="form-control" name="patient-street-address" id="patient-street-address" type="text">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label  for="patient-province">Province</label>
                    <?php include 'provinces-dropdown.php';?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label  for="patient-postal-code">Postal Code</label>
                    <input class="form-control" name="patient-postal-code" id="patient-postal-code" type="text">
                </div>
            </div>
           
            <div class="col-md-2">
                <div class="form-group">
                    <label  for="patient-phone">Phone</label>
                    <input class="form-control" name="patient-phone" id="patient-phone" type="text">
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label  for="patient-email">Email</label>
                    <input class="form-control" name="patient-email" id="patient-email" type="text">
                </div>
            </div>
        </div>

        <h4>Emergency Contact Information</h4>
        <div class="row">
                    <div class="col-md-2">
                <div class="form-group">
                    <label  for="emergency-contact-first-name">First Name</label>
                    <input class="form-control" name="emergency-contact-first-name" id="emergency-contact-first-name" type="text">
                </div>
            </div>

           
            <div class="col-md-2">
                <div class="form-group">
                    <label  for="emergency-contact-last-name">Last Name</label>
                    <input class="form-control" name="emergency-contact-last-name" id="emergency-contact-last-name" type="text">
                </div>
            </div>
           
            <div class="col-md-2">
                <div class="form-group">
                    <label  for="emergency-contact-phone">Phone</label>
                    <input class="form-control" name="emergency-contact-phone" id="emergency-contact-phone" type="text">
                </div>
            </div>
        </div>

        <h4>Physician Information</h4>
        <div class="row">
                    <div class="col-md-2">
                <div class="form-group">
                    <label  for="physician-first-name">First Name</label>
                    <input class="form-control" name="physician-first-name" id="physician-first-name" type="text">
                </div>
            </div>

           
            <div class="col-md-2">
                <div class="form-group">
                    <label  for="physician-last-name">Last Name</label>
                    <input class="form-control" name="physician-last-name" id="physician-last-name" type="text">
                </div>
            </div>
           
            <div class="col-md-2">
                <div class="form-group">
                    <label  for="physician-phone">Phone</label>
                    <input class="form-control" name="physician-phone" id="physician-phone" type="text">
                </div>
            </div>
        </div>


        <h4>Medical History</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label  for="patient-email">Current Medication</label>
                    <input class="form-control" name="patient-email" id="patient-email" type="text">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label  for="chief-complaint">Chief Complaint</label>
                    <textarea class="form-control" name="chief-complaint" id="chief-complaint" type="text"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label  for="copy-of-hardcopy-intake-form">Attach copy of hardcopy</label>
                    <input class="form-control" name="copy-of-hardcopy-intake-form" id="copy-of-hardcopy-intake-form" type="file">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input class="btn-primary" value="Add Patient" type="submit">
                </div>
            </div>
        </div>


    </form>
</div>