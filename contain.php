<?php
//usage [[*pagetitle:contain=`kjk`:is=`1`:then=`yes`:else=`no`]]
if (strpos($input,$options) !== false) {
	return true;
}else{
	return false;
}