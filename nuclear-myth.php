<? $foot=1; 
   $on = "N<sub>o</sub>";
   $oa = "A<sub>o</sub>";
   $op = "P<sub>o</sub>";

   $ixmap=[];
function counter($what) {
  global $ixmap;
  if(!array_key_exists($what, $ixmap)) {
    $ixmap[$what] = 0;
  }
  $ixmap[$what]++;
  return $ixmap[$what];
}

function table() {
  $number = counter('table');
  return "<b><a name='tbl-$number'></a>Table $number.</b> ";
}
function img() {
  $number = counter('img');
  return "<b><a name='img-$number'></a>Image $number.</b> ";
}
?>
<!doctype html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Roboto+Slab&family=Cutive+Mono&display=swap" rel="stylesheet"> 
<link href="silicon.css?1" rel="stylesheet">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@emorobot" />
<meta name="twitter:description" content="Silicon Folklore" />
<meta name="twitter:image" content="https://siliconfolklore.com/nuclear-twit.jpg" />
<meta name="twitter:creator" content="@emorobot" />
<meta name="twitter:url" content="https://siliconfolklore.com/nuclear-myth.html" />
<meta name="twitter:title" content="Was the Internet created for nuclear war?" />
<meta name="og:title" content="Silicon Folklore" />
<meta name="og:description" content="Was the Internet created for nuclear war?" />
<meta name="twitter:description" content="Was the Internet created for nuclear war?" />
<meta name="og:image" content="https://siliconfolklore.com/nuclear-fb.jpg" />
<title>Was the Internet created to survive a nuclear strike? | Silicon Folkore</title>
</head>
<body>
  <main>
<h1 id="silicon-folklore"><a href="/">Silicon Folklore</a></h1>
<style>
#h > img { 
  background: rgba(202, 199, 243, 50%);
  box-shadow: none;
  margin: 0.15rem;
  width: 30%
}
#h img:nth-child(3n) {
  background:rgba(239, 242, 198,50%);
}
#h img:nth-child(2n) {
  background:rgba(242,198,217,50%);
}
#h img:nth-child(4n) {
  background:rgba(198, 242, 223,50%);
}
#h h2 {margin-top: 1rem;}
#h h4 {font-size: 1rem;}
#h {
 margin-top: 2rem;
 display:inline-block;
 text-align: center;
 font-size: 0
}

</style>
<div id="h">
<img alt="Nine images depicting the layout of the ARPANET between 1969 and 1978 as a stylized header for the article." src=Report4799AHistoryOfArpanetTheFirstDecade_0023.png>
<img src=Report4799AHistoryOfArpanetTheFirstDecade_0024.png>
<img src=Report4799AHistoryOfArpanetTheFirstDecade_0025.png>
<img src=Report4799AHistoryOfArpanetTheFirstDecade_0026.png>
<img src=Report4799AHistoryOfArpanetTheFirstDecade_0027.png>
<img src=Report4799AHistoryOfArpanetTheFirstDecade_0028.png>
<img src=Report4799AHistoryOfArpanetTheFirstDecade_0030.png>
<img src=Report4799AHistoryOfArpanetTheFirstDecade_0031.png>
<img src=Report4799AHistoryOfArpanetTheFirstDecade_0032.png>
<h2 id="was-the-internet-designed-to-survive-a-nuclear-attack">Was The Internet designed to survive a nuclear attack?</h2>
</div>
<p>The early Internet looked nothing like mountainside NORAD bunkers you see in movies. Instead it was computers sitting in normal offices in university buildings without any backup power, fortification, security (network or physical) and no connections to military communication at all. Designed for World War 3? The children in <a href="https://www.youtube.com/watch?v=LWH4tWkZpPU">"Duck and Cover"</a> from 1951 had a better chance of surviving.</p>
<p>The computing on doomsday story is also disputed by people who did the actual designing of the Internet.<sup><a href="#jcr"><?= $foot++ ?></a></sup></p>
<p>In texts that give Internet history a serious treatment, such as the 1996 <a href="https://archive.org/details/wherewizardsstay00haf_vgj/">“Where Wizards Stay Up Late - The Origin of the Internet”</a> you can <a href="https://archive.org/details/wherewizardsstay00haf_vgj/page/n4/mode/2up?q=nuclear">search the word “nuclear”</a> and come up with passages like this:</p>
<blockquote>
<p><a href="https://en.wikipedia.org/wiki/Robert_Taylor_(computer_scientist)">Bob Taylor</a>… was also on a personal mission to correct an inaccuracy of long standing. Rumors had persisted for years that the ARPANET had been built to protect national security in the face of a nuclear attack. It was a myth that had gone unchallenged long enough to become widely accepted as fact.</p>
</blockquote>
<p>and:</p>
<blockquote>
<p>Lately, the mainstream press had picked up the grim myth of a nuclear survival scenario and had presented it as an established truth. When <a href="http://content.time.com/time/magazine/0,9263,7601940725,00.html">TIME magazine committed the error</a>, Taylor wrote a letter to the editor, but the magazine didn’t print it. The effort to set the record straight was like chasing the wind; Taylor was beginning to feel like a crank.</p>
</blockquote>
<p>Here’s <a href="https://en.wikipedia.org/wiki/Vint_Cerf">Vint Cerf</a>, in <a href="https://youtu.be/lWyv4wU-WNA?t=4441">July 2022 still trying to correct things</a>. Somehow this story got out of hand and the people who were there have been trying to politely correct it in vain for decades.</p>
<p>Apparently surviving a nuclear war is a more memorable story than wanting to try out the first massively parallel computer, the <a href="https://en.wikipedia.org/wiki/ILLIAC_IV">ILLIAC IV</a>. The designer of the machine, <a href="https://en.wikipedia.org/wiki/Daniel_Slotnick">Daniel Slotnick</a>, was also a chief architect of the ARPANET which was built partially to get the computer to be online in order to justify the cost of building the computer. This way more scientists could use the expensive machine doing remote time-sharing.</p>
<p>See you glazed over that. I know it. Isn’t <a href="https://jacobin.com/2022/06/internet-privatization-profit-centralization-democracy">“bringing the mainframe to the battlefield”</a> more sexy? That’s June 2022.</p>
<p>To find out where this story came from we're going to go back to when hard drives were measured in megabytes and colorful floppies arrived in your mail promising you 100 free hours online.</p>
<h2 id="where-the-internet-came-from-before-1991">Where the Internet came from before 1991</h2>
<p>Prior to 1991 there is no history of the Internet narrative which has the nuclear origin story.<sup><a href="#prior"><?= $foot++ ?></a></sup></p>
<p>Instead, they more closely resembles the one Cerf and Taylor of the ARPANET project advocate for. In April 1988 for instance, <a href="https://twitter.com/slfisher">Sharon Fisher</a><sup><a href="#sharon"><?= $foot++ ?></a></sup> in <a href="https://books.google.com/books?id=pj0EAAAAMBAJ&amp;pg=PA57&amp;hl=en&amp;sa=X&amp;ved=2ahUKEwiGz_ml97H6AhXtMEQIHV5EC2oQ6AF6BAgEEAI#v=onepage&amp;q&amp;f=false">Infoworld says</a>:</p>
<blockquote>
<p>The network was originally set up for universities and research organizations to exchange information efficiently</p>
</blockquote>
<aside>
<h5>Ever used internet?</h5>
<p>Depending on when that was written, there might be no typo there.</p>
<p>If you click through the above article you'll see a linguistic phenomena: It's called Internet without the word "the" preceding it. This was pretty common through about 1994. Here's <a href="https://youtu.be/U_o8gerare0?t=189">The Computing Chronicles S11E7 from 1993/03</a> doing their "history of Internet".</p>
<p>"I'm on Internet" sounds weird to us but "I'm on AOL" does not - and that was basically the logic. The reverse also happens. Usenet is called "The Usenet" in the article and in the 1980s, ARPANET is often "The ARPAnet". 
</aside>
<p>DARPA has a similar story in <a href="https://www.researchgate.net/publication/235051902_DARPA_Technical_Accomplishments_An_Historical_Review_of_Selected_DARPA_Projects_Volume_1">“DARPA Technical Accomplishments”</a>, from 1990, ARPANET is in the “Information Processing” section claiming it's part of a larger “batch-processing” to “time-sharing” revolution (<a href="#time-sharing">more about this later</a>). From section 20-1:</p>
<blockquote>
<p>After time sharing had been demonstrated and its impact began to be widespread in the mid 1960’s, the next logical step in this program was the linking of computers and terminals by communications networks, so that computer capabilities, programs and file resources could be accessed readily and shared remotely. The mainstream of ARPANET development involved individuals and institutions in the computer research communities which were supported by the growing ARPA IPTO program.</p>
</blockquote>

<p>So what happened? We're going to set our Wayback machine to 1991 to find out. But first, homework!</p>
<h4>Common Knowledge or "Come on! Knowledge!"</h4>

<p>Before we continue we need a headache-inducing distinction between <a href="https://en.wikipedia.org/wiki/Common_knowledge">"common knowledge or wisdom"</a> and <a href="https://en.wikipedia.org/wiki/General_knowledge">"general knowledge"</a>. Common knowledge is specific to a community and general knowledge is not. For instance, cultural customs are common knowledge.</p>
<p>This distinction is important. If you meet a foreigner, you'll likely tell them about regional laws or customs. You don't need to cite anything or know the history to be correct. It's not general knowledge because you also presume the foreigner doesn't know it.</p>
<p>In our context, <b><em>common knowledge is a statement which can be falsified and verified wherein the one who states doesn't feel an obligation to (1) falsify or verify the statement and (2) provide a mechanism for others to do so</em></b>. In more coarse language, these are facts that go uncited.</p>
<p>You may notice there is a requisite of commonality for common knowledge. When trying to figure out narrative histories, whether someone cites a passage or not is a forensic tool of how common they considered the knowledge. Generally speaking, presuming good intent, the more careful a narration is, the more likely we are to an early version of it. This is of course a statistical and not anecdotal statement.</p>

