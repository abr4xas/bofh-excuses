<?php
/*
Plugin Name: BOFH excuses
Plugin URI: http://wordpress.org/extend/plugins/bofh-excuses/
Description: BOFH excuses, another foolish wp plugin based on Hello Dolly from Matt Mullenweg.
Author: abr4xas
Version: 1.0.3
Author URI: http://abr4xas.org
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function get_bofh() {
	$getbofh = "clock speed
			solar flares
			electromagnetic radiation from satellite debris
			static from nylon underwear
			static from plastic slide rules
			global warming
			poor power conditioning
			static buildup
			doppler effect
			hardware stress fractures
			magnetic interferance from money/credit cards
			dry joints on cable plug
			we're waiting for [the phone company] to fix that line
			sounds like a Windows problem, try calling Microsoft support
			temporary routing anomoly
			somebody was calculating pi on the server
			fat electrons in the lines
			excess surge protection
			floating point processor overflow
			divide-by-zero error
			POSIX complience problem
			monitor resolution too high
			improperly oriented keyboard
			network packets travelling uphill (use a carrier pigeon)
			Decreasing electron flux
			first Saturday after first full moon in Winter
			radiosity depletion
			CPU radiator broken
			It works the way the Wang did, what's the problem
			positron router malfunction
			cellular telephone interference
			techtonic stress
			pizeo-electric interference
			(l)user error
			working as designed
			dynamic software linking table corrupted
			heavy gravity fluctuation, move computer to floor rapidly
			secretary plugged hairdryer into UPS
			terrorist activities
			not enough memory, go get system upgrade
			interrupt configuration error
			spaghetti cable cause packet failure
			boss forgot system password
			bank holiday - system operating credits  not recharged
			virus attack, luser responsible
			waste water tank overflowed onto computer
			Complete Transient Lockout
			bad ether in the cables
			Bogon emissions
			Change in Earth's rotational speed
			Cosmic ray particles crashed through the hard disk platter
			Smell from unhygenic janitorial staff wrecked the tape heads
			Little hamster in running wheel had coronary; waiting for replacement to be Fedexed from Wyoming
			Evil dogs hypnotized the night shift
			Plumber mistook routing panel for decorative wall fixture
			Electricians made popcorn in the power supply
			Groundskeepers stole the root password
			high pressure system failure
			failed trials, system needs redesigned
			system has been recalled
			not approved by the FCC
			need to wrap system in aluminum foil to fix problem
			not properly grounded, please bury computer
			CPU needs recalibration
			system needs to be rebooted
			bit bucket overflow";
	$getbofh = explode( "\n", $getbofh );
	return wptexturize( $getbofh[ mt_rand( 0, count( $getbofh ) - 1 ) ] );
}
function bofh() {
	$chosen = get_bofh();
	echo "<p id='bofh'>$chosen</p>";
}
add_action( 'admin_notices', 'bofh' );
function bofh_css() {
	$x = is_rtl() ? 'left' : 'right';
	echo "
	<style type='text/css'>
	#bofh {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}
add_action( 'admin_head', 'bofh_css' );
?>
