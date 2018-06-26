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

<h2>Services</h2>
<div class="col-md-4">
    <h3>All Services</h3>
</div>
<div class="col-md-8">
    <h3>Add a new service</h3>
    <form>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label  for="service-title">Title</label>
                    <input class="form-control" name="service-title" id="service-title" type="text">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control" for="service-duration">Duration</label>
                    <select class="form-control" name="service-duration" id="service-duration">
                        <option value="900" selected="selected"> 15 min</option>
                        <option value="1800"> 30 min</option>
                        <option value="2700"> 45 min</option>
                        <option value="3600"> 1 hr</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control" for="service-duration">Padding Time (Before)</label>
                    <select class="form-control" name="service-padding-time-before-duration" id="service-padding-time-before-duration">
                        <option value="0" selected="selected">OFF</option>
                        <option value="900"> 15 min</option>
                        <option value="1800"> 30 min</option>
                        <option value="2700"> 45 min</option>
                        <option value="3600"> 1 hr</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control" for="service-duration">Padding Time (After)</label>
                    <select class="form-control" name="service-padding-time-after-duration" id="service-padding-time-after-duration">
                        <option value="0" selected="selected">OFF</option>
                        <option value="900"> 15 min</option>
                        <option value="1800"> 30 min</option>
                        <option value="2700"> 45 min</option>
                        <option value="3600"> 1 hr</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <button class="btn-primary">Add</button>
                </div>
            </div>
        </div>
    </form>
</div>