<p>Alright, good homework. You get an A+. Let's continue.</p>
<h2 id="im-sure-nobody-will-notice">1991: Network World Vol.8-33 P65&sect;12. It Begins.</h2>
<p>The first instance<sup><a href="#first"><?= $foot++ ?></a></sup> of the misattribution is both a victim of how chronology works and slight journalistic error. The <a href="https://books.google.com/books?id=mREEAAAAMBAJ&amp;pg=PA65&amp;hl=en&amp;sa=X&amp;ved=2ahUKEwiSyfnLqrT6AhUXLEQIHTjLBmEQ6AF6BAgCEAI#v=onepage&amp;q&amp;f=false">Aug 19, 1991 issue of Network World</a> has a biography on someone who will be important in our story, <a href="https://en.wikipedia.org/wiki/Paul_Baran">Paul Baran</a>. It’s a long passage. I snipped the relevant parts below:</p>
<blockquote>
  <p>… questions were being asked regarding the U.S.’s ability to survive a pre-emptive nuclear attack with enough of its military capability intact … Baran and his Rand colleagues decided to keep the packet-switching research unclassified… After delays caused by political issues, the government commissioned a public net based on Baran’s research <em>(my note: false)</em>. In 1969, the Defense Advanced Research Projects Agency completed the first packet switched net, dubbed ARPANET.</p>
</blockquote>
<p>This is the correct timeline, but not the correct chain of events. It’s not the last time it will be made.</p>
<p>This is a fairly buried reference, literally right near the end of the magazine, after the small back-of-the issue black and white ads. But this is 1991, 13 days after <a href="https://en.wikipedia.org/wiki/Tim_Berners-Lee">Tim Berners-Lee</a> <a href="https://www.w3.org/People/Berners-Lee/1991/08/art-6484.txt">announced the WorldWideWeb</a>. Who cares about the Internet except for a bunch of nerds and weirdos? I'm sure this Internet thing will continue to be obscure and irrelevant.</p>
<p>Anyway, let's move on to 1992.</p>
<h2 id="tying-it-together">1992: The Inter-what?!</h2>
<p>So apparently the internet is becoming a big deal. The first prominant and more direct "Internet was designed to survive bombs" connection is in <a href="https://archive.org/details/wholeinternetuse00krol/page/10/mode/2up">“The Whole Internet User’s Guide &amp; Catalog” from September 1992</a> by <a href="https://en.wikipedia.org/wiki/Ed_Krol">Ed Krol</a>. This is one of those books that’s so successful he came back to pen two sequels. <a href="https://www.amazon.com/Internet-Catalog-Intanetto-yuzazu-Japanese/dp/4900718122/">Amazon even sells a Japanese version</a>. Here, near the beginning of the book, we get our narrative. However, instead of “nuclear” it’s an unspecified “bomb attack”:</p>
<figure>
<img src="first-reference.png" alt="An image of the first page of the book. The important text is 'research about how to build networks that could withstand partial outages (like bomb attacks) and still function'" /><figcaption><?= img() ?>Is this the beginning?</figcaption>
</figure>
<p>It’s worth noting this is an honest error connecting a project that didn’t get approved, the bomb resiliant project by Paul Baran proposed to the Air Force, with the ARPA Network project (more on both of these later). Specifically this is referring to what Baran called <a href="https://www.rand.org/content/dam/rand/pubs/research_memoranda/2006/RM3103.pdf">“hot-potato routing”</a> in 1964.</p>
<p>Without knowing the individuals involved in each project it is understandable to assume they are connected; that a later effort was a result of an earlier effort as opposed to an independent one.</p>
<p>The ARPA narrative continues to persist as well such as in the 1992 <a href="https://archive.org/details/dnsbindinnutshel00albi/page/n29/mode/2up">“DNS and BIND in a nutshell”</a> by <a href="https://www.linkedin.com/in/paul-albitz-9602294/">Paul Albitz</a> and <a href="https://www.linkedin.com/in/cricketliu/">Cricket Liu</a>:</p>
<blockquote>
  <p>The original goal of the ARPANET was to allow government contractors to share expensive or scarce computing resources. <em>(my note: time-sharing)</em> From the beginning, however, users of the ARPANET also used the network for collaboration. This collaboration ranged from sharing files and software and exchanging electronic mail - to joint development and research using shared remote computers.</p>
</blockquote>
<p>Looks like there's now two fairly incompatible stories. Well I'm sure this will be tidied right up. Hold on, I heard from the future. Apparently no, it's just a bigger mess.</p>
<h2 id="what-about-a-bigger-bomb">1993: This thing's geting popular&hellip;</h2>
<p>By 1993, multi-generational references start to pop up. For instance, <a href="https://archive.org/details/internetfordummi03levi/page/11/mode/1up">The Internet for Dummies</a> elaborates multiple narratives including from Ed Krol's 1992 work down to oddly specific details (it also alludes to <a href="https://en.wikipedia.org/wiki/Flag_day_(computing)">Flag Day</a> but erroneously dates it in 1982. For Dummies indeed&hellip;):</p>
<figure>
<img src="inet-for-dummies.jpg" alt="Two screenshots comparing an almost identical passage between the two books. The text is 'these days backhoes cutting cables are more of a threat' compared with 'an errant backhoe cutting a cable is just as much of a threat'">
<figcaption><?= img() ?>“The Whole Internet User’s Guide & Catalog”, 1992 versus IDG's "Internet for Dummies", 1993.</figcaption>
</figure>
<p>The generic bomb gets an upgrade in what was at the time, a best-seller, the 1993 text, “The Internet Navigator” by <a href="https://www.planetary.org/profiles/paul-gilster">Paul Gilster</a> which, <a href="https://archive.org/details/internetnavigato00paul/page/14/mode/2up">on page 14 says in an uncited passage</a>:</p>
<blockquote>
<p>The ARPANET was a network connecting university, military, and defense contractors; it was established to aid researchers in the process of sharing information, and not coincidentally to study how communications could be maintained in the event of nuclear attack.</p>
</blockquote>
<p>Ladies and gentlemen, we’ve gone nuclear.</p>
<aside>
<h5>Paul Gilster Responds</h5>
<p>Paul Gilster <a href="gilster-email.txt">responded to my inquiry</a> on this article on Sep 27, 2022. Here's what he had to say:</p>
<blockquote>
  I wish I could come up with my source for it. After the book was published, I began to wonder about the statement and went back to verify where I had found it, and amidst all my research materials I couldn't find the source. So I'm drawing a blank here. I know I pulled it from more than one source but that's about it, and I've wished I could clarify it, since it now eludes me. At this point I wish I hadn't written it, given the trajectory of the idea as you recount in your article. Clearly it was an egregious error.
</blockquote>
</aside>
<p>Also, notably, in February of 1993, the science fiction author <a href="https://en.wikipedia.org/wiki/Bruce_Sterling">Bruce Sterling</a> writes perhaps the most compelling narrative fixture of what becomes a later source. This text <a href="https://groups.google.com/g/alt.politics.datahighway/c/FNqaxfFk2hU/m/2E8hxTU823UJ">was shared around USENET</a> throughout 1993. USENET was in practice, social networking over email.</p>
<p>In it there’s a clean narrative line that’s drawn between Paul Baran and ARPANET. It’s a long passage so some cutting was done:</p>
<blockquote>
<p>…the RAND Corporation, America’s foremost Cold War think-tank, faced a strange strategic problem. How could the US authorities successfully communicate after a nuclear war?</p>
<p>Postnuclear America would need a command-and-control network, linked from city to city, state to state, base to base. But no matter how thoroughly that network was armored or protected, its switches and wiring would always be vulnerable to the impact of atomic bombs. A nuclear attack would reduce any conceivable network to tatters. …</p>
<p>RAND mulled over this grim puzzle in deep military secrecy, and arrived at a daring solution. The RAND proposal (the brainchild of RAND staffer Paul Baran) was made public in 1964. In the first place, the network would <em>have no central authority.</em> Furthermore, it would be <em>designed from the beginning to operate while in tatters.</em> …</p>
<p>During the 60s, this intriguing concept of a decentralized, blastproof, packet-switching network was kicked around by RAND, MIT and UCLA. The National Physical Laboratory in Great Britain set up the first test network on these principles in 1968. <b>(my note: this is the transition)</b> Shortly afterward, the Pentagon’s Advanced Research Projects Agency decided to fund a larger, more ambitious project in the USA. The nodes of the network were to be high-speed supercomputers (or what passed for supercomputers at the time). These were rare and valuable machines which were in real need of good solid networking, for the sake of national research-and-development projects.</p>
</blockquote>
<p>Look how smooth that is with the phrase "Shortly afterward". He's not exactly <em>saying</em> they're explicitly connected, just that's the chronology. Someone misreading this as a claim of attribution probably can't be faulted.</p>
<p>This connection gets repeated in texts such as 1994’s <a href="https://archive.org/details/internetconnecti0000quar/page/20/mode/2up">“The Internet connection: system connectivity and configuration”</a> where the author, <a href="https://en.wikipedia.org/wiki/John_Quarterman">John Quarterman</a> states without citation (going back to our "common knowledge" definition above) in a section titled “Surviving a Nuclear War” a very similar passage he stated in a 1993 text co-authored with Smoot Carl-Mitchell, <a href="https://archive.org/details/practicalinterne0000carl/page/4/mode/2up">“Practical Internetworking with TCP/IP and Unix”</a>:</p>
<figure>
<img src="quarterman.png" alt="Another split image demonstrating an almost identical passage between two books. The passage reads 'The ARPANET was a direct product of the Cold War. ARPA itself was formed in response to the launching of the Sputnik satellite by the Soviet Union in 1957. It was intended to ensure the US got ahead in military research and stayed there. As DoD urgently wanted military command and control networks that could survive a nuclear war...'" /><figcaption><?= img() ?>Quite similar</figcaption>
</figure>
<p>It’s worth noting that John Quarterman might have had his mind changed on this. In an earlier, widely cited, 1990 text by him, <a href="https://archive.org/details/matrixcomputernet00quar/page/142/mode/2up">"The Matrix: Computer Networks and Conferencing Systems Worldwide"</a>, he used a citation and told a much more accurate history as follows:</p>
<blockquote>
<p>In the beginning, ARPA…noticed that its contractors were tending to request the same resources (such as databases, powerful CPUs, and graphics facilities) and decided to develop a network among the contractors that would allow sharing such resources [Roberts 1974].</p>
</blockquote>
<p>Why didn’t he just stick with that?</p>
<aside>
<h5>John Quarterman Responds</h5>
<p>John Quarterman was kind enough to <a href="quarterman-email.txt">write a detailed response</a> to my inquiry on this article on Sep 28, 2022. Here's the relevant passages:</p>
<blockquote>
  <p>The Matrix is a history and policy book. The other two you quote are, as their titles indicate, about technical aspects of how to use the stuff&hellip;</p>
  <p>&hellip;As for me, I don't rightly recall, it was long common wisdom. Since I worked at <a href="https://en.wikipedia.org/wiki/Raytheon_BBN">BBN</a>, which was full of MIT people who knew <a href="https://en.wikipedia.org/wiki/J._C._R._Licklider">Licklider</a>, I would guess it was some derivation of Licklider's Pentagon and ARPA work. Whose work shows that there were indeed Cold War nuclear bomb roots of the ARPANET, even though that network was not directly designed to survive a nuclear attack.</p>
