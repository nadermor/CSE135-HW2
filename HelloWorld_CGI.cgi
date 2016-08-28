#!/usr/bin/perl -w

use strict;

print "Content-type: text/html\r\n\r\n";

my $range = 3 ;
my $randNum = int(rand($range));
my $color;

if ($randNum == 1){
	$color = '#FF0000';
}
elsif ($randNum == 2){
	$color = '#0000FF';
}
elsif($randNum == 0){
	$color = '#F5F5F5';
}

<body bgcolor = $color>; 

print qq{<div style="background-color: $color ;"></di+v>};


my $datestring = localtime();

print "Hello Web World from language Perl 
<br />\n On $datestring  <br />\n";

