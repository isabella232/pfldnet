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
<H2><p><center> Download all papers as a single .tgz <a href="paper/pfldnet2010.tgz">here.</center></a></H2>
</p>
<?php
$papers=array(
	"Kalim"=>array("authors"=>"Umar Kalim; Eric Brown; Mark K. Gardner; Wu-chun Feng (Virginia Tech, US)",
		  "title"=>"Enabling Renewed Innovation in TCP by Establishing an Isolation Boundary",
		  "paper"=>"session1-1.pdf",
		  "presentation"=>"",
		  "abstract"=>""),

	"Iyengar"=>array("authors"=>"Janardhan Iyengar*; Bryan Ford**; Dishant Ailawadi**; Syed Obaid Amin*; Michael Nowlan**; Nabin Tiwari*; Jeff Wise* <br>(*Franklin and Marshall College, US; **Yale University, US)",
		  "title"=>"Minion&mdash;an All-Terrain Packet Packhorse to Jump-Start Stalled Internet Transports",
		  "pages"=>"",
		  "paper"=>"session1-2.pdf",
		  "presentation"=>"",
		  "abstract"=>""),

	"Kobayashi"=>array("authors"=>"Katsushi Kobayashi (RIKEN, JP)",
		  "title"=>"Road space rationing in the Internet: Pay more to get better throughput in best effort networks",
		  "pages"=>"",
		  "paper"=>"session1-3.pdf",
		  "presentation"=>"",
		  "abstract"=>""),

	"Pacheco"=>array("authors"=>"Dino Martin Lopez Pacheco*; Tuan Tran Thai**; Emmanuel Lochin**; Fabrice Arnal***<br>(*University of Nice (EPU), FR; **University of Toulouse, FR; ***Thales Alenia Space, FR)",
		  "title"=>"Towards an incremental deployment of ERN protocols: a proposal for an E2E-ERN hybrid protocol",
		  "pages"=>"",
		  "paper"=>"session2-1.pdf",
		  "presentation"=>"",
		  "abstract"=>""),

	"Qian"=>array("authors"=>"Bin Qian; Narasimha Reddy<br>(Texas A&M University, US)",
		  "title"=>"Measurement and Performance Study of PERT for On-demand Video Streaming",
		  "pages"=>"",
		  "paper"=>"session2-2.pdf",
		  "presentation"=>"",
		  "abstract"=>""),

	"Kuehlewind"=>array("authors"=>"Mirja Kuehlewind*; Bob Briscoe** (*University of Stuttgart, DE; **BT, UK)",
		  "title"=>"Chirping for Congestion Control - Implementation Feasibility",
		  "pages"=>"",
		  "paper"=>"session2-3.pdf",
		  "presentation"=>"",
		  "abstract"=>""),

	"Amer"=>array("authors"=>"Paul David Amer; Nasif Ekiz (University of Delaware, US)",
		  "title"=>"A Model for Detecting Transport Layer Data Reneging",
		  "pages"=>"",
		  "paper"=>"session3-1.pdf",
		  "presentation"=>"",
		  "abstract"=>""),

	"Gursun"=>array("authors"=>"Gonca Gursun; Ibrahim Matta; Karim A Mattar (Boston University, US)",
		  "title"=>"Revisiting A Soft-State Approach to Managing Reliable Transport Connections",
		  "pages"=>"",
		  "paper"=>"session3-2.pdf",
		  "presentation"=>"",
		  "abstract"=>""),

	"Dreibholz"=>array("authors"=>"Thomas Dreibholz*; Robin Seggelmann**; Michael Tüxen**; Erwin P. Rathgeb*<br>(*University of Duisburg-Essen, DE; **Münster University of Applied Sciences, DE)",
		  "title"=>"Transmission Scheduling Optimizations for Concurrent Multipath Transfer",
		  "pages"=>"",
		  "paper"=>"session4-1.pdf",
		  "presentation"=>"",
		  "abstract"=>""),

	"Kissel"=>array("authors"=>"Ezra Kissel; Martin Swany (University of Delaware, US)",
		  "title"=>"Session Layer Burst Switching for High Performance Data Movement",
		  "paper"=>"session4-2.pdf",
		  "presentation"=>"",
		  "abstract"=>""),

	"Kumar"=>array("authors"=>"Suman Kumar*; Mohammed Azad**; Seung-Jong Park** <br> (*North Carolina State University, US; **Louisiana State University)",
		  "title"=>"A fluid-based simulation study: the effect of loss synchronization on sizing buffers over 10Gbps high speed networks",
		  "paper"=>"session4-3.pdf",
		  "presentation"=>"",
		  "abstract"=>""),

	"Panel1"=>array("authors"=>"Katsushi Kobayashi (RIKEN, JP);<br>
				Mirja Kuehlewind (University of Stuttgart, DE);<br>
				Ibrahim Matta (Boston University, US);<br>
				Joe Touch (USC/ISI, US);<br>
				Michael Welzl (University of Oslo, NO)",
		  "title"=>"&ldquo;The Transport Tussle&rdquo;",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),
	"Panel2"=>array("authors"=>"Ilknur Aydin (SUNY Plattsburgh, US);<br>
				Markku Kojo (University of Helsinki, FI);<br>
				Martin Swany (University of Delaware, US);<br>
				Michael Tüxen (Münster University of Applied Sciences, DE)",
		  "title"=>"&ldquo;Adapting to Diversity&rdquo;",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),
	"Welzl"=>array("authors"=>"Michael Welzl",
		  "title"=>"Status update (10 minutes)",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),
	"Gjessing"=>array("authors"=>"Stein Gjessing",
		  "title"=>"Update on MulTFRC draft (draft-irtf-iccrg-multfrc-01) (20 minutes)",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),
	"Tüxen"=>array("authors"=>"Michael Tüxen",
		  "title"=>"SCTP's Congestion Control and TCP-Friendliness (15 minutes)",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),
	"Aydin"=>array("authors"=>"Ilknur Aydin",
		  "title"=>"TCP-Friendliness of SCTP and CMT (30 minutes)",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),
	"Leslie"=>array("authors"=>"John Leslie",
		  "title"=>"ConEx: A Research Tool For IPv6 Congestion Control (45 minutes)",
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
		gap     ("8:00-9:00", "Breakfast (provided)");
		session ("9:00-10:30", "Transport Architecture", "Bryan Ford", array("Kalim", "Iyengar", "Kobayashi"), $papers);
		gap     ("10:30-11:00", "Break");
		session ("11:00-12:30", "Congestion Control", "Michael Welzl", array("Pacheco", "Qian", "Kuehlewind"), $papers);
		gap     ("12:30-14:00", "Lunch (provided)");
	  	session ("14:00-15:30", "Panel Discussion", "Joe Touch", array("Panel1"), $papers);
		gap     ("15:30-16:00", "Break");
	  	session ("16:00-17:00", "Reliable transports", "Katsushi Kobayashi", array("Amer", "Gursun"), $papers);
		gap     ("18:00-20:00", "Reception (at the Downtown Mariott, shuttle provided)");
		endday  ();
		
		day     ("Monday, November 29, 2010");
		gap     ("8:00-9:00", "Breakfast (provided)");
		session ("9:00-10:30", "Network Performance", "Paul Amer", array("Dreibholz", "Kissel", "Kumar"), $papers);
		gap     ("10:30-11:00", "Break");
		session ("11:00-12:30", "Panel Discussion", "Michael Tüxen", array("Panel2"), $papers);
		gap     ("12:30-14:00", "Lunch (provided)");
		session ("14:00-16:00", "ICCRG Session", "Michael Welzl", array("Welzl", "Gjessing", "Tüxen", "Aydin", "Leslie"), $papers);
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