</blockquote>
</aside>
<p>Indeed, it looks like he had two tracks in his writing: one for a general audience and one with much more rigor. For instance, in the <a href="https://archive.org/details/sim_unix-review_1993-08_11_8/page/n79/mode/2up">before August</a>, 1993 more academic text with <a href="https://dl.acm.org/profile/81100325226">Susanne Wilhelm</a>, <a href="https://archive.org/details/unixposixopensys0000quar/page/194/mode/2up">"UNIX, POSIX, and Open Systems: The Open Standards Puzzle"</a>, the story given is:</p>
<blockquote>
  <p>
  &hellip;The ARPANET was created by DARPA as an experiment in and platform for research in packet switched networking.
  </p>
</blockquote>

<p>Regardless, the "common knowledge" narrative continues to evolve.</p>

<h2 id="no-wait-wait-it-was-even-more-connected">1994: The Cathedral Becomes a Bazaar</h2>
<p>It's 1994! Along with GeoCitites, Lycos and CDNow, we get perhaps the first claim of a direct causal connection from <a href="https://www.google.com/books/edition/INSCOM_Journal/wqkrAAAAYAAJ?hl=en&amp;gbpv=1&amp;pg=RA3-PA10&amp;printsec=frontcover">INSCOM (Army Intelligence &amp; Security Command) in March 1994 on page 10</a>:</p>
<blockquote>
<p>…says University of Pennsylvania Telecommunications Professor David Farber, “that the Internet is actually a cold war relic, designed in the 1960s as a decentralized military communications system <b>capable of surviving a nuclear attack</b>. The Internet, which has grown explosively ever since Hurricane Andrew in 1992, has now proved its usefulness for emergency action in the civilian world.”</p>
</blockquote>
<p>There's that popular phrase "capable of surviving a nuclear attack" starting up. It's a good search term if you just feel like reading a mountainful of versions of this narrative. <a href="https://en.wikipedia.org/wiki/David_J._Farber">David Farber</a> is not a nobody. Designer of predecessor networks such as <a href="https://en.wikipedia.org/wiki/CSNET">CSNET</a>, <a href="https://en.wikipedia.org/wiki/National_Science_Foundation_Network">NSFNet</a>, and <a href="https://en.wikipedia.org/wiki/National_research_and_education_network">NREN</a>, he’s a Bell Labs, SDS and Rand Corporation alumni. That last one, RAND, will be more important in our story.</p>
<p>We also find the older narrative “ARPANET is an indirect consequence of nuclear war planning” starting to become "common knowledge" such as in <a href="https://www.google.com/books/edition/Japanese_Technical_Literature_Bulletin/gLIvm9n9a3EC?hl=en&amp;gbpv=1&amp;pg=RA7-PA5&amp;printsec=frontcover">“Japan’s Information Highway” from Nov 26, 1994</a>, also uncited:</p>
<blockquote>
<p>Spawned by a Pentagon doomsday scheme to keep US military computers operating in the event of a nuclear war, the Internet…</p>
</blockquote>
<p>In all these claims the statement was ARPA was looking for a resilient network due to cold war politics with the risk of nuclear war playing somewhere in the background and the ARPANET came out of this dynamic.</p>
<p>Apparently the ARPA people have started to hear the nuclear narrative a bit too much. In <a href="https://books.google.com/books?id=URcEAAAAMBAJ&amp;lpg=PA61&amp;pg=PA61#v=onepage&amp;q&amp;f=false">Network World from Aug 22, 1994</a> they put a special “Myth vs. Reality” inset from <a href="https://en.wikipedia.org/wiki/Leonard_Kleinrock">Leonard Kleinrock</a> in an absolutely futile effort to try and dislodge things:</p>
<figure>
<img src="myth-v-reality.png" alt="The text of the image reads: Myth: ARPANET was conceived as a way to maingain government data communications after a nuclear war. Reality: ARPANET was conceived as a way to save money by getting government-funded researchers to share computers rather than each of them buying their own. Source: Leonard Kleinrock, UCLA" /><figcaption><?= img() ?>Sigh, we’re still trying to correct this</figcaption>
</figure>
<p>It was hopeless. Network World was the first source we found for spreading it to begin with.</p>
<p>It's worth pointing out since we're in 1994, the article that was referenced in "Where the Wizards Stay Up Late" from the beginning. It was <a href="https://content.time.com/time/subscriber/article/0,33009,981132,00.html">the lead for the July 25, 1994 issue of TIME Magazine</a>, which has been misdated on their website. It can also be found at <tt>/time/072594/07259925.000</tt> in the <a href="https://archive.org/details/cd_TIME_Magazine_Almanac_-_All_TIME_Magazine_articles_1989-1995_Win3.1">TIME Magazine Almanac CD-ROM from 1995</a> to confirm the 1994 date. Here's the now common story:</p>
<blockquote>
  <p>The Internet evolved from a computer system built 25 years ago by the Defense Department to enable academic and military researchers to continue to do government work even if part of the network were taken out in a nuclear attack. It eventually linked universities, government facilities and corporations around the world, and they all shared the costs and technical work of running the system.</p>
</blockquote>
<h2 id="the-extended-universe">1995: The extended universe</h2>
<p>1995! Let's log on to AOL and use the keyword MovieLink to find the screentimes for The Net with Sandra Bollock. Then we'll hop in the minivan and watch it at the mall!</p>

<p>By now the nuclear narrative has become "common knowledge" so people start making logical inferences from it in official documents such as the US Congressional Office of Technology Assessment's <a href="https://www.google.com/books/edition/Global_Communications/m4keIKypadcC?hl=en&amp;gbpv=1&amp;pg=PA102&amp;printsec=frontcover">“Global Communications: Opportunities for Trade and Aid.”</a> from 1995, page 102:</p>
<blockquote>
<p>…the desire for a computer network that would remain operational in the event that part of the network was destroyed by a nuclear explosion. The ARPANET therefore had no central control.</p>
</blockquote>
<p>You even get hybrids combining multiple narrative strains. Watch it grow in the 1995 academic text, <a href="https://www.google.com/books/edition/Technology_in_the_national_interest/jEqFQv1P_UYC?hl=en&amp;gbpv=1&amp;pg=PA66&amp;printsec=frontcover">“Technology in The National Interest”</a>:</p>
<blockquote>
<p>war planners undertook and effort to ensure the survivability of America’s computing and communication capabilities in a nuclear first strike to preserve a credible U.S. retaliatory capability. From this initiative the first network, ARPANET, was established, allowing geographically separated researchers to share computer resources.</p>
</blockquote>
<p>After that it was off to the races, such as in this 1995 text, <a href="https://archive.org/details/vrmlbrowsingbuil00pesc/page/10/mode/2up">"VRML Browsing &amp; Building Cyberspace: The Definitive Resource for VRML Technology"</a>:</p>
<figure>
<img src="routing-errors.png" alt="The text of the image is 'To ARPAnet, nuclear war is no more than a bunch of routing errors that it could immediately correct'" /><figcaption><?= img() ?>What have we done?!</figcaption>
</figure>
<p>This myth has serious sticking power and other than for the people who actually built the Internet, nobody seems to have any desire to correct it.</p>
<h2><a name="survey"></a>Narrative Survey</h2>
<p>The history narrative appears to be able to be clustered in three general camps:</p>
<ul>
  <li><b>ARPA:</b> Documents bearing the ARPA name or people directly involved with the ARPANET project. (A)</li>
  <li><b>Peers:</b> Either scholars or people who worked on other networks. (P)</li>
  <li><b>Outsiders:</b> Those who are not in the first two groups but are what we called knowledge staters, such as reporters. They either credit nobody or members of either of the first two groups. (<?= $on?>, <?=$oa?>, or <?=$op?>).</li>
</ul>
<p>
The narrative has been broken down into a number of story points and the narrations were arranged as chronologically as possible. Notes on methodology can be found at the end.</p>
<ul>
  <li>Blue cells with a &check; mean a claim was made. For instance, "Paul Baran invented packet-switching at RAND which led to ARPAnet".</li>
  <li>Grey cells with a &sect; sign means things were mentioned but not causally linked. For instance, "Before ARPAnet, Paul Baran also had a packet-switching project at RAND" would be "sectional" and not "causal".</li>
  <li>Red cells with a &cross; mean a claim was refuted. For instance, "ARPAnet's architecture was distinct from Paul Baran's and both groups say they're unrelated".</li>
  <li>Empty cells mean nothing either way was said.</li>
  <li>Word count is the number of words dedicated to the telling of the narrative.</li>
  <li>The "faction" row is approximately where the narrative split is (see below).</li>
  <li>The columns with the green background (accessibilty notes: also titled "arpa" and for the color-blind, vertical lines) are ARPA faction narratives. They are additionally stylized to demonstrate a point made below.</li>
