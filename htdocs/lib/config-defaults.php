<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2009 Catalyst IT Ltd and others; see:
 *                         http://wiki.mahara.org/Contributors
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage core
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2009 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

//
// CONFIGURATION DEFAULTS
//
// Do Not Edit This File!
//
// If you see a setting in here you'd like to change, copy it to your 
// config.php and change it there.
//
// This file sets defaults that are useful for most people.
//

$cfg = new StdClass;

// directorypermissions - what permissions to use for files and directories in 
// dataroot. The default allows only the web server user to read the data. If 
// you're on shared hosting and might want to download the contents of your 
// dataroot later (e.g. for backup purposes), set this to 0777. Otherwise, 
// leave it as is!
//$cfg->directorypermissions = 0700;

// insecuredataroot - whether to enforce checking that files being served have 
// come from dataroot. You would only want to turn this on if you were running 
// more than one Mahara against the same dataroot. If you are doing that, make 
// sure you create separate dataroots for each installation, but symlink the 
// artefact directory from all of them to one of them, and turn on 
// 'insecuredataroot' on all the ones you created symlinks for.
//
// If you don't know what you're doing/didn't understand the paragraph above, 
// then leave this setting alone!
//$cfg->insecuredataroot = false;

// system mail address. emails out come from this address.
// if not specified, will default to noreply@ automatically detected host.
// if that doesn't work or you want something else, then specify it here.
// $cfg->noreplyaddress = 'noreply@myhost.com';

// Logging configuration
// For each log level, you can specify where the messages are displayed.
//
// LOG_TARGET_SCREEN makes the error messages go to the screen - useful
// when debugging but not on a live site!
// LOG_TARGET_ADMIN sends error messages to the screen but only when
// browsing in the admin section
// LOG_TARGET_ERRORLOG makes the error messages go to the log as specified
// by the apache ErrorLog directive. It's probably useful to have this on
// for all log levels.
// LOG_TARGET_FILE allows you to specify a file that messages will be logged
// to. It's best to pick a path in dataroot, but note that logfiles tend to get
// very large over time - so it's advisable to implement some kind of logrotate
// if you want to leave this on all the time. The other option is to just turn
// this on when you are getting some kind of error or want to see the logging,
// and know that you're not going to let the logfile get large.
//
// You can combine the targets with bitwise operations,
// e.g. LOG_TARGET_SCREEN | LOG_TARGET_ERRORLOG
//
// This configuration is suitable for people running Mahara for the first
// time. You will immediately see environment errors, and so can correct
// them. You will be able to see other debugging information in your error
// logs. Once your site is up and running you might want to remove the
// environment level logging completely, and just log everything else to
// the error log.
$cfg->log_dbg_targets     = LOG_TARGET_ERRORLOG;
$cfg->log_info_targets    = LOG_TARGET_ERRORLOG;
$cfg->log_warn_targets    = LOG_TARGET_ERRORLOG;
$cfg->log_environ_targets = LOG_TARGET_SCREEN | LOG_TARGET_ERRORLOG;
// This configuration is suitable for developers. You will see all errors
// and they will also be in the logs.
//$cfg->log_dbg_targets     = LOG_TARGET_SCREEN | LOG_TARGET_ERRORLOG;
//$cfg->log_info_targets    = LOG_TARGET_SCREEN | LOG_TARGET_ERRORLOG;
//$cfg->log_warn_targets    = LOG_TARGET_SCREEN | LOG_TARGET_ERRORLOG;
//$cfg->log_environ_targets = LOG_TARGET_SCREEN | LOG_TARGET_ERRORLOG;

// If you use LOG_TARGET_FILE, this is the file that errors will be logged to.
// It's best to pick a path under dataroot, as we know we can write there.
$cfg->log_file = $CFG->dataroot . '/error.log';

// The log levels that will generate backtraces. Useful for development,
// but probably only warnings are useful on a live site.
$cfg->log_backtrace_levels = LOG_LEVEL_WARN | LOG_LEVEL_ENVIRON;

// Developer mode
// When set, the following things (among others) will happen:
//
// * 'debug.js' will be included on each page. You can edit this file to add 
//   debugging javascript at your discretion
// * 'debug.css' will be included on each page. You can edit this file to add 
//   debugging CSS at your discretion
// * the unpacked version of MochiKit will be used
//
// These options are a performance hit otherwise, enable when you are 
// developing for Mahara
$cfg->developermode = false;
// $cfg->developermode = DEVMODE_DEBUGJS | DEVMODE_DEBUGCSS | DEVMODE_UNPACKEDJS;

