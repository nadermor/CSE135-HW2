#!/usr/bin/perl -wT

use CGI qw(:standard);
use strict;

print header;
print start_html("Thank You");
print h2("Thank You");

my $datestring = localtime();

print"</p> Hello </p>"; 

my %form;
foreach my $p (param()) {
    $form{$p} = param($p);
    print "$form{$p}<br>\n";
}

print "<html> <head>\n";
print "<title>Hello, world!</title>";

print "</head><body bgcolor='red'>\n";
print "</p>This is written in Perl on $datestring</p>\n";

print end_html;