</ul>
<div class="tabular-magic">
<a name="chart"></a>
<table>
  <caption><?=table()?> Narrative survey over 19 texts from 1988-1995</caption>
  <thead>
    <tr>
      <th></th>
      <th>1988/04: Infoworld</th>
      <th>1990/01: Matrix</th>
      <th>1990/02: DARPA</th>
      <th>1990/09: <a href="https://www.nytimes.com/1990/09/02/business/creating-a-giant-computer-highway.html">NYT</a></th>
      <th>1991/08: Network World</th>
      <th>1991/09: <a href="https://archive.org/details/computer-magazine-1991-09/page/n69/mode/2up">Computer Magazine</a></li>
      <th>1992/09: Krol</th>
      <th>1992/10: DNS/BIND</th>
      <th>1993/02: Sterling</th>
      <th>1993/<a href="https://archive.org/details/sim_special-libraries_fall-1993_84_4/page/n13/mode/2up">09</a>: Gilster</th>
      <th>1993/<a href="https://greensboro.com/internet-s-growth-is-catching-the-eye-of-businesses-for/article_23e4343f-2d3f-53e1-88ee-a0a2943cf95f.html">11</a>: The Internet For Dumm&hellip;</th>
      <th>1994/<a href="https://archive.org/details/login_mar94/page/n43/mode/2up">02</a>: Quarterman</th>
      <th>1994/03: INSCOM</th>
      <th>1994/<a href="https://archive.org/details/ConneXions.08.07/page/26/mode/2up">07</a>: <a href="https://archive.org/details/internetguidefor00dani/page/8/mode/2up">The Internet Guide for&hellip;</a></th>
      <th>1994/07: Time</th>
      <th>1994/08: Network World</th>
      <th>1994/08: <a href="https://www.latimes.com/archives/la-xpm-1994-08-11-me-26027-story.html">LA Times</a></th>
      <th>1995: <a href="https://archive.org/details/teachyourselfint00rand/page/34/mode/2up">Teach yourself the Intern&hellip;</a></th>
      <th>1995/09: Global Communications</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>RAND/Paul Baran</td>
      <td></td>
      <td></td>
      <td title="arpa" class="arpa no">&cross;</td>
      <td title="arpa" class="arpa maybe">&sect;</td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td title="arpa" class="arpa maybe">&sect;</td>
      <td></td>
      <td title="arpa" class="arpa"></td>
      <td title="arpa" class="arpa"></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Bombs or Explosions</td>
      <td></td>
      <td></td>
      <td title="arpa" class="arpa"></td>
      <td title="arpa" class="arpa"></td>
      <td class="yes">&check;</td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td title="arpa" class="arpa"></td>
      <td></td>
      <td title="arpa" class="arpa"></td>
      <td title="arpa" class="arpa"></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Nuclear Attack/War</td>
      <td></td>
      <td></td>
      <td title="arpa" class="arpa"></td>
      <td title="arpa" class="arpa maybe">&sect;</td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td></td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td></td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td title="arpa" class="arpa"></td>
      <td class="yes">&check;</td>
      <td class="arpa no">&cross;</td>
      <td title="arpa" class="arpa"></td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
    </tr>
    <tr class='thic'>
      <td>Not central due to War</td>
      <td></td>
      <td></td>
      <td title="arpa" class="arpa"></td>
      <td title="arpa" class="arpa"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td></td>
      <td class="yes">&check;</td>
      <td title="arpa" class="arpa"></td>
      <td class="yes">&check;</td>
      <td title="arpa" class="arpa"></td>
      <td title="arpa" class="arpa"></td>
      <td></td>
      <td class="yes">&check;</td>
    </tr>
    <tr>
      <td>Faction</td>
      <td><?= $on ?><sup><a href="#infoworld"><?= $foot++ ?></a></sup></td>
      <td>P</td>
      <td title="arpa" class="arpa">A</td>
      <td title="arpa" class="arpa"><?= $oa ?></td>
      <td><?= $op ?></td>
      <td><?= $on ?></td>
      <td><?= $op ?>?<sup><a href="#krol"><?= $foot++ ?></a></sup></td>
      <td>O?<sup><a href="#dns"><?= $foot++ ?></a></sup></td>
      <td><?= $op ?><sup><a href="#sterling"><?= $foot++ ?></a></sup></td>
      <td><?= $on?></td>
      <td><?= $on?></td>
      <td>P</td>
      <td><?= $op ?></td>
      <td title="arpa" class="arpa"><?= $oa ?></td>
      <td><?= $op ?><sup><a href="#time"><?= $foot++ ?></a></sup></td>
      <td title="arpa" class="arpa"><?= $oa ?></td>
      <td title="arpa" class="arpa"><?= $oa ?></td>
      <td><?= $on ?></td>
      <td><?= $on ?></td>
    </tr>
    <tr>
      <td>Cost Cutting/Time-Sharing</td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Scientific Research</td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td></td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Collaborative by design</td>
      <td class="yes">&check;</td>
      <td></td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td></td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td></td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td></td>
    </tr>
    <tr>
      <td>Collaborative by accident</td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="yes">&check;</td>
      <td class="yes">&check;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Word Count</td>
      <td>118</td>
      <td>101</td>
      <td>2050</td>
      <td>316</td>
      <td>200</td>
      <td>136</td>
      <td>60</td>
      <td>86</td>
      <td>683</td>
      <td>110</td>
      <td>168</td>
      <td>91</td>
      <td>24</td>
      <td>388</td>
      <td>228</td>
      <td>42</td>
      <td>520</td>
      <td>53</td>
      <td>83</td>
    </tr>
    <tr>
      <td>Year</td>
      <td>1988</td>
      <td colspan=3>1990</td>
      <td colspan=2>1991</td>
      <td colspan=2>1992</td>
      <td colspan=3>1993</td>
      <td colspan=6>1994</td>
      <td colspan=3>1995</td>
    </tr>
    <tr>
      <td>Events/Era</td>
      <td colspan=6>Cold War</td>
      <td colspan=2>Gore<sup><a href="#gore"><?= $foot++ ?></a></sup></td>
      <td colspan=3>AOL Email</td>
      <td colspan=6>Netscape/Yahoo</td>
      <td colspan=3>Amazon/Ebay</td>
    </tr>
  </tbody>
</table>
</div>
<h4>Analysis</h4>
<p>There appears to roughly be two schools. The Peer group gave more encompassing histories then the ARPA group. The ARPA group told a history to more or less the exclusion or omission of other projects.</p>
<p>Because the Peer group had more moving pieces, a wider diversity of narratives could be constructed from it.</p>
<p>This is more a social phenomena than anything intentional and will be explored in other articles. People in "the winner's circle", defined by that which became dominant, tend to narrow the narrative and give their efforts a higher priority while the outsiders in other notable projects, tend to broaden the narrative and level things out.</p>
<p>They both play an important role in the documentation. The outsiders carefully document the important contributions of others while the winner's circle carefully document their own contributions. They pair together to form a complete picture.</p>
<h3>The evidence supported story</h3>
<p>Before we go on let's untangle things. I believe this is what has direct evidence:</p>
<ul>
  <li><a href="https://archive.org/details/RecommendationToTheAirStaff/mode/2up">Paul Baran and RAND had a proposed network in 1965 to USAF</a>.</li>
  <li>(same reference) It was not intended to use the phone system but instead, be an independent network built parallel to the electric grid.</li>
  <li><a href="https://www.rand.org/pubs/research_memoranda/RM3103.html">It was designed to be redundant, but not to scale</a>.</li>
  <li>(same reference) It was meant to be used for command and control loads and not intended to be expanded beyond military communication and use.</li>
  <li><a href="https://dl.acm.org/doi/abs/10.1145/800001.811669">ARPANET had routing based on Donald Davies work</a>, not Paul Baran's and was unreleated to the RAND project or system.</li>
  <li><a href="https://archive.org/details/DTIC_AD0705149">The principal engineer doing that work on ARPANET was Leonard Kleinrock</a>.</li> 
  <li><a href="https://archive.org/details/DraftReportForDataCommunicationFacilities/page/n1/mode/2up">The 1967 ARPA Network proposal by BBN says it's for research, sharing, and cost cutting</a>.</li>
  <li>(same reference) It was to run on normal phone lines and be focused on connecting nodes, presumed the network would be cared for, and did not offer extreme redundancy.</li>
</ul>
<p>
The first article about ARPANET I could find was before it was called ARPANET. In September of 1968, <a href="https://archive.org/details/bitsavers_Electronic9680916_134517369/page/62/mode/2up">Electronics Magazine</a>:
<blockquote>
  <p>
The first time-sharing network using incompatible computers has come a big step closer to reality. The project, announced last year, now has a timetable and is ready to buy hardware, says Lawrence G. Roberts, assistant to the director of information processing at the Pentagon’s Advanced Research
Projects Agency.
In the ARPA network, a user of one computer will have access to programs in all other machines, even if those programs won’t run on the computer to which he’s directly connected.
  </p>
</blockquote>
<p>This was followed up two weeks later by a <a href="https://archive.org/details/bitsavers_Electronic9680930_123128184/page/130/mode/2up">4-page article</a>. The analysis of this text is amazing. And I quote, from 1968, before the ARPANET was built:</p>
<blockquote>
  <p><em>(Distributed Denial of Service Attacks):</em> Roberts notes that sites with smaller computers could start “ganging up” on those with larger processors. This could mean that a lot of work could be thrust upon, say, the Univac 1108’s in the network.</p>
  <p><em>(Societal Implications of the Network):</em> &hellip;geographical separation and user isolation may limit the network’s utility. Mills believes the problem may grow as the user population increases. “There should have been a definition of the relationship between a man and his program, as a unit, and the distant central machine or other data processing gear with which they are working.” In other words, Mills believes ARPA put the cart before the horse by going ahead on interconnecting computers before determining what the benefits of such a network would be.</p>
</blockquote>
<p>Well said, well said.</p>

<h3><a name="common"></a>How common are the narratives</h3>

