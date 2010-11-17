<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<HTML lang="en">

<HEAD>
<META http-equiv="content-type" content="text/html;charset=ISO-8859-1">
<TITLE>PFLDnet 2010 Technical Program</TITLE>
<LINK href="def.css" rel="stylesheet" media="all">
<style type="text/css">
<!--
.style1 {font-size: 16px}
.style2 {font-size: 16px}
.style3 {font-size: 18px}
-->
</style>
</HEAD>

<?php $ROOT = "."; ?>
<?php include ("templates/header.php"); ?>

<TABLE width="780" border="0" cellspacing="0" cellpadding="0">
<TR>
<TD bgcolor="#000000" width="1"><IMG src="images/spacer.gif" alt="" height="5" width="1" border="0"></TD>
<TD width="778"><H1><IMG src="images/cap_tec.gif" alt=" " height="36" width="20" align="absmiddle" border="0" hspace="5" vspace="5">TECHNICAL PROGRAM (Tentative)</H1>

<?php
$papers=array(
	"Kalim"=>array("authors"=>"Umar Kalim; Eric Brown; Mark K. Gardner; Wu-chun Feng (Virginia Tech, US)",
		  "title"=>"Enabling Renewed Innovation in TCP by Establishing an Isolation Boundary",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),

	"Iyengar"=>array("authors"=>"Janardhan Iyengar*; Syed Obaid Amin*; Bryan Ford** <br>(*Franklin and Marshall College, US; **Yale University, US)",
		  "title"=>"Minion&mdash;an All-Terrain Packet Packhorse to Jump-Start Stalled Internet Transports",
		  "pages"=>"",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),

	"Kobayashi"=>array("authors"=>"Katsushi Kobayashi (RIKEN, JP)",
		  "title"=>"Road space rationing in the Internet: Pay more to get better throughput in best effort networks",
		  "pages"=>"",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),

	"Pacheco"=>array("authors"=>"Dino Martin Lopez Pacheco*; Tuan Tran Thai**; Emmanuel Lochin**; Fabrice Arnal***<br>(*University of Nice (EPU), FR; **University of Toulouse, FR; ***Thales Alenia Space, FR)",
		  "title"=>"Towards an incremental deployment of ERN protocols: a proposal for an E2E-ERN hybrid protocol",
		  "pages"=>"",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),

	"Qian"=>array("authors"=>"Bin Qian; Narasimha Reddy<br>(Texas A&M University, US)",
		  "title"=>"Measurement and Performance Study of PERT for On-demand Video Streaming",
		  "pages"=>"",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),

	"Kuehlewind"=>array("authors"=>"Mirja Kuehlewind*; Bob Briscoe** (*University of Stuttgart, DE; **BT, UK)",
		  "title"=>"Chirping for Congestion Control - Implementation Feasibility",
		  "pages"=>"",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),

	"Amer"=>array("authors"=>"Paul David Amer; Nasif Ekiz (University of Delaware, US)",
		  "title"=>"A Model for Detecting Transport Layer Data Reneging",
		  "pages"=>"",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),

	"Gursun"=>array("authors"=>"Gonca Gursun; Ibrahim Matta; Karim A Mattar (Boston University, US)",
		  "title"=>"Revisiting A Soft-State Approach to Managing Reliable Transport Connections",
		  "pages"=>"",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),

	"Dreibholz"=>array("authors"=>"Thomas Dreibholz*; Robin Seggelmann**; Michael Tüxen**; Erwin P. Rathgeb*<br>(*University of Duisburg-Essen, DE; **Münster University of Applied Sciences, DE)",
		  "title"=>"Transmission Scheduling Optimizations for Concurrent Multipath Transfer",
		  "pages"=>"",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),

	"Kissel"=>array("authors"=>"Ezra Kissel; Martin Swany (University of Delaware, US)",
		  "title"=>"A fluid-based simulation study: the effect of loss synchronization on sizing buffers over 10Gbps high speed networks",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),

	"Kumar"=>array("authors"=>"Suman Kumar*; Mohammed Azad**; Seung-Jong Park** <br> (*North Carolina State University, US; **Louisiana State University)",
		  "title"=>"A fluid-based simulation study: the effect of loss synchronization on sizing buffers over 10Gbps high speed networks",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),

	"Panel1"=>array("authors"=>"",
		  "title"=>"The Transport Tussle",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),
	"Panel2"=>array("authors"=>"",
		  "title"=>"Adapting to Diversity",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),
);

