reCAPTCHA for SMF
=================

About
-----
This modification allows you to use [reCAPTCHA](http://www.google.com/recaptcha)
instead of the built-in Visual Verification system. It supports the SMF
2.0 series.

Portions of the code use the PHP reCAPTCHA API.

This mod and other information can be found at:
http://www.animeneko.net/projects/smf/


Features
--------
 - Use reCAPTCHA on your forum in place of or in combination with the
   built-in verification options.
 - Support for built-in reCAPTCHA themes


How to Use
----------
You can enable reCAPTCHA by going to:

Admin -> Configuration -> Security and Moderation -> Anti-Spam

A set of keys are required for operation of reCAPTCHA. A link is
provided in the settings to register for a key pair.


2.0 Upgrade Note
----------------
If you are upgrading from a version older than 2.0, there is one major
change to be aware of.

Starting with version 2.0, this modification no longer replaces the
built-in image verification. It now operates independently of those
settings. If you don't want the built-in image verification, make sure
to set it to "None".


Known Issues
------------
 - The error messages are the built-in ones, so they will talk about
   letters not being filled in or matching.


License
-------
This code is licensed under the terms of the BSD 3-Clause License. SMF
code used in this mod is copyright Simple Machines. All original code is
copyright Michael Johnson.

The reCAPTCHA PHP library is licensed under the BSD 3-Clause License.


Acknowledgements
----------------
"SMF" and "Simple Machines" are trademarks of Simple Machines.


Version History
---------------
See CHANGELOG


Doc Revision 20180803