<p>Barry Gerber, who <a href="gerber-email.txt">was contacted for this story</a> and did some early social science research about the ARPAnet at UCLA presented an interesting question: "I have to wonder how widespread the belief in this particular myth is today".</p>
<p>To make an attempt to discover this, a corpus of 13.5 billion <a href="https://files.pushshift.io/reddit/comments/">Reddit comments</a> were analyzed with <a href="https://github.com/kristopolous/sf/blob/main/narrative-extractor.sh">a complex regex yielding 191,725 candidate comments</a>. Then <a href="https://github.com/kristopolous/sf/blob/main/narrative-counter.py">a second pass was done</a> using a naive Regex classifier with another naive way to see if the user is negating (as in saying "arpanet was not about ww3"). No stemming, tokenizing or lemmatization was done; scikit wasn't even included. This is certainly ongoing research.</p>

<p>The first column are affirmatives of the story point and the second columns are instances where negation appeared. The "sample size" is the total number of comments considered for a given year. You can hover over each cell to see the value on desktop.</p>

<div class="tabular-magic">
<!-- This is generated from the python program linked above. -->
<table id=heat>
<caption><?= table() ?>Heatmap of Internet history narrative story points from reddit comments</caption>
<thead><tr><th>Year</th><th>Sample Size</th><th colspan=2>Paul Baran/RAND</th><th colspan=2>Bomb</th><th colspan=2>Nuclear</th><th colspan=2>Decentralized</th><th colspan=2>Cost Reduction</th><th colspan=2>Research</th><th colspan=2>Collaboration</th></tr></thead><tbody>
<tr><td>2009</td><td>75</td><td title=8% style='opacity:32%'></td><td title=1% style='opacity: 5%'></td><td title=0% style='opacity: 0%'></td><td title=0% style='opacity: 0%'></td><td title=16% style='opacity:64%'></td><td title=1% style='opacity: 5%'></td><td title=8% style='opacity:32%'></td><td title=6% style='opacity:27%'></td><td title=6% style='opacity:27%'></td><td title=2% style='opacity:11%'></td><td title=25% style='opacity:100%'></td><td title=13% style='opacity:53%'></td><td title=9% style='opacity:37%'></td><td title=1% style='opacity: 5%'></td></tr>
<tr><td>2010</td><td>150</td><td title=8% style='opacity:35%'></td><td title=5% style='opacity:21%'></td><td title=4% style='opacity:16%'></td><td title=2% style='opacity:11%'></td><td title=12% style='opacity:51%'></td><td title=5% style='opacity:21%'></td><td title=7% style='opacity:29%'></td><td title=2% style='opacity: 8%'></td><td title=8% style='opacity:32%'></td><td title=3% style='opacity:13%'></td><td title=16% style='opacity:67%'></td><td title=8% style='opacity:35%'></td><td title=17% style='opacity:69%'></td><td title=4% style='opacity:16%'></td></tr>
<tr><td>2011</td><td>221</td><td title=8% style='opacity:34%'></td><td title=3% style='opacity:13%'></td><td title=2% style='opacity:11%'></td><td title=2% style='opacity: 9%'></td><td title=19% style='opacity:78%'></td><td title=6% style='opacity:25%'></td><td title=8% style='opacity:33%'></td><td title=4% style='opacity:18%'></td><td title=5% style='opacity:24%'></td><td title=3% style='opacity:14%'></td><td title=23% style='opacity:92%'></td><td title=14% style='opacity:60%'></td><td title=10% style='opacity:42%'></td><td title=4% style='opacity:16%'></td></tr>
<tr><td>2012</td><td>512</td><td title=8% style='opacity:34%'></td><td title=3% style='opacity:13%'></td><td title=5% style='opacity:20%'></td><td title=0% style='opacity: 3%'></td><td title=16% style='opacity:67%'></td><td title=6% style='opacity:25%'></td><td title=5% style='opacity:21%'></td><td title=2% style='opacity: 9%'></td><td title=7% style='opacity:28%'></td><td title=2% style='opacity:11%'></td><td title=25% style='opacity:100%'></td><td title=9% style='opacity:38%'></td><td title=13% style='opacity:52%'></td><td title=5% style='opacity:20%'></td></tr>
<tr><td>2013</td><td>504</td><td title=9% style='opacity:37%'></td><td title=3% style='opacity:13%'></td><td title=3% style='opacity:13%'></td><td title=1% style='opacity: 7%'></td><td title=14% style='opacity:59%'></td><td title=4% style='opacity:17%'></td><td title=5% style='opacity:21%'></td><td title=3% style='opacity:15%'></td><td title=8% style='opacity:34%'></td><td title=2% style='opacity:10%'></td><td title=25% style='opacity:100%'></td><td title=13% style='opacity:53%'></td><td title=14% style='opacity:58%'></td><td title=3% style='opacity:13%'></td></tr>
<tr><td>2014</td><td>655</td><td title=8% style='opacity:35%'></td><td title=4% style='opacity:18%'></td><td title=3% style='opacity:12%'></td><td title=1% style='opacity: 7%'></td><td title=16% style='opacity:65%'></td><td title=6% style='opacity:27%'></td><td title=7% style='opacity:29%'></td><td title=4% style='opacity:19%'></td><td title=8% style='opacity:35%'></td><td title=4% style='opacity:18%'></td><td title=22% style='opacity:89%'></td><td title=9% style='opacity:38%'></td><td title=13% style='opacity:55%'></td><td title=4% style='opacity:19%'></td></tr>
<tr><td>2015</td><td>671</td><td title=9% style='opacity:40%'></td><td title=4% style='opacity:17%'></td><td title=4% style='opacity:19%'></td><td title=2% style='opacity: 8%'></td><td title=15% style='opacity:60%'></td><td title=4% style='opacity:20%'></td><td title=6% style='opacity:26%'></td><td title=2% style='opacity:10%'></td><td title=7% style='opacity:31%'></td><td title=3% style='opacity:14%'></td><td title=23% style='opacity:94%'></td><td title=11% style='opacity:45%'></td><td title=12% style='opacity:49%'></td><td title=5% style='opacity:20%'></td></tr>
<tr><td>2016</td><td>731</td><td title=11% style='opacity:47%'></td><td title=3% style='opacity:15%'></td><td title=3% style='opacity:15%'></td><td title=1% style='opacity: 4%'></td><td title=17% style='opacity:69%'></td><td title=4% style='opacity:19%'></td><td title=7% style='opacity:28%'></td><td title=2% style='opacity:11%'></td><td title=8% style='opacity:33%'></td><td title=3% style='opacity:12%'></td><td title=23% style='opacity:93%'></td><td title=9% style='opacity:37%'></td><td title=11% style='opacity:48%'></td><td title=3% style='opacity:14%'></td></tr>
<tr><td>2017</td><td>946</td><td title=11% style='opacity:46%'></td><td title=2% style='opacity:11%'></td><td title=4% style='opacity:17%'></td><td title=1% style='opacity: 4%'></td><td title=15% style='opacity:63%'></td><td title=3% style='opacity:15%'></td><td title=9% style='opacity:38%'></td><td title=3% style='opacity:14%'></td><td title=10% style='opacity:43%'></td><td title=4% style='opacity:17%'></td><td title=24% style='opacity:98%'></td><td title=7% style='opacity:32%'></td><td title=10% style='opacity:43%'></td><td title=5% style='opacity:21%'></td></tr>
<tr><td>2018</td><td>1023</td><td title=9% style='opacity:39%'></td><td title=2% style='opacity:12%'></td><td title=3% style='opacity:13%'></td><td title=1% style='opacity: 5%'></td><td title=14% style='opacity:56%'></td><td title=4% style='opacity:19%'></td><td title=10% style='opacity:41%'></td><td title=4% style='opacity:19%'></td><td title=7% style='opacity:32%'></td><td title=2% style='opacity:11%'></td><td title=23% style='opacity:94%'></td><td title=8% style='opacity:33%'></td><td title=15% style='opacity:61%'></td><td title=4% style='opacity:19%'></td></tr>
<tr><td>2019</td><td>1182</td><td title=10% style='opacity:42%'></td><td title=3% style='opacity:14%'></td><td title=3% style='opacity:13%'></td><td title=1% style='opacity: 6%'></td><td title=16% style='opacity:65%'></td><td title=4% style='opacity:17%'></td><td title=7% style='opacity:30%'></td><td title=3% style='opacity:13%'></td><td title=5% style='opacity:23%'></td><td title=2% style='opacity:10%'></td><td title=25% style='opacity:100%'></td><td title=9% style='opacity:38%'></td><td title=17% style='opacity:70%'></td><td title=4% style='opacity:19%'></td></tr>
<tr><td>2020</td><td>1294</td><td title=10% style='opacity:43%'></td><td title=3% style='opacity:13%'></td><td title=3% style='opacity:13%'></td><td title=1% style='opacity: 5%'></td><td title=16% style='opacity:66%'></td><td title=3% style='opacity:15%'></td><td title=7% style='opacity:31%'></td><td title=2% style='opacity: 9%'></td><td title=7% style='opacity:32%'></td><td title=2% style='opacity: 9%'></td><td title=25% style='opacity:100%'></td><td title=6% style='opacity:28%'></td><td title=17% style='opacity:68%'></td><td title=5% style='opacity:20%'></td></tr>
<tr><td>2021</td><td>1622</td><td title=11% style='opacity:48%'></td><td title=4% style='opacity:18%'></td><td title=3% style='opacity:14%'></td><td title=1% style='opacity: 5%'></td><td title=14% style='opacity:57%'></td><td title=4% style='opacity:16%'></td><td title=9% style='opacity:40%'></td><td title=3% style='opacity:14%'></td><td title=7% style='opacity:30%'></td><td title=2% style='opacity:11%'></td><td title=21% style='opacity:85%'></td><td title=6% style='opacity:28%'></td><td title=17% style='opacity:68%'></td><td title=4% style='opacity:17%'></td></tr>
<tr><td>2022</td><td>1188</td><td title=12% style='opacity:52%'></td><td title=2% style='opacity:11%'></td><td title=4% style='opacity:17%'></td><td title=0% style='opacity: 4%'></td><td title=19% style='opacity:76%'></td><td title=4% style='opacity:20%'></td><td title=10% style='opacity:42%'></td><td title=2% style='opacity:12%'></td><td title=5% style='opacity:24%'></td><td title=2% style='opacity:12%'></td><td title=20% style='opacity:82%'></td><td title=5% style='opacity:24%'></td><td title=15% style='opacity:61%'></td><td title=4% style='opacity:17%'></td></tr>
</tbody></table>
</div>

