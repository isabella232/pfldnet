<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<HTML lang="en">

<HEAD>
<META http-equiv="content-type" content="text/html;charset=ISO-8859-1">
<TITLE>PFLDnet 2007</TITLE>
<LINK href="def.css" rel="stylesheet" media="all">
<style type="text/css">
<!--
.style1 {font-size: 16px}
.style2 {font-size: 16px}
.style3 {font-size: 18px}
-->
</style>
</HEAD>

<?php $ROOT = "\\\\wil-fs\\wwwroot\\pfldnet2007"; ?>
<?php include ($ROOT."\\templates\\header.php"); ?>

<TABLE width="780" border="0" cellspacing="0" cellpadding="0">
<TR>
<TD bgcolor="#000000" width="1"><IMG src="images/spacer.gif" alt="" height="5" width="1" border="0"></TD>
<TD width="778"><H1><IMG src="images/cap_tec.gif" alt=" " height="36" width="20" align="absmiddle" border="0" hspace="5" vspace="5">TECHNICAL PROGRAM</H1>
  <div class="top">
  <p><a href="http://www.ifp.uiuc.edu/%7Esrikant/">Prof. R. Srikant </a>of UIUC
  and Larry Dunn of <a href="http://www.cisco.com/web/about/index.html">Cisco</a> will be plenary speakers at PFLDnet2007.</p>
  <p>For the first time, PFLDnet will host a <strong>tutorial</strong>. This tutorial will be given by
    <a href="http://ee2.caltech.edu/People/Faculty/low.html" target="_blank">Prof. Steven Low</a>, Professor at Caltech and CEO of
    <a href="http://www.fastsoft.com">FastSoft</a>, with a tentative title of &quot;Flow control theory for practitioners&quot;, on the morning of
    Friday February&nbsp;9th, 2007 . </p>
  <p>Regular talks will be 20 minutes, with 5 minutes for questions and change-over.</p>
  <!--p>This programme is still preliminary, and subject to change. Please do not make travel or other plans based on when a particular talk will be.</p-->
  <p>On Friday afternoon, February 9, 2007, PFLDnet2007 delegates are welcome to a complimentary site visit at <a href="http://wil.cs.caltech.edu/" target="blank">WAN-in-Lab</a> in <a href="http://netlab.caltech.edu/" target="_blank">Netlab</a>, <a href="http://www.caltech.edu/" target="_blank">Caltech</a>. A shuttle bus is has been arranged for those need transport to WAN-in-Lab site visit from ISI. <br>
   (<a href="http://netlab.caltech.edu/maps.php" target="_blank">Driving directions</a> to WAN-in-Lab..) </p>
  </div>