#####################################################################
function session($times, $title, $chair, $speakers, $papers)
{
    print "    <TR valign=\"top\">\n";
    print "      <TH> ".$times."&nbsp;</TH>\n";
    print "      <TD><span style=\"color:#000099\">".$title."</span>";
	if ($chair && $chair != "TBA")
		print " &nbsp; &nbsp; Chair: $chair";
	print "</TD>\n    </TR>\n";
	$first = true;
	foreach ($speakers as $sp) {
	    $p = $papers[$sp];
		   print "<a name=\"$sp\"/>\n";
		
	    print "    <TR valign=\"top\">\n";
		print "      <TH style=\"border-top:none\">&nbsp;</TH>\n";
		$pages = "";
		if ($p["pages"]) {
		    $pages = " &nbsp; pages&nbsp;".$p["pages"];
		}
		if ($first) {
			print "      <TD style=\"border-top:none\">";
		} else {
			print "      <TD>";
		}
		if ($p["title"]) {
			print $p["title"]."<br>\n";
		}
        print "         <div class=\"author\">".$p["authors"]."$pages</div>\n";
		if ($p["slides"])
	        print "         <div class=\"pdf\"><a href=\"slides/".$p["slides"]."\"><img src=\"images/pdficon.gif\" alt=\"\" width=\"16\" height=\"20\" border=\"0\" style=\"vertical-align:middle;margin-right:5px\">presentation</a></div>\n";
//		print "	    <div class=\"time\">(20 min.)</div>\n";
		if ($p["paper"] || $p["abstract"] || $p["presentation"]) {
		    print "		<div class=\"pdf\">";
			if (isset($_REQUEST['abs']) && $_REQUEST['abs'] == $sp) {
				print "<a href='?#$sp'>Hide abstract</a><br/>".$p["abstract"]." ";
			} else if ($p["abstract"])
				print "<a href='?abs=".$sp."#$sp'>abstract</a> ";
			if ($p["paper"]) {
			    $fname = "paper/".$p["paper"];
				$size = sprintf ("%dk", filesize($fname)/1024);
				print "<a href=\"$fname\"><img src=\"images/pdficon.gif\" alt=\"\" width=\"16\" height=\"20\" border=\"0\" style=\"vertical-align:middle;margin-right:5px\">full paper ($size)</a> ";
			}
			if ($p["presentation"]) {
			    $fname = "slides/".$p["presentation"];
				$size = sprintf ("%dk", filesize($fname)/1024);
				print "<a href=\"$fname\"><img src=\"images/pdficon.gif\" alt=\"\" width=\"16\" height=\"20\" border=\"0\" style=\"vertical-align:middle;margin-right:5px\">presentation ($size)</a> ";
			}
			print "</div>\n";
		}	
	}
	print "      </TD>\n    </TR>\n";
}

#####################################################################
function gap($times, $title)
{
    print "    <TR valign=\"top\">\n";
    print "      <TH> ".$times."&nbsp;</TH>\n";
    print "      <TD><span style=\"color:#000099\">".$title."</span></TD>\n";
	print "    </TR>\n";
}


#####################################################################
function day($date)
{
	echo <<<EOF
<DIV class="cntind">
  <a name="$date"/>
	<TABLE border="0" cellspacing="0" cellpadding="0" class="prog">
    <TR valign="top">
      <TH> &nbsp;</TH>
      <TD> &nbsp;</TD>
    </TR>
    <TR valign="top">
      <TH style="border-top:none">&nbsp;</TH>
      <TD style="border-top:none"> <strong>$date</strong> </TD>
    </TR>
EOF;
}

#####################################################################
function endday()
{
    echo <<< EOF
	</TABLE>
</DIV>	
EOF;
}

#####################################################################
    if (1) {
#		echo <<<EOF
#<DIV class="cntind">
#	<TABLE border="0" cellspacing="0" cellpadding="0" class="prog">
#EOF;
	echo '<div class="top"><p style="text-align:right;margin:0px"><a href="#Sunday, November 28, 2010">28 Nov</a>|<a href="#Monday, November 29, 2010">29 Nov</a></p></div>'."\n";

		day     ("Sunday, November 28, 2010");
		#gap     ("8:00-9:00", "Breakfast (provided)");
		session ("9:00-10:30", "Transport Architecture", "TBD", array("Kumar", "Iyengar", "Kobayashi"), $papers);
		gap     ("10:30-11:00", "Break");
		session ("11:00-12:30", "Congestion Control", "TBD", array("Pacheco", "Qian", "Kuehlewind"), $papers);
		gap     ("12:30-14:00", "Lunch (provided)");
	  	session ("14:00-15:30", "Panel: The Transport Tussle", "TBD", array("Panel1"), $papers);
		gap     ("15:30-16:00", "Break");
	  	session ("16:00-17:00", "Reliable transports", "TBD", array("Amer", "Gursun"), $papers);
		#gap     ("17:00-", "Dinner (???)");
		endday  ();
		
		day     ("Monday, November 29, 2010");
		#gap     ("8:00-9:00", "Breakfast (provided)");
		session ("9:00-10:30", "Network Performance", "TBD", array("Dreibholz", "Kissel", "Kumar"), $papers);
		gap     ("10:30-11:00", "Break");
		session ("11:00-12:30", "Panel: Adapting to Diversity", "TBD", array("Panel2"), $papers);
		gap     ("12:30-14:00", "Lunch (provided)");
		endday  ();
		
	} else if (0) {
		print "<table border=1>\n";
		print "<tr><th>Title</th><th>Authors</th></tr>\n";
		foreach ($papers as $p) {
		    print "<tr><td>".$p["title"]."</td><td>".$p["authors"]."</td></tr>\n";
		}
	}
	print "</table>\n";

?>
 
</p>
<?php include ("templates/footer.php"); ?>