<h4>Notes</h4>
<p>When filtering strictly on "ARPANET", the nuclear affirmative numbers dropped by about ~4 percentage points which is to be expected if we are to assume those familiar with ARPANET may be more likely to know the (A) narrative. To answer the posed question, it looks to be, at least according to those opining on Reddit in a way that matches my filters, about <b>1/6</b> affirm the nuclear narrative and this appears to be more or less stable over the 13 year range.</p>
<p>The robustness of this result is interesting. The most likely cause is my own incompetent execution. Ignoring that possibility, it's of unique interest simply because of Reddit's growth and demographic change over time.</p>
<figure>
<img src="comments-per-month.png" alt="A chart showing how Reddit has grown to 250 million comments per month since the start of the data dump in 2007'">
<figcaption><?= img() ?>Monthly comments on Reddit in millions</figcaption>
</figure>
<p>Then again, this is something that was communicated by University professors that had been publishing on networks since the 1970s. Newspapers, textbooks, congressional documents, a certain percentage all gave part of a (P) narrative. There could be more fundamental reasons for its continued persistence.</p>

<h3 id="why-it-sticks">Why the Nuclear story sticks</h3>
<p>Like good conspiracy theories, there’s related truths that make the core message believable. The ARPANET project was by DARPA, which was under the Department of Defense. This organization was launched after Sputnik. The military had something called <a href="https://en.wikipedia.org/wiki/MILNET">MILNET</a>, it’s own split-off from the Internet from 1983 which became NIPRnet.</p>
<p>In 1971 the command and control <a href="https://en.wikipedia.org/wiki/Worldwide_Military_Command_and_Control_System">WWMCCS</a> had an ARPANET like system using BBN IMPs. <a href="https://en.wikipedia.org/wiki/ALOHAnet">ALOHAnet</a> did lead to <a href="https://en.wikipedia.org/wiki/PRNET">PRNET</a> and a packet-radio van which interacted with a satellite network, SATNET. Before that there was a trans-atlantic link, NORSAR connecting to seismic units in Norway to, among other things, <a href="https://en.wikipedia.org/wiki/NORSAR">enforce the Comprehensive Nuclear Test Ban Treaty</a>.</p>
<p>There is some cold war connection, just like there is in much of computer technology from the era. The generalized statement that DARPA money funded Silicon Valley is true and it’s understandable how fuzzy memories and a bit less rigor can fuse connections.</p>
<p>Also there’s a conspiracy tendency when it comes to grim folklore. Perhaps people denying the nuclear war connection have a political agenda, they were misinformed or they are too scared to admit it. It has its own defense built in that permits people trying to correct the narrative to be dismissed as trying to push an opinion or occluded political agenda.</p>
<p>However, the documentation is voluminous and the people who were in the room have all given a consistent story about how it was to build a network for time-sharing of expensive computers and better collaboration.</p>
<p>People also have a tendency to not be careful with chronologies and often attribute events in a narrative structure that would require people time-travelling to be possible.</p>
<p>To put this in perspective let’s use living recent memory. It would be like seeing a connection between say COVID-19 pandemic outcomes being related to political governance, that there was a 2012 Ebola outbreak and then claim the outcome of the Obama/Romney 2012 election was a direct consequence of the federal COVID-19 response.</p>
<p>That’s really the same dynamic. Events in the 1970s are being placed categorically adjacent to events in the 1960s and after the table is set, a narrative is drawn between them.</p>
<figure>
<img src="cerf1.jpg" alt="A crop of a comic book where the hero says 'This is worse than I imagined cerf boy. The writer has completely lost control of the plot'">
<figcaption><?= img() ?>From <a href="https://archive.org/details/CaptainInternetAndCERFBoyNumber1October1991/page/n13/mode/2up">The Adventures of Captain Internet And CERF Boy - Number 1 October 1991</a>.</figcaption>
</figure>
<h2 id="right-click-view-source">Right Click, View Source</h2>
<p>As I’ll cover in further articles in this series, there’s no expectation that an engineer be a historian or that accurate scholarship can be expected in the days before mass digitization especially in texts where the history isn’t a focus of the scholarship.</p>
<p>Also, the prevailing assumption is to look for mistakes before assuming malice. Not just because it’s more polite to do so but also because these statements are small buried passages in much larger, often dry technical works. There’s no evidence these authors are fabulists trying to tell compelling stories.</p>
<p>To dig deeper on this we’ll refer back to the 1990 DARPA document.</p>
<p>From “DARPA Technical Accomplishments”, section 20-2 we find this:</p>
<blockquote>
<p>Notable early contributions had been made by P. Baran and collaborators at RAND. Baran’s work in the early 1960’s outlined a distributed, survivable digital communications system for the Air Force, in which a data stream would be broken near the point of initiation into addressed subunits of less than two hundred bits, which would then be routed by “intelligent” nodes over multiple paths which could include satellites as well as telephone communication lines. Baran’s group also ran a simplified computer simulation of such a network, using six nodes, which demonstrated its workability and survivability and indicated that the nodes did not need to store many message segments in order to be effective… A 1962 thesis by L. Kleinrock, then at Lincoln Laboratory, came to a similar conclusion.</p>
</blockquote>
<p>With the important part coming after:</p>
<blockquote>
<p>The Air Force did not follow up Baran’s work, apparently because of skepticism from the communications community, which felt that data hang-ups would be common and buffer storage requirements large. Baran’s work, apparently, was not well known to members of the DARPA community when they began their plans for computer communications networks.</p>
</blockquote>
<p>Vint Cerf says as much in the YouTube link provided above in the first section.</p>
<p>The work they are referring to is entitled <a href="https://archive.org/details/RecommendationToTheAirStaff/mode/2up">“Recommendation to the Air Staff”</a> by RAND, from August 1965. Quoting page 2:</p>
<blockquote>
<p>In our view it is possible to build a new large common-user communication network able to withstand heavy damage. Such a network can provide a major step forward in Air Force military communication capability.</p>
</blockquote>
<p>and then page 40 for more lurid detail:</p>
<blockquote>
<p>The cloud-of-doom attitude that nuclear war spells the end of the earth is slowly lifting from the minds of the many. … If war does not mean the end of the earth in a black and white manner, then it follows that we should do those things that make the shade of grey as light as possible: to plan now to minimize potential destruction and to do all those things necessary to permit the survivors of the holocaust to shuck their ashes and reconstruct the economy swiftly.</p>
</blockquote>
<p>So this failed proposal in 1965 matches our claim by David Farber. They both worked at Rand. In a <a href="https://www.kgri.keio.ac.jp/en/news-event/051657.html">2019 interview Farber stated</a>:</p>
<blockquote>
<p>It allowed me to broaden out, quite a bit…. This is also the place where Paul Baran and I became good friends. We remained so for the rest of our lives.</p>
</blockquote>
<p>This is consistent. In a <a href="https://historyofcomputercommunications.info/interviews/david-farber/">1988 interview he stated similarly</a>:</p>
<blockquote>
<p>He next joined RAND Corporation in Southern California where he was “heavily involved with, and affected” by, Paul Baran’s work.</p>
</blockquote>
<p>So we have two possible strains, both sourcing back to early 1960s RAND work by Paul Baran; a connection between Baran and ARPANET made by a good friend of his and an understandable scholarship mistake.</p>
<h3 id="paul-baran-agrees">Paul Baran agrees</h3>
<p>Living life in contemptuous bitterness and obscurity might be understandable but that’s not what Paul Baran did. He moved on and did many other great things. In <a href="https://www.wired.com/2001/03/baran/">March 2001, Wired interviewed him</a>:</p>
<blockquote>
<p><strong>Wired</strong>: The myth of the Arpanet - which still persists - is that it was developed to withstand nuclear strikes. That’s wrong, isn’t it?</p>
<p><strong>Baran</strong>: Yes. Bob Taylor had a couple of computer terminals speaking to different machines, and his idea was to have some way of having a terminal speak to any of them and have a network. That’s really the origin of the Arpanet. The method used to connect things together was an open issue for a time.</p>
</blockquote>
<p>But some contention remained. First, as a 2016 article in <a href="https://theconversation.com/how-the-internet-was-born-the-network-begins-to-take-shape-67904">The Conversation</a> points out, RAND in Santa Monica and the original ARPANET node at UCLA were a short bus ride away from each other.</p>
<p>Could be a coincidence. Baran is a little skeptical of it though. Going back to the Wired article:</p>
<blockquote>
<p><strong>Wired</strong>: Taylor heard about not through you, but through Donald Davies originally?</p>
<p><strong>Baran</strong>: I have two different views on that. I didn’t pay much attention to it then, but with all the nonsense about it, I went back and started digging through the old records. I don’t believe anything unless I can find it in writing, in contemporaneous documentation. I had many, many discussions with the folks at Arpa, starting in the very early ’60s. The information about packet switching was not a surprise, not new. People can listen to things and put them in the back of their mind. So you don’t know. People say they’d never heard of me at the time, yet I’d chaired a session with them in it.</p>
</blockquote>
<p>Here’s where we get our first potential conflict. The ARPA people say they didn’t know about or were influenced by Baran’s work yet Baran finds that implausible.</p>
<p>Really either could be true.</p>
<h3 id="batch-processing-versus-time-sharing">Final words</h3>
<p>There's earlier notable history to the internet. Vannevar Bush's <a href="https://www.theatlantic.com/magazine/archive/1945/07/as-we-may-think/303881/">"As We May Think"</a> in July 1945 describes a mechanical microfilm archival machine he dubs the Memex. The IPTO of ARPA, JCR Licklider's April 1963, <a href="http://worrydream.com/refs/Licklider-IntergalacticNetwork.pdf">"Members and Affiliates of the Intergalactic Computer Network"</a>.
<p>There's also many other networks long forgotten. The best reference is in the April 1972 issue of Datamation which isn't digitized yet. However, I went to the archives at UCLA and painfully montaged some photocopies. David Farber, who was mentioned above, is the author. Pages <a href="farber-datamation-0472-01.png">36, 37</a> and <a href="farber-datamation-0472-02.png">38, 39</a>. No mention of Paul Baran or nuclear war this time in his description of ARPANET and we even got a shout out to Slotnick's ILLIAC IV which is also called out in the DARPA document, section 18-1.</p>
<p>Also any scholar reading this will be yelling at their computer screen right now because I seemed to have forgotten the French <a href="https://en.wikipedia.org/wiki/CYCLADES">CYCLADES</a> network. Disarm your keyboards, comrades, we're good.</p>
<p>Also, the Internet is not the ARPANET, as Quarterman pointed out in a few texts, this one from <a href="https://archive.org/details/sim_computerworld_1993-02-22_27_7/page/n85/mode/2up">Computerworld, Feb 22, 1993</a>:</p>
<blockquote><p>The Arpanet was merely one network within the Internet. Started in 1969, Arpanet was the first distributed packet-switched com- puter network. In 1977, the Arpanet became one of the Internet’s backbone networks, and the protocol research done on the Arpanet was very influential in the development of the TCP/IP currently used on the Internet. Arpanet’s technology became obsolete, however, and it was retired in 1990.</p></blockquote>
<p>For an exhaustive survey of 133 (yes, one hundred and thirty three) networks from 1990, refer to <a href="https://archive.org/details/directoryofelect00frey/mode/2up">"!%@:: a directory of electronic mail addressing and networks"</a> (yes, pages vi and vii were somehow included twice).
<h4><a name="time-sharing"></a>The Batch-Processing to Time-Sharing Revolution</h4>
<p>This was alluded to above. The Internet can be seen as part of a larger movement in computing away from single monolith installations doing something called "batch-processing" to a world of "time-sharing".</p>
<p>At one time there was a computing center with cubby holes. You’d place your program in a cubby hole and the machine operator would eventually feed it in, generate output, and you’d come back later to see the results.</p>
<p>There’s all kinds of problems with this. You aren’t actually touching the computer. Syntax errors would have the turnaround time of days to correct. You had to go, physically, to the machine.</p>
<p>The fix was time-sharing: the ability of the computer to multi-task. This meant multiple people could interact with one computer simultaneously.</p>
<p>In order to do that you needed multiple input terminals. It wasn’t long before people realized it’d be nice to be able to roll their terminal home with them and just call it in.</p>
<p>This led to remote terminals.</p>
<p>Then people realized they could call up any computer once it got a phone number if only they had some agreed way to talk to it. This is still 1960s.</p>
<p>So you had terminals talking to computers. Surely this will be followed up by computers talking to computers. That’s an obvious next step.</p>
  <p>ARPA even had a separate project, called project MAC, which along with having legends like <a href="https://en.wikipedia.org/wiki/Marvin_Minsky">Marvin Minsky</a> and <a href="https://en.wikipedia.org/wiki/John_McCarthy_(computer_scientist)">John McCarthy</a> made a time-sharing system called <a href="https://en.wikipedia.org/wiki/Compatible_Time-Sharing_System">CTSS</a>.