// Whether to send e-mail. If set to false, Mahara will not send any e-mail at 
// all. This is useful for when setting up development versions of Mahara where 
// you don't want to accidentally send email to users from this particular 
// Mahara installation.
//
// You can use sendallemailto to have all e-mails from this instance of Mahara 
// sent to one particular address instead of where they're aimed for. Leave 
// sendemail = true if you want to use this setting.
$cfg->sendemail = true;
// $cfg->sendallemailto = 'you@example.com';
//
// Log basic details of emails sent out by Mahara.  This will get big.
// $cfg->emaillog = $cfg->dataroot . '/log/email.log';

// capture performance information and print it
// $cfg->perftofoot = true; // needs a call to mahara_performance_info (smarty callback) - see default theme's footer.tpl
// $cfg->perftolog = true;
// if neither are set, performance info wont be captured.

// mail handling
// if you want mahara to use smtp servers to send mail, enter one or more here
// blank means mahara will use the default PHP method.
// $cfg->smtphosts = 'mail.a.com;mail.b.com';
// If you have specified an smtp server above, and the server requires authentication, 
// enter them here
// $cfg->smtpuser = '';
// $cfg->smtppass = '';

// Variable Envelope Return Path Handling
// If you want mahara to keep track of email addresses which generate a
// bounce, set bounces_handle to true.
// If set to true, $cfg->bouncedomain *must* be set.
$cfg->bounces_handle  = false;
// Rather than disable an email address on the first bounce message,
// require bounces_min bounces.
$cfg->bounces_min     = 5;
// Require at least (bounces_ratio*100)% of sent mail to be bounced back
// before disabling mail for that user.
// e.g. If using the default bounces_ratio of 0.20 and 20 mails are sent to
// a user, at least 4 must be returned before email is disabled.
$cfg->bounces_ratio   = 0.20;
// Identity of the Mahara instance
// This prefix must be four characters.
// If you have several Mahara, Moodle, or other VERP processors on the same
// bounce domain, you need to keep track of which processor belongs to
// which domain.
$cfg->bounceprefix    = 'AAA-';
// The domainpart of the generated VERP domain. e.g.
// <localpart>@$cfg->bouncedomain
// This must be set for VERP handling to take effect
//$cfg->bouncedomain    = '';

// maximum allowed size of uploaded images
// NOTE: the scalable resize might result in images with one dimesion larger than one of these sizes, but not both
$cfg->imagemaxwidth = 1024;
$cfg->imagemaxheight = 1024;

// paths and arguments for various system commands
$cfg->pathtounzip = '/usr/bin/unzip';
$cfg->pathtozip   = '/usr/bin/zip';
$cfg->ziprecursearg = '-r';
$cfg->unzipdirarg = '-d';
$cfg->unziplistarg = '-l';
// some shared hosts have restrictions on where unzip can be used
// dataroot is often not allowed; but /tmp is
// Note that if there is more than one mahara on this host using this setting
// you must change this to something unique, eg /tmp/mahara1/ and /tmp/mahara2/
// $cfg->unziptempdir = '/tmp/mahara/';

// How often Mahara should update the last access time for users. Setting this 
// lower means the field will be updated more regularly, but means a database 
// write will be required for more requests.
// Setting it to zero means the access time will be updated every request
$cfg->accesstimeupdatefrequency = 300;

// How long since their last request before a user is considered to be logged 
// out. Note that it makes no sense for this to be less than the 
// accesstimeupdatefrequency.
$cfg->accessidletimeout = 600;

// Whether to show the onlineusers sideblock
//$cfg->showonlineuserssideblock = true;

// CRON job maximum run age in SECONDS
// ... Mahara decides to run a cron job only if the "next run time" is between the current date+time and (max run age) seconds ago.
//
// IMPORTANT:  THIS MUST BE EQUAL TO OR GREATER THAN YOUR CRON JOB THAT HITS {$cfg->wwwroot}/lib/cron.php
// ... The setup/install instructions require you to set a server cron job to hit the cron.php.
// ... The default assumption by Mahara is that this will be every minute.
// ... Not all hosting providers will allow you to schedule a cron job every minute.  Also, you may for your own purposes
//     not want to have a cron job every minute for CPU / performance reasons.
//
// If this is not set properly, any cron periodicities less than your server cron periodicity will likely be perpetually skipped.
// This will be evident in cron job report that is output by your server after hitting cron.php.
//
// EXAMPLE:  Your cron job hits cron.php every 15 minutes.  Then $cfg->maxrunage must be 900 or greater.
$cfg->maxrunage = 300;

// if importing Leap2A over an xmlrpc mnet connection, set this to something higher than 0 to log import information
// see the constants in import/leap/lib.php
$cfg->leapovermnetloglevel = 0;

// base URL of avatar server (with the trailing slash)
// This should normally be set to http://www.gravatar.com/avatar/
//$cfg->remoteavatarbaseurl = 'http://www.gravatar.com/avatar/';