<?php
$papers=array(
	"Plenary1"=>array("authors"=>"R. Srikant (University of Illinois at Urbana-Champaign)",
		  "title"=>"The Role of Mathematical Modelling in the Design of
		      Congestion Control Algorithms for High-Speed Networks",
		  "paper"=>"",
		  "presentation"=>"Plenary2_modeling.pdf",
		  "abstract"=>""),

	"Cai"=>array("authors"=>"Han Cai*; Do Young Eun*; Sangtae Ha*; Injong Rhee* ; Lisong Xu** <br>(*North Carolina State University, US; **University of Nebraska-Lincoln, US)",
		  "title"=>"Stochastic Ordering for Internet Congestion Control",
		  "pages"=>"1-6",
		  "paper"=>"StochasticOrdering.pdf",
		  "presentation"=>"StochasticOrdering_talk.pdf",
		  "abstract"=>"This paper presents a new stochastic tool, called convex ordering, that
				provides an ordering of any convex function of transmission rates of two
				protocols and valuable insights into high order behaviors of protocols. As
				the ordering determined by this tool is consistent with any convex function
				of rates, it can be applied to any unknown metric for protocol performance
				that consists of some high-order moments of transmission rates, as well as
				those already known such as rate variance. Using the tool, it is analyzed
				that a protocol with a growth function that starts off with a concave
				function and then switches to a convex function (e.g., an odd order function
				such as x^3 and x^5) around the maximum window size in the previous loss
				epoch, gives the smallest rate variation under a variety of network
				conditions. Among existing protocols, BIC and CUBIC have this window growth
				function. Experimental and simulation results confirm the analytical
				findings.
			"),
	"Shorten"=>array("authors"=>"Douglas Leith; Robert Shorten; Gavin McCullagh<br>(Hamilton Institute at NUI Maynooth, IE) ",
		  "title"=>"Experimental evaluation of Cubic-TCP",
		  "pages"=>"7-12",
		  "paper"=>"CUBIC_analysis.pdf",
		  "presentation"=>"CUBIC_analysis_talk.pdf",
		  "abstract"=>"In this paper we present an initial experimental
				evaluation of the recently proposed Cubic-TCP algorithm. Results
				are presented using a suite of benchmark tests that have
				been recently proposed in the literature [12], and a number of
				issues are of practical concern highlighted."
			),

	"Bhandarkar"=>array("authors"=>"Sumitha Bhandarkar; Narasimha Reddy<br>(Texas A & M University, US)",
		  "title"=>"Robustness to Packet Reordering in High-speed Networks",
		  "pages"=>"13-18",
		  "paper"=>"PacketReorderingBhandarkar.pdf",
		  "presentation"=>"PacketReorderingBhandarkar_talk.pdf",
		  "abstract"=>"In this paper we investigate the impact of packet
				reordering on the performance of high-speed protocols. Our
				results show that even small fraction of packet reordering can
				severely impair the performance of these protocols. We then
				investigate the benefits of using delayed congestion response
				(TCP-DCR) with the high-speed protocols. Our results indicate
				that the benefits in terms of avoiding performance degradation is
				significant, even at very high levels of packet reordering. In the
				absence of any packet reordering, the protocol behavior in terms
				of fairness among competing flows or impact on bottleneck link
				drop rates remains unmodified.
			"),
	"Feng"=>array("authors"=>"Jie Feng; Zhipeng Ouyang; Lisong Xu; Byrav Ramamurthy <br>(University of Nebraska-Lincoln, US)",
		  "title"=>"Packet Reordering in High-Speed Networks and Its Impact on High-Speed TCP Variants",
		  "pages"=>"19-24",
		  "paper"=>"PacketReorderingFeng.pdf",
		  "presentation"=>"",
		  "abstract"=>"Several recent Internet measurement studies show
				that the higher the packet sending rate, the higher the packet
				reordering probability. This implies that recently proposed highspeed
				TCP variants are more likely to experience packet reordering
				than regular TCP in high-speed networks, since they are
				designed to achieve much higher throughput than regular TCP
				in these networks. In this paper, we study the characteristics of
				packet reordering in high-speed networks, and its impact on highspeed
				TCP variants. In addition, we evaluate the effectiveness
				of the existing reordering-tolerant TCP enhancements. Our
				simulation results demonstrate that high-speed TCP variants
				perform poorly in the presence of packet reordering, and
				existing reordering-tolerant algorithms can significantly improve
				the performance of high-speed TCP variants."
			),
	"White"=>array("authors"=>"Jerome White; David Wei<br>(California Institute of Technology, US)",
		  "title"=>"Effect of Receive Buffer Size: An OS-based Perspective",
		  "pages"=>"25-30",
		  "paper"=>"ReceiveBufferSize.pdf",
		  "presentation"=>"",
		  "abstract"=>"It is generally accepted that optimal TCP receive
				buffer size is based on network conditions. We argue that processing
				limitations at the end hosts should also be a consideration. We
				present initial analysis as to the validity of this argument, noting
				process-receive buffer dynamics and its affect on throughput.
				Based on our observations, we offer suggestions as to how better
				network performance can be achieved via optimized scheduling
				from the operating system."
			),

	"Kaneko"=>array("authors"=>"Kazumi Kaneko; Jiro Katto <br>(Waseda University, JP)",
		  "title"=>"TCP-Fusion: A Hybrid Congestion Control Algorithm for High-speed Networks",
		  "pages"=>"31-36",
		  "paper"=>"TCP_fusion.pdf",
		  "presentation"=>"",
		  "abstract"=>"This paper presents a new congestion control algorithm of TCP,
		  		called TCP-Fusion, and provides its extensive evaluation results
				through simulations and implementations.  Recently, towards high-speed
				networks with large bandwidth delay product, a number of different
				approaches have been proposed to improve TCP performance. However,
				their potential unfriendliness to TCP-Reno encumbers their wide
				deployment in the Internet because TCP-Reno is already widely deployed.
				Most recently, to satisfy efficiency and friendliness tradeoffs of TCP,
				new approaches combining a loss-based protocol and a delay-based
				protocol have been proposed, such as TCP-Adaptive Reno and Compound TCP.
				Our TCP-Fusion also belongs to this category and tries to utilize the
				residual capacity effectively without impacts on coexisting flows,
				i.e. TCP-Reno flows. To achieve this purpose, TCP-Fusion exploits
				three useful characteristics of TCP-Reno, TCP-Vegas and TCP-Westwood
				in its congestion avoidance strategy. In short, congestion window of
				TCP-Fusion is decreased without causing too drastic reduction and is
				increased with smart adaptability to coexisting TCP-Reno flows
				according to the congestion level measurement estimated from RTT.
				Our implementation and simulation results show that TCP-Fusion can
				obtain the highest throughput among existing TCP variants when there
				is unused residual capacity while its friendliness to the TCP-Reno
				is sufficiently satisfied, otherwise, it shares the same bandwidth
				to coexisting flows. 
			"),
	"Vacirca"=>array("authors"=>"Francesco Vacirca; Andrea Baiocchi; Angelo Castellani<br>(Universita di Roma, La Sapienza, IT)",
		  "title"=>"YeAH-TCP: yet Another Highspeed TCP",
		  "pages"=>"37-42",
		  "paper"=>"YeAH_TCP.pdf",
		  "presentation"=>"",
		  "abstract"=>"In recent years, several new TCP congestion control algorithms have
				been proposed to improve TCP performance over very fast, long-distance
				networks. High bandwidth delay products require more aggressive window
				adaptation rules, yet maintaining the ability of controlling router
				buffer congestion. We define a relatively simple experimental scenario
				to compare most current high speed TCP proposals under many metrics:
				efficiency, internal fairness, friendliness to Reno, induced network
				stress, robustness to random losses. Based on the gained insight, we
				define Yet Another High-speed TCP, as a heuristic attempt to strike a
				balance among different opposite requirements."
			),
	"Munir"=>array("authors"=>"Kashif Munir; Michael Welzl; Dragana Damjanovic <br>(University of Innsbruck, AT)",
		  "title"=>"Linux beats Windows! – or the Worrying Evolution of TCP in Common Operating Systems",
		  "pages"=>"43-48",
		  "paper"=>"LinuxBeatsWindows.pdf",
		  "presentation"=>"",
		  "abstract"=>"For a long time, operating system designers have followed
		  the recommendation of the IETF for TCP congestion control. Recently,
		  this has changed: the Linux kernel uses BIC-TCP by default since June 2004,
		  and Compound TCP is going to be a part of Microsoft Windows Vista, where
		  it is likely to be enabled by default. This raises concerns about
		  the future of congestion control in the Internet and the role of
		  the IETF in this context. Simulation results indicate that there is
		  indeed a reason to be concerned, as TCP flows of the above mentioned
		  current and future operating systems appear to exhibit significant
		  fairness problems when they share the same network."),

	"Panel1"=>array("authors"=>"",
		  "title"=>"Risks, Benefits and Issues of Using PFLDnets on the Internet",
		  "paper"=>"",
		  "presentation"=>"Panel1_eggert.pdf",
		  "abstract"=>""),
	"TedFaber"=>array("authors"=>"Ted Faber, USC ISI (TCPM co-chair)",
		  "title"=>"",
		  "paper"=>"",
		  "presentation"=>"Panel1_faber.pdf",
		  "abstract"=>""),
	"MurariSridharan"=>array("authors"=>"Murari Sridharan, Microsoft (C-TCP)",
		  "title"=>"",
		  "paper"=>"",
		  "presentation"=>"Panel1_sridharan.pdf",
		  "abstract"=>""),
	"InjongRhee"=>array("authors"=>"Injong Rhee, NCSU (BIC/CUBIC)",
		  "title"=>"",
		  "paper"=>"",
		  "presentation"=>"Panel1_rhee.pdf",
		  "abstract"=>""),
	"StephenHemminger"=>array("authors"=>"Stephen Hemminger, OSDL (Linux kernel)",
		  "title"=>"",
		  "paper"=>"",
		  "presentation"=>"Panel1_hemminger.pdf",
		  "abstract"=>""),
	"BobBriscoe"=>array("authors"=>"Bob Briscoe (BT and UCL, UK)",
		  "title"=>"",
		  "paper"=>"",
		  "presentation"=>"Panel1_briscoe.pdf",
		  "abstract"=>""),


	"Plenary2"=>array("authors"=>"Larry Dunn (Cisco Systems)",
		  "title"=>"Three sides of a coin: Why it's easy/impossible/tricky to get your ideas into routers",
		  "paper"=>"",
		  "presentation"=>"Dunn3sidesOfACoin.pdf",
		  "abstract"=>"This talk will relate experiences
     on getting TCP ideas into Cisco hardware.
     It will look at what other folks have said about lessons-learned,
     technology futures, current issues, and how they have an impact on
     getting TCP protocol ideas into hardware.  Finally, it will
     make practical suggestions for how the above might
     impact folks at PFLDNet.
	"),

	"Yoshino"=>array("authors"=>"Takeshi Yoshino; Junji Tamatsukuri; Katsushi Inagami; Yutaka Sugawara; Mary Inaba; Kei Hiraki <br>(University of Tokyo, JP)",
		  "title"=>"Analysis of 10 Gigabit Ethernet using Hardware Engine for Performance Tuning on Long Fat-pipe Network",
		  "pages"=>"43-48",
		  "paper"=>"HardwareEngine.pdf",
		  "presentation"=>"HardwareEngine_talk.pdf",
		  "abstract"=>"With the rapid progress of network technology,
				several OC-192c lines are settled across the
				Pacific Ocean and the Atlantic Ocean and now 10Gbps
				network is ready for round-the-world communication.
				However, it is difficult to use the bandwidth efficiently
				by TCP/IP communication.<br/>
				We develop programmable 10Gbps wire-rate packet
				analyzer TAPEE (Traffic Analysis Precise Enhancement
				Engine), which aims to collect packet header logs
				with the 10Gbps wire-rate speed adding time stamp.
				This paper shows our design and implementation of
				TAPEE, then its experimental observations; distribution
				of data and ACK packets and its visualization for
				(a) comparison of real LFN and pseudo LFN with artificial
				long latency, (b) comparison of with and without
				hardware support for TCP. Using these observations,
				we tuned the performance, on the real LFN with 500
				ms RTT, we attained 8.8049Gbps of 9.28Gbps WAN
				PHY bottleneck with TOE (TCP Offload Engine), and
				6.96Gbps of 8.6Gbps PCI-X 1.0 bottleneck without
				TOE."),
	"Soudan"=>array("authors"=>"Sebastien Soudan*; Romaric Guillier*; Ludovic Hablot*; Yuetsu Kodama**; Tomohiro Kudoh**; Fumihiro Okazaki**; Ryousei Takano**; Pascale Primet*** <br>(*LIP, Ecole Normale Supérieure de Lyon, FR; AIST, JP; ***ENS-Lyon, INRIA, EC-Lyon, FR)",
		  "title"=>"Investigation of Ethernet switches behavior in presence of contending flows at very high-speed",
		  "pages"=>"49-54",
		  "paper"=>"EthernetSwitches.pdf",
		  "presentation"=>"",
		  "abstract"=>"This paper examines the interactions between high
				speed Ethernet switches and TCP in high bandwidth delay
				product networks. First, the behavior of a range of Ethernet
				switches when two long lived connections compete to the same
				output port is investigated. Then we study the impact of these
				switches behaviors on TCP protocols in long and fast networks
				(LFNs). Several conditions in which scheduling mechanisms
				introduce heavy unfair bandwidth sharing and loss burst which
				impact TCP performance are shown."
			),
	"Banerjee"=>array("authors"=>"Amitabha Banerjee; Biswanath Mukherjee; Dipak Ghosal <br>(UC Davis, US)",
		  "title"=>"Modeling and Analysis to Estimate the End-System Performance Bottleneck Rate for High-Speed Data Transfer",
		  "pages"=>"55-60",
		  "paper"=>"EndSystems.pdf",
		  "presentation"=>"EndSystems_talk.pdf",
		  "abstract"=>"The bandwidth available in a high-speed backbone
				network today is much greater than the capacity at the edge.
				As an example, when the transmission line rate is 10 Gbps, the
				end computing machine (end-system) may not be able to keep
				up with the arriving data rate and is hence often a bottleneck
				for data transfer. A key deficiency in most transport protocols is
				the lack of an accurate estimate of this bottleneck rate. In the
				absence of the same, the sender often overshoots the receiver’s
				capacity resulting in packet losses. When the sender receives
				feedback about the packet losses, it throttles the sending rate.
				Repeat occurrences of the same limits the performance of endto-
				end data transfer.<br/>
				We propose a mechanism to determine the end-system bottleneck
				rate. We employ a Stochastic Reward Net (SRN) queuing
				network model which captures different system components such
				as the processor, disk, etc., as well as the current workload in
				terms of the number of CPU-bound and I/O-bound tasks. The
				sending rate which would yield the best performance for data
				transfer to the end-system is estimated from the above model. We
				define this rate as the effective bottleneck rate. Finally, we validate
				our analytical model on an experimental testbed and demonstrate
				that matching the sending rate with the effective bottleneck rate
				leads to improved performance of end-to-end data transfer."
			),

	"Allman"=>array("authors"=>"Mark Allman*; Shudong Jin**; Dan Liu**; Limin Wang***; <br>(*ICIR, US; **Case Western Reserve University, US; ***Bell Labs, US)",
		  "title"=>"Congestion Control Without a Startup Phase",
		  "pages"=>"61-66",
		  "paper"=>"WithoutStartup.pdf",
		  "presentation"=>"WithoutStartup_talk.pdf",
		  "abstract"=>"The traditional TCP congestion control scheme
				often yields limited performance due to its conservative Slow
				Start algorithm, which can require many round-trip times to
				reach an appropriate sending rate that well utilizes the available
				capacity. A number of techniques in the literature address this
				issue, but we offer a different approach that is simple yet
				blunt: allow TCPs to begin transmission at whatever rate they
				deem appropriate. We term this technique “Jump Start”. While
				Jump Start simply removes the traditional startup phase, the
				remainder of TCP’s congestion control algorithms (additiveincrease/
				multiplicative-decrease and timeout mechanism) remain
				intact. Our approach in this paper has two components. First,
				we attempt to understand the potential implications of removing
				TCP’s startup phase. Second, we step back and attempt to
				identify network characteristics and techniques that may make
				Jump Start amenable to real networks. This paper represents an
				initial exploration of these ideas."
			),
	"Jin"=>array("authors"=>"Shudong Jin; Dan Liu <br>(Case Western Reserve University, US)",
		  "title"=>"Decoupling End-to-End Efficiency and Fairness Control in High Bandwidth-Delay Product Networks",
		  "pages"=>"67-72",
		  "paper"=>"DecouplingFairness.pdf",
		  "presentation"=>"DecouplingFairness_talk.pdf",
		  "abstract"=>"To address the inefficiency of standard TCP's additive-increase
				multiplicative-decrease (AIMD) control in high bandwidth-delay product
				networks, several end-to-end congestion control algorithms were
				proposed. However, these proposals, for example High-Speed TCP and
				Scalable TCP, have failed to decouple efficiency control and fairness
				control. Often high aggressiveness (for good efficiency) is achieved at
				the price of poor fairness.  The proposed Exponential TCP (EXP-TCP) is
				an end-to-end algorithm that decouples efficiency control and fairness
				control.  With EXP-TCP, first the absolute increment of congestion
				window size $cwnd$ grows exponentially, resulting in $O(\log(cwnd))$
				time between two consecutive loss events in steady-state. This
				exponential growth provides high efficiency even when the bandwidth is
				extremely high.  Second, the relative growth rate of two competing flows
				is proportional to $\sqrt{cwnd}$, resulting in the
				convergence-to-fairness property even with synchronized losses.  EXP-TCP
				is simple and uses only two parameters: multiplicative decrease
				parameter $\beta$ and exponential increase parameter $\gamma$.  We use
				simulations to evaluate EXP-TCP under various configurations, including
				a wide range of bottleneck bandwidth, a large number of competing flows,
				mixed long-lived flows and short Web-like traffic, and sudden
				increase/decrease of traffic demand.
			"),
	"Leith"=>array("authors"=>"Douglas Leith*; John Heffner**; Robert Shorten*; Gavin McCullagh* <br>(*Hamilton Institute at NUI Maynooth, IE; **Pittsburgh Supercomputing Center, US)",
		  "title"=>"Delay-based AIMD congestion control",
		  "pages"=>"73-78",
		  "paper"=>"DelayAIMD.pdf",
		  "presentation"=>"DelayAIMD_talk.pdf",
		  "abstract"=>"Our interest in the paper is investigating whether it
				is feasible to make modifications to the TCP congestion control
				algorithm to achieve greater decoupling between the performance
				of TCP and the level of buffer provisioning in the network. In
				this paper we propose a new family of delay-based congestion
				control algorithms that we refer to as delay-based AIMD.
			"),

	"Guillier"=>array("authors"=>"Romaric Guillier* ; Ludovic Hablot*; Yuetsu Kodama**; Tomohiro_ Kudoh**; Fumihiro Okazaki**; Pascale Primet*** ; Sebastien Soudan*; Ryousei Takano** <br>(*LIP, Ecole Normale Supérieure de Lyon, FR; **AIST, JP; ***ENS-Lyon, INRIA, EC-Lyon, FR)",
		  "title"=>"A study of large flow interactions in high-speed shared networks with Grid5000 and GtrcNET-10 instruments",
		  "pages"=>"79-84",
		  "paper"=>"Grid5000.pdf",
		  "presentation"=>"",
		  "abstract"=>"We consider the problem of huge data transfers and
				bandwidth sharing in the context of grid infrastructures where
				transfer delay bounds are required. This article investigates large
				flow interactions in a real very high-speed network and aim at
				contributing to high-speed TCP variants evaluation by providing
				precise measurements. It also gives an insight on the behaviour
				of protocols under different realistic congestion and long latency
				conditions in 10 Gbps experimental emulated environments.
				Keywords: bulk data transfers, bandwidth sharing, high speed
				transport protocol experimentation."
			),
	"Lee"=>array("authors"=>"George Lee; Lachlan Andrew; Ao Tang; Steven Low<br>(California Institute of Technology, US)",
		  "title"=>"WAN-in-Lab: Motivation, Deployment and Experiments",
		  "pages"=>"85-90",
		  "paper"=>"WANinLab.pdf",
		  "presentation"=>"WANinLab_talk.pdf",
		  "abstract"=>"WAN-in-Lab is a hardware testbed for the design,
					development, testing and evaluation of high speed network
					protocols. It uses real carrier-class networking hardware to avoid
					the artifacts introduced by network simulation and emulation,
					while being localized to allow detailed measurement of network
					performance. WAN-in-Lab is an open resource, available for use
					by the networking community. This paper describes the structure
					of WAN-in-Lab and the rationale behind it, issues encountered,
					and experimental results that illustrate its applications.
			"),
	"Shimonishi"=>array("authors"=>"Hideyuki Shimonishi*; Medy Sanadidi**; Tutomu Murase* <br>(*NEC Corp., JP; **UCLA, US)",
		  "title"=>"Assessing Interactions among Legacy and High-Speed TCP Protocols",
		  "pages"=>"91-96",
		  "paper"=>"AssessingInteractions.pdf",
		  "presentation"=>"AssessingInteractions_talk.pdf",
		  "abstract"=>"It has been recognized that TCP throughput
				deteriorates in high-speed networks with large bandwidth-delay
				product, and new congestion control algorithms have been
				proposed to address such deterioration. Assuming that the
				proposed protocols would be in general used in the Internet, it is
				imperative to study the interaction among flows of different
				protocols, in addition to the interaction among flows using the
				same protocol. In this paper, we discuss a method of assessing the
				interaction among different protocols. By applying the same
				experiment setup, including network configuration, flow
				parameters, and workload of each flow, to multiple experiment
				runs for the different protocols, we can assess flow-by-flow and
				file-by-file behavior of different protocols. We provide some
				numerical results in networks with multiple bottlenecks, a large
				number of short-lived and long-lived flows, and variety of RTTs.
				The results show that, while all high-speed TCPs are effective in
				improving efficiency, they exhibit different detailed characteristics.
				When compared to previous schemes, CUBIC, Compound-TCP,
				and TCP-AdaptiveReno improve, to varying degrees,
				RTT-fairness and Reno-friendliness. Our results also show that,
				due to slow-start behavior of short flows, delay-based control is
				not very effective in improving RTT-fairness as expected. Based
				on the insight above, we have modified the delay-based control
				part of TCP-AdaptiveReno and the results show its highly
				balanced efficiency, friendliness, and fairness.
			"),

	"Panel2"=>array("authors"=>"",
		  "title"=>"What performance measures of congestion control algorithms matter? /<br/> How do transport protocols affect applications?",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),
	"PascalePrimet"=>array("authors"=>"Pascale Primet (INRIA, FR)",
		  "title"=>"",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),
	"KatsushiKobayashi"=>array("authors"=>"Katsushi Kobayashi (AIST, JP)",
		  "title"=>"",
		  "paper"=>"",
		  "presentation"=>"Panel2_kobayashi.pdf",
		  "abstract"=>""),
	"TimShepard"=>array("authors"=>"Tim Shepard (Independent contractor)",
		  "title"=>"",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),
	"RalphNiederberger"=>array("authors"=>"Ralph Niederberger (FZJ, DE)",
		  "title"=>"",
		  "paper"=>"",
		  "presentation"=>"",
		  "abstract"=>""),

	"Tutorial"=>array("authors"=>"Steven H. Low (Caltech)",
		  "title"=>"Networking theory for practitioners (free for students)",
		  "paper"=>"",
		  "presentation"=>"Tutorial_Low.pdf",
		  "abstract"=>""),

	"Site visit"=>array("authors"=>"Lachlan Andrew (Caltech)",
		  "title"=>"Tour of Caltech's WAN-in-Lab testbed (free)",
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
	echo '<div class="top"><p style="text-align:right;margin:0px"><a href="#7 February, 2007">7 Feb</a>|<a href="#8 February, 2007">8 Feb</a>|<a href="#9 February, 2007">9 Feb</a></p></div>'."\n";

		day     ("7 February, 2007");
		gap     ("8:30-9:00", "Registration");
		gap     ("8:30-9:00", "Breakfast (provided)");
		session ("9:00-10:20", "Plenary 1", "Doug Leith", array("Plenary2"), $papers);
		gap     ("10:20-10:40", "Break");
		session ("10:40-11:50", "Theoretical Performance Analysis", "Michael Welzl", array("Cai", "Shorten", "Leith"), $papers);
		gap     ("11:50-13:00", "Lunch (provided)");
	  	session ("13:00-14:10", "Packet Management", "Medy Sanadidi", array("Bhandarkar", "Feng", "White"), $papers);
		gap     ("14:10-14:40", "Break");
	  	session ("14:40-15:50", "Novel Flow Control Protocols", "TBA", array("Kaneko", "Vacirca", "Munir"), $papers);
		gap     ("15:50-16:10", "Break");
	  	session ("16:10-17:30", "Panel Session 1", "Lars Eggert (Nokia, DE)", array("Panel1","TedFaber","MurariSridharan", "InjongRhee", "StephenHemminger", "BobBriscoe"), $papers);
		gap     ("19:00-", "Dinner (provided)");
		endday  ();
		
		day     ("8 February, 2007");
		gap     ("8:30-9:00", "Breakfast (provided)");
		session ("9:00-10:20", "Plenary 2", "Lachlan Andrew", array("Plenary1"), $papers);
		gap     ("10:20-12:40", "Break");
		session ("10:40-11:50", "Hardware", "TBA", array("Yoshino", "Soudan", "Banerjee"), $papers);
		gap     ("11:50-13:25", "Lunch (provided)");
	  	session ("13:25-14:10", "New Approaches", "Katsushi Kobayashi", array("Allman", "Jin"), $papers);
		gap     ("14:10-14:40", "Break");
	  	session ("14:40-15:50", "Empirical Performance Analysis", "Pascale Primet", array("Guillier", "Lee", "Shimonishi"), $papers);
		gap     ("15:50-16:10", "Break");
	  	session ("16:10-17:30", "Panel Session 2", "Richard Hughes-Jones (University of Manchester)", array("Panel2","PascalePrimet", "KatsushiKobayashi", "TimShepard", "RalphNiederberger"), $papers);
		endday  ();
		
		day     ("9 February, 2007");
		gap     ("9:00-10:00", "Breakfast (provided)");
		session ("10:00-11:15", "Tutorial", "", array("Tutorial"), $papers);
		gap     ("11:00-14:00", "Break (Box lunch provided to tutorial attendees.) Optional shuttle bus for WAN-in-Lab site visit.");
		session ("14:00-16:00", "Site Visit", "", array("Site visit"), $papers);
		endday  ();
		
	} else {
		print "<table border=1>\n";
		print "<tr><th>Title</th><th>Authors</th></tr>\n";
		foreach ($papers as $p) {
		    print "<tr><td>".$p["title"]."</td><td>".$p["authors"]."</td></tr>\n";
		}
	}
	print "</table>\n";

?>
 
</p>
<?php include ($ROOT."\\templates\\footer.php"); ?>