<p>The point is that Paul Baran wasn’t chartering a path through the wilderness; networked time-sharing and resource combination was the clear trajectory. The obvious way to achieve this was to time-share the communication channel as well. That’s where you get packets and switching.</p>
<p>Or hey, there’s probably more to it. There always is.</p>
<figure>
<img src="web.png" alt="A black and white adventurous drawing of a woman with a keyboard strapped to her shoulder like a purse admiring an abstract frame surrounded by a cloud titled 'Internetland' which depicts E-mail, usenet, gopher and other internet technologies that were comon in 1994" >
<figcaption><?= img() ?>From <a href="https://archive.org/details/internetguidefor00dani/page/n33/mode/2up">The Internet Guide for New Users, 1994</a>. Drawn by <a href="http://www.pyracantha.com/">Hannah Michael Gale Shapero</a>.</figcaption>
</figure>

<hr>
<h3>Notes</h3>
<h4>Timeline & Thanks</h4>
<ol>
  <li>2022/09/26: David Farber, Paul Gilster and John Quarterman were emailed and requested for comment.</li>
  <li>2022/09/27: Paul Gilster responded and was included above.</li>
  <li>2022/09/28: John Quarterman responded and was included above.</li>
  <li>2022/09/29: Non-digitized archival documents were scanned and uploaded.</li>
  <li>2022/10/01: A UCLA anthropologist was contacted who wishes to remain anonymous. Recommendations have been done.</li>
  <li>2022/10/02: The /r/folklorist subreddit was <a href="https://reddit.com/r/Folklorestudies/comments/xutf7m/i_need_a_folklorist_opinion_for_an_article_ive/">requested for comment</a>. Recommendations have been done.</li>
  <li>2022/10/03: Sharon Fisher responded for additional background. Paul Albitz (DNS/BIND) was contacted.</li>
  <li>2022/10/04: Paul Albitz responded. Hacker News user Matt Campbell assisted in the accessibility of the document. Thanks!</li>
  <li>2022/10/05: Quarterman was followed up. Cricket Liu (DNS/BIND) was contacted.</li>
  <!--<li>2022/10/02: Bruce Sterling and Vint Cerf were emailed and requested for comment.</li>-->
</ol>
<p>I was unable to find a way to reach Ed Krol or Bruce Sterling. Corrections and comments are welcome at <a href="mailto:info@siliconfolklore.com">info@siliconfolklore.com</a>.</p>

<h4>Footnotes</h4>
<ol>
  <li><p><a name="jcr"></a>But not, perhaps, by ARPA IPTO (basically the CEO), JCR Licklider as John Quarterman points out in his email, linking to an excerpt from a 2017 book by <a href="https://en.wikipedia.org/wiki/Sharon_Weinberger">Sharon Weinberger</a>, <a href="https://aeon.co/essays/how-nuclear-fears-helped-inspire-creation-of-the-internet">"The Imagineers of War"</a> (not yet available in digital libraries, excerpt from Aeon.co included) where she quotes Licklider, "Who can direct a battle when he’s got to write a program in the middle of that battle?"</p></li>
  <li><p><a name="prior"></a>This includes histories of the ARPANET "DARPANET" and “ARPA Network”. <a href="mailto:info@siliconfolklore.com?subject=Before+1991">Please reach out if you know of any</a> and I'll be happy to update.</p></li>
  <li><p><a name="sharon"></a>I had a brief chat with Sharon on Oct 3, 2022 over Facebook. She also wrote a 1993 text, <a href="https://archive.org/details/ridinginternethi00fish/page/12/mode/2up">"Riding the Internet Highway"</a> which contained a similiar origin narrative. In our conversation she recommended a <a href="https://vintageapple.org/byte/pdf/199107_Byte_Magazine_Vol_16-07_DOS_5.0.pdf">July 1991 Byte</a>(PDF) article she wrote. It starts on PDF page 209 and cites Quarterman's Matrix as she does in the InfoWorld article work for his 1986 work, <a href="https://dl.acm.org/doi/abs/10.1145/6617.6618">"Notable Computer Networks"</a>.</p>
  <li><p><a name="first"></a>Calling something "first" is so risky. Let me clarify. First as far as ProQuest, archive.org and Google books is concerned. Have an earlier one? <a href="mailto:info@siliconfolklore.com?subject=Earlier+Reference">Please send it over</a>.</p></li>

  <li><p><a name="infoworld"></a>Quarterman's Matrix is included in Fisher's bibliography and her description mirrors the one from The Matrix. Going over the names referenced there's three without Wikipedia pages: David Wasley, David Buerger, John Rugo and one with: <a href="https://en.wikipedia.org/wiki/Robert_Metcalfe">Bob Metcalfe</a> who has a mixed history with ARPA and wasn't used for the history section.</li>
  <li><p><a name="krol"></a>I was unable to determine a source for Krol here. He mentions Quarterman's Matrix but that does not have the (P) bomb narrative. Krol has earlier work such as <a href="https://www.rfc-editor.org/rfc/rfc1118.html">"The Hitchhikers Guide to the Internet"</a> but nothing I could find had an origin story. He references Douglas Comer's "Internetworking TCP/IP" which is a 3-volume set also without an origin story. Comer's work references Cerf's "The History of the ARPANET" but Cerf is (A) while Krol is a (P) narrative. Also mentioned is Craig Hunt's <a href="https://archive.org/details/tcpipnetworkadmi00hunt/page/n25/mode/2up">"TCP/IP network administration"</a> which has an origin story but it's (A) style.</p>
<p>An additional reference later in the work is <a href="https://archive.org/details/computersecurity00russ/page/210/mode/2up">"Computer Security Basics"</a> which references ARPANET but has no origin story. Another reference <a href="https://archive.org/details/practicalunixsec00garf_0/page/6/mode/2up">"Practical UNIX Security"</a> only historical reference is a brief description of Project MAC without referring to it by name.</p>
<p>The section from his book photographed above even gets published as <a href="https://www.rfc-editor.org/rfc/rfc1462">RFC 1462</a> and here is where we find our first potential (P) link. The other author here, <a href="https://dblp.org/pid/86/5409.html">Ellen S Hoffman</a> is from the alternative <a href="https://en.wikipedia.org/wiki/Merit_Network">Merit Network</a> which is older than the ARPANET. It plays a very important role in the history of the Internet which is outside our scope.</p>
<p>Also the author page of a later work from 1995, <a href="https://archive.org/details/wholeinternetfor00krol/page/n649/mode/2up">"The Whole Internet for Windows 95"</a> claims Krol was part of the original NSFnet installation at UIUC which was part of Merit and arguably puts him in the (P) group.</p>
<p>These two (P) links might negate the (A) links and his direct participation does fall under the definition (albeit 15 years later so maybe not). Unless I can find a way to contact Krol, I'll have to leave that question mark there.</p</li>
  <li><p><a name="dns"></a>There's two authors listed, Paul Albitz and Cricket Liu. At first I believed the author of the passage was most likely Paul Albitz because it was repeated in <a href="https://archive.org/details/dnsonwindowsnt00albi/page/n17/mode/2up">"DNS on Windows NT"</a> in 1998 and cannot be found in other work by Cricket Liu such as <a href="https://archive.org/details/dnsbindcookbook0000liuc/mode/2up">"DNS and BIND Cookbook"</a> in 2003 or <a href="https://archive.org/details/managinginternet00jerr/mode/2up">"Managing Internet Information Services"</a> from 1994.</p>
  <p>However, after effort was made to reach out to him via LinkedIn on October 3, 2022 to inquire about the source, he claimed on October 4, 2022 that Cricket Liu wrote that chapter. Efforts were made to contact Cricket Liu on October 5, 2022.</p>
  <p>The text is not robust enough in references to lead to a factional claim, citing a few RFCs. For acknowledgements we get Ken Stone, <a href="https://www.linkedin.com/in/jerry-mccollom-a552316">Jerry McCollom</a>&dagger; (HP), <a href="https://www.linkedin.com/in/peterjeffe/">Peter Jeffe</a>&dagger; (IBM), Christopher Durham, Hal Stern, Bill Wisner, Dave Curry and Jeff Okamoto. All dead-ends. Paul Albitz credits his spouse, Katherine Albitz, who is also an engineer but without any obvious ARPA or Peer connection. Further searches in google groups, proquest, and archive.org found only references to the aforementioned texts and no other works.</p></li>
  <li><p><a name="sterling"></a>Sterling doesn't directly quote anyone in his February 1993 story however, in his November 1992 text, <a href="https://www.mit.edu/hacker/hacker.html">"The Hacker Crackdown: Law and Disorder on the Electronic Frontier"</a> he talks about a <a href="https://www.mit.edu/hacker/part4.html">1991 CPSR roundtable</a> mentioning two peers:</p>
    <blockquote>Sixty people attended, myself included -- in this instance, not so much as a journalist as a cyberpunk author. Many of the luminaries of the field took part: <a href="https://en.wikipedia.org/wiki/Mitch_Kapor">Kapor</a> and <a href="https://en.wikipedia.org/wiki/Mike_Godwin">Godwin</a> as a matter of course. Richard Civille and <a href="https://en.wikipedia.org/wiki/Marc_Rotenberg">Marc Rotenberg</a> of CPSR. Jerry Berman of the ACLU. <b>John Quarterman</b>, author of The Matrix. <a href="https://en.wikipedia.org/wiki/Steven_Levy">Steven Levy</a>, author of Hackers. George Perry and Sandy Weiss of Prodigy Services, there to network about the civil-liberties troubles their young commercial network was experiencing. <a href="https://en.wikipedia.org/wiki/Dorothy_E._Denning">Dr. Dorothy Denning</a>. Cliff Figallo, manager of the Well. <a href="https://en.wikipedia.org/wiki/Steve_Jackson_(American_game_designer)">Steve Jackson</a> was there, having finally found his ideal target audience, and so was <a href="https://en.wikipedia.org/wiki/Craig_Neidorf">Craig Neidorf</a>, "Knight Lightning" himself, with his attorney, Sheldon Zenner. <a href="https://en.wikipedia.org/wiki/Katie_Hafner">Katie Hafner</a>, science journalist, and co-author of Cyberpunk: Outlaws and Hackers on the Computer Frontier. <b>Dave Farber</b>, ARPAnet pioneer and fabled Internet guru. <a href="https://its.law.nyu.edu/facultyprofiles/index.cfm?fuseaction=profile.overview&personid=43007">Janlori Goldman</a> of the ACLU's Project on Privacy and Technology. John Nagle of Autodesk and the Well. Don Goldberg of the House Judiciary Committee. Tom Guidoboni, the defense attorney in the Internet Worm case. <a href="https://en.wikipedia.org/wiki/Lance_Hoffman">Lance Hoffman</a>, computer-science professor at The George Washington University. Eli Noam of Columbia. And a host of others no less distinguished.</blockquote>
  </li>
  <li><p><a name="time"></a> Time names the following in the article: <a href="https://en.wikipedia.org/wiki/Laurence_Canter_and_Martha_Siegel">Laurence Canter, Martha Siegel</a>, <a href="https://en.wikipedia.org/wiki/Howard_Rheingold">Howard Rheingold</a>, <a href="https://en.wikipedia.org/wiki/Clifford_Stoll">Clifford Stoll</a> (quoted for article, author of The Cuckoo's Egg), Steven Levy, <a href="https://en.wikipedia.org/wiki/Thomas_Kalil">Tom Kalil</a>, <a href="https://en.wikipedia.org/wiki/Bruce_Fancher">Bruce Fancher</a> (quoted), <a href="https://en.wikipedia.org/wiki/A._J._Liebling">AJ Liebling</a>, <a href="https://en.wikipedia.org/wiki/Adam_Curry">Adam Curry</a>, <a href="https://en.wikipedia.org/wiki/Brad_Templeton"><b>Brad Templeton</b></a>, <a href="https://en.wikipedia.org/wiki/Brock_Meeks">Brock Meeks</a> (quoted), <a href="https://en.wikipedia.org/wiki/Martin_Nisenholtz">Martin Nisenholtz</a> (quoted), <a href="https://en.wikipedia.org/wiki/Dale_Dougherty">Dale Dougherty</a> (quoted), <b>Dave Farber</b>, <a href="https://en.wikipedia.org/wiki/Esther_Dyson">Esther Dyson</a> (quoted) and <a href="https://en.wikipedia.org/wiki/Stacy_Horn">Stacy Horn</a> (quoted). 
    <li><p><a name="gore"></a>As Senator and eventual Vice Presidential candidate, Al Gore not only popularized the term "Information Superhighway" but also spearheaded legislation like the <a href="https://en.wikipedia.org/wiki/High_Performance_Computing_Act_of_1991">High Performance Computing Act of 1991</a> which funded the development of the Mosaic Browser.</p>
      <p>The US Presidential campaign cycle of 1992 was arguably the first time (excluding the <a href="https://en.wikipedia.org/wiki/Morris_worm">1988/89 Morris worm</a>) that significant effort was made to explain the concept of the Internet and (in 1993 after assuming office) demonstrate it to general audiences.  See the 24:06 mark of the <a href="https://youtu.be/BIq_mW-nSnQ?t=1446">1992 Stockdale Vice Presidential Debate</a> and <a href="https://www.nytimes.com/1992/11/10/science/clinton-to-promote-high-technology-with-gore-in-charge.html">"Clinton to Promote High Technology, With Gore in Charge"</a> from the November 10, 1992 New York Times as examples.</p>
      </li>
</ol>

<p class="foot"><a name="unconfirmed"><b>&dagger;</b></a> Efforts were made to confirm these links are accurate but there has not been any response.</p>
<h4>Survey Methodology</h4>

<p>Search queries were performed on archive.org text search, Google books, Google groups and ProQuest Central with the access covered by the LA public library card between September 18 2022 and October 3 2022.</p>

<p>Terms searched were "arpanet", "arpa network", "darpanet", "internet 1969", "internet history", "internet started", "internet atomic", "internet bomb", "internet nuclear", and "internet war"</p>

<p>Only documents with a published date of before January 1 1996 were considered. The texts chosen needed to have enough words to establish their faction.</p>

<p>A number of works were not considered. A few examples have been placed below with the reason:</p>
<ul>
  <li><a href="https://archive.org/details/unixnetworkprogr0000stev/page/198/mode/2up">Stevens, W. Richard. "UNIX Network Programming", 1990</a>: No origin story.</li>
  <li><a href="https://archive.org/details/internetworkingw00come/page/32/mode/2up">Comer, Douglas E. "Internetworking with TCP/IP", 1991</a>: Description too short. (Scientific research)</li>
  <li><a href="https://archive.org/details/internetgettings0000unse/mode/2up">Marine, April. "Internet: Getting Started", 1992</a>: No origin story.</li>
  <li><a href="https://archive.org/details/internetcompanio00laqu_0/page/2/mode/2up">LaQuey, Tracy. "The Internet Companion", 1993</a>: Description too short. (Collaboration by design)</li>
  <li><a href="https://archive.org/details/exploringinterne00mala/mode/2up">Malamud, Carl. "Exploring the Internet", 1993</a>: Although it's a 424 page text that's intimate with the ARPA people it actually surprisingly has no origin story.</li>
  <li><a href="https://www.proquest.com/pqrl/docview/256444711/CB37587A4CC64A11PQ/16">(Proquest) Bajarak, Frank. "Growing Internet connects worldwide web of users", Austin American Statesman, May 31 1993</a>: Description too short. ("&hellip;as a Cold War security blanket")</li>
  <li><a href="https://archive.org/details/tcpiparchitectur00feit/page/4/mode/2up">Feit, Sidnie. "TCP/IP: Architecture, Protocols, and Implementation", 1993</a>: Description too short. (Scientific Research)</li>
  <li><a href="https://archive.org/details/sim_newsweek_1993-09-06_122_10/page/36/mode/2up">Newsweek, Sep 9, 1993</a>: Description too short. (Collaboration by design)</li>
  <li><a href="https://www-proquest-com.ezproxy.lapl.org/central/docview/294801007/F9B76FC7236D4899PQ/9">(Proquest) Hyatt, Josh. "Network difficulties Computer world's Internet sees clash of cultures", Boston Globe, Sep 15 1993</a>: Description too short (Collaboration by design)</li>
  <li><a href="https://archive.org/details/zenartofinternet00keho/mode/2up">Kehoe, Brendan P. "Zen and The Art of The Internet: A Beginner's Guide", 1994</a>: Frequently referenced, no origin story.</a></li>
  <li><a href="https://www.proquest.com/central/docview/307909591/CDE810A37ADD4A38PQ/90">(Proquest) Swisher, Kara. "The Frenzy Over the Internet's Fee Enterprise", The Washington Post, Oct 16, 1995</a>: Description too short. ("Since the Internet's founding in 1969 to aid government communications in wartime")</li>
</ul>    
<h5><b>You made it to the end. Epic.</b></h5><h5><a href="https://github.com/kristopolous/sf">Edit history is on github</a>.<br/>I guess you could also <a href="https://twitter.com/emoRobot">follow me on twitter</a>, ok sure.</h5>
  </main>
  </html>
