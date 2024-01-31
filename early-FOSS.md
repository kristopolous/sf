We all use Linux today, right?

Why?

Well a 21 year old Finnish student had a hobby project and wrote an email in comp.os.minix about it in 1991 and now we all use it.

This sounds fairly implausible. 

XINU and Minix were around

Notes:

Part of the theory is that as microcomputer capabilities increased, software complexity did as well and the licensing and royalty logistics of open ended, source available, higher level software became increasingly infeasible making the maintenance of a proprietary stack economically unviable outside of the consumer appliance (think smartphone) space

There's a clayton christensen style hypothesis I'm working on about how the increasing computing power of micros were more favorable to various organizational structures and that the *marketplace* success of things like linux and freebsd aren't just due to only hard work but also the context of the conditions.

It's also somewhat a crib from Eric S Raymond's cathedral/bazaar analogy

UNIX System Laboratories, Inc. v. Berkeley Software Design, Inc.

Prices: 
Venix: $1,195 (https://archive.org/details/pctechjournalv4n2febrary1986/page/n153/mode/2up)


In the 1980s, an era known as the Unix Wars was in full swing and the future was all but inevitable. For instance, in the 1984 text, The Coming Computer Industry Shakeout, Stephen McLellan states "IBM may dominate the office automation market with its hardware, but AT&T has the software ... AT&T undoubtedly will come out with its own line of computer products using UNIX" portending not a rise of Microsoft and Windows but instead, AT&T and UNIX for the microcomputer market.

AT&T might have had an edge but like IBM, they were subject to the same cloning strategies that Compaq used to reverse engineer IBM's BIOS using a clean room design. This, along with the hacker ethic led to a number of clones and variations causing some splits that persists to this day.

On the ground many attempts were being made at making Unix take off on cheaper hardware. Interactive Systems Corporation, which was later bought by Kodak, the camera company, came out with IBM's first official PC Unix system called PC/IX in 1984. It cost 22 times more than DOS and Microsoft's own UNIX, Xenix, was already available. IBM claimed it didn't want to overcommit itself to a single vendor at the time. 

In fact, in 1984, there were many UNIX and lookalikes for the PC such as Venix, QNX, Coherent and IDRIS. It was already a multi-belligerent war without any market-share. Could this model eventually figure itself out? 

Then, in March 1985, Dr. Dobb's journal printed a 5-page manifesto out of Boston with an unusual dream. Excerpts:

"Software sellers want to divide the users and conquer them, making each user agree not to share with others... Many programmers are unhappy about the commercialization of system software. It may enable them to make more money, but it requires that they feel like competitors with other programmers rather than like comrades... The fundamental act of friendship among programmers is the sharing of programs; marketing arrangements now in use essentially forbid programmers to treat others as friends... When the kernel and a debugger are written, by the end of 1985 I hope, it will be possible to distribute a GNU system suitable for program development."

This wasn't necessarily a voice in the wilderness at the time as much as a closeted desire. Even IBM PC/IX took a Napster like attitude towards it. From Microsystems, Oct/1984:

"Although IBM markets the product to be installed as a single-user... there are enough hints in the documentation to activate login ports ...they have to pay AT&T significantly more in royalties for multiuser sublicenses ... the legal question with respect to AT&T arises: can one legitimately use PC/IX configured as a multiuser UNIX? The license agreement simply prevents one from using the software on more than one machine at a time. This not only seems to permit multiuser usage, but even multimachine usage. The implication clearly is: if you want to, you can."

The following month, Dr. Dobbs printed some letters to the editor, many in response to Stallman's manifestor

Here's a few fun excerpts:

James Glass writes "Here is a true adherent to the Hacker ethic! Mr. Stallman’s militant advocacy is enhanced by his well-written arguments."

However Robert Schwartz sees otherwise: Stallman obviously prefers the former, which is characteristic of the Marxist ideals of the Soviet Union. Me, I prefer the latter, typified by the good old capitalist U. S. of A. This was echoed by David Kettle: I believe Mr. Stallman must be suffering from a few other fantasies besides that of a public domain Unix. Jim Harlan gets at the crux of the model: ". If we follow Mr. Stallman’s philosophy, we have to elevate “society” to a higher level than the individual."

The advocacy in June 1984 for free-marketish competition arguably aligned closer to what Andy Grove, in "Only the Paranoid Survive", depicted as "The Old Vertical Computer Industry", vertical stacks with each vendor supplying the chips, computer, sales, application, and operating system, much in the style of modern day Apple. 

The was proceeded by what he calls "The New Horizontal Computer Industry - circa 1995", the year he wrote it, where each of the elements are stacked horizontally on top of each other.

The reality was that as computer systems became more power and correlatively, computer software became more complicated, so did copyright, attribution, licenses, and restrictions. From 1986, Intellectual Property Rights in an Age of Electronics and Information,

"The establishment of large libraries of reusable software modules raises questions about
ownership and the management of transactions in these resources. Difficulty is likely to arise in determining whether the copyright
ownership of a module constitutes a restraint on the use of a function or an idea."

These problems were easier to mitigate in consumer-facing experiences but in the technical world where the users write and modify the software, it became a murkier question and there were a number of lawsuits coming in the late 80s that specifically dealt with that.





Give the corrections URL

Scope 

This is about the spirit of UNIX and how Linux became the dominant form of it with a focus on microcomputers in the decade of 1984-1994.

What we're ignoring: Windows. Linux’s rise through anti-windows sentiment is really a post Windows 95 phenomena and we're stopping before that. 

Additionally we're interested in why Linux and not say, NetBSD. Those answers all come prior to Windows 95 and NT 4.

Terms:
“UNIX”: all unixy systems. AT&T owned the copyright on UNIX so it makes talking about it complicated. We're going to ignore their copyright because we've got a lot to cover. UNIX is all of them. AT&T Unix is specifically AT&T Unix

Personal computer & Microcomputer: those that are owned or assigned to a single person or household, for instance, an IBM PC. 

Hypothesis:

The radical politics that brought forth the microcomputer revolution liberating computing from the clutches of defense departments and corporations did not mainstream software from the same milieu. 

Linux was the second act of this personal computer revolution: the triumph of personal software on personal hardware.

Just as the UNIX revolution was about empowering minicomputers, the Linux revolution was about empowering microcomputers and with it came similar social and institutional dynamics, arguably with fewer mistakes.

It arose at the inflection point of the growth of the hacker and UNIX underground culture, increasing power of microcomputers and wide availability of the Internet. Linux was available, accessible and legally in the clear. These qualities and its timing were more important than its technical merits.

Well that was quick, we've still got 55 minutes. Oh right, let's demonstrate it.


—
To set the stage and the dynamics let's go into prehistory:

Underground:
Software breaks traditional profit models because the tools of replication are the same as the tools of use and the cost of that replication is zero

Initially hardware and software was rented and metered. You couldn't buy RAM, you could only rent it. The early operating systems, such as OS/360 was also the power meter, counting up how much you owed the computer company.

This created adversarial positioning between the computer user and the computer maker. IBM and its mainframe siblings, which went by the acronym BUNCH were incentivized to get things done well but as slowly and inefficiently as possible. 

If you couldn't afford to pay for your own computer, there was time sharing, where you rented access to something that was in turn rented from a mainframe company.

This all sucks.

In came minicomputera, which you could just buy. But who'd write the software for these cheapskates?

…

That's cool but I don't have $200,000 for a computer. Can't I just throw one together from parts or maybe a kit? 

The new adversarial relationship was the for-profit software companies not wanting to give too much away for too little.. If the system was too good then the company eventually becomes cash starved. As a result you get the survival of the mediocre: Good enough that you pay them but bad enough that you have to keep paying them.

(Flash up Microsoft, Apple, Google and Adobe logos)

This means you can potentially make better microcomputer software by not paying people or moreover, software projects that don't rely on revenue in a horizontally stacked market, can produce high quality software that lasts longer than projects which rely on revenue. (Subscription software might be different)

Use the vertical market diagram.

Different perspectives:

The underground “public domain” software movement with a history of YIPL, Verbum, OTH, phone phreaking, etc. These existed on an anarchist continuum with a varying degree of defiance among its participants.

The legal status of Unix was murky and clean room rewrites were the safest option to invest ones time in.

Although UNIX systems are possible on modest hardware, the benefits 
—

increasing power of microcomputers:
Throughout the 1980s, so called public domain software was the purview not so much of Microsofts DOS but of Digital Research’s earlier disk operating system, CP/M.

As users were able to demand more from their computers, more complex systems were needed to facilitate it. The most popular operating system that dominated minicomputera and high end workstations was an obvious fit.

The capabilities of the Linux operating system and Microcomputing hardware progressed in tandem, decreasing softening the technical case for proprietary UNIX workstations. 

This is the weakest argument because it at best answers “why free UNIX” but not “why Linux”. This line be why there was a wider diversity of free Unixes in production throughout the 90s.
—

How much did high prices have to do with the free alternatives being developed?

What consumers perceive as high prices work as an oppositional coalition building mechanism. 

If a Unix license was readily available at 99 cents there would be a number of people with the principal objection who wished for free alternative. As the nominal price increases, you also get pragmatists interested. 

If the structural prices of the product scale faster than the utility value, that is to say that if large corporations can't increase sufficiently increase their margins by increasing intellectual, hard and time capital investment, then you get corporations interested as well.
—-

In the 1980s, an era known as the Unix Wars was in full swing and the future was all but inevitable. For instance, in the 1984 text, The Coming Computer Industry Shakeout, Stephen McLellan states "IBM may dominate the office automation market with its hardware, but AT&T has the software ... AT&T undoubtedly will come out with its own line of computer products using UNIX" portending not a rise of Microsoft and Windows but instead, AT&T and UNIX for the PC market.

AT&T might have had an edge but like IBM, they were subject to the same cloning strategies that Compaq used to reverse engineer IBM's BIOS using a clean room design. This, along with the hacker ethic led to a number of clones and variations, causing some splits that persists to this day.

On the ground many attempts were being made to make Unix takeoff on cheaper hardware. Interactive Systems Corporation, which was later bought by Kodak, came out with IBM's first official PC Unix system called PC/IX in 1984. It cost 22 times more than DOS and Microsoft's own UNIX, Xenix, was already available. IBM claimed it didn't want to overcommit itself to a single vendor.

In fact, in 1984, there were many UNIX and lookalikes for the PC such as Venix, QNX, Coherent and IDRIS. It was already a multi-belligerent war without any market-share. Could this model eventually figure itself out?

In March 1985, Dr. Dobb's journal printed a 5-page manifesto out of Boston with an unusual dream. Excerpts:

"Software sellers want to divide the users and conquer them, making each user agree not to share with others... Many programmers are unhappy about the commercialization of system software. It may enable them to make more money, but it requires that they feel like competitors with other programmers rather than like comrades... The fundamental act of friendship among programmers is the sharing of programs; marketing arrangements now in use essentially forbid programmers to treat others as friends... When the kernel and a debugger are written, by the end of 1985 I hope, it will be possible to distribute a GNU system suitable for program development."

This wasn't necessarily a voice in the wilderness at the time as much as a closeted desire. Even IBM PC/IX took a Napster like attitude towards it. From Microsystems, Oct/1984:

"Although IBM markets the product to be installed as a single-user... there are enough hints in the documentation to activate login ports ...they have to pay AT&T significantly more in royalties for multiuser sublicenses ... the legal question with respect to AT&T arises: can one legitimately use PC/IX configured as a multiuser UNIX? The license agreement simply prevents one from using the software on more than one machine at a time. This not only seems to permit multiuser usage, but even multimachine usage. The implication clearly is: if you want to, you can." 

Software world of 2024
Closed commercial systems got squeezed out by open free ones
0 Traditional Commercial Unix vendors survived
The current vendors, Googles ChromeOS & Android and Apple’s macOS aren’t regarded as Unix vendors 
Unix-ish systems have a likely majority marketshare of conventional computers, smart phones, smart devices and other operating system running things like cars and routers 

Among the various modalities of software distribution such as shareware, source available, closed source, etc. Fully or partially open-source has become the defacto model
	With the notable exception of service oriented software such as, say Amazon’s ecommerce or Google’s search platform wherein the underlying software is not available by any method.
	Some companies such as Oracle and Adobe still use the classic commercial software model
Resources
	Early magazines
Datamation 1957-
Computerworld 1967-
People's Computer Company
Underground
	Mondo
		Youth International Party Line
	Verbum

Interface Age is the magazine with the turntable record software
Axioms
Linux and GNU played a key role 
Theories
Software went from retail distribution with non-zero cost to electronic with near-zero cost.

Hardware sophistication increased the potential for software complexity which increased the demand for flexibility and interoperability which made the cost of commercial efforts scale out of economic reach
Closed-systems devices such as digital advertising or IoT devices lack the complexity 

	Hybrid open/closed system allows people to extend the closed system through open touch points


Software complexity


posix is part of it because the definition of open changed

unix used to have reliability and interface issues

openlook about the “open” definition
open software foundation 1988
IBM/AT&T ^

VA Linux started in 1993
walnut creek cdrom

unix was a source code license

cypherpunk is important https://en.wikipedia.org/wiki/Information_wants_to_be_free

https://archive.org/details/lifewithunixguid0000libe/page/226/mode/2up?q=USENET+FSF&view=theater


The free split can roughly be categorized as
: mach
: minix
: linux
: bsd

Without offending the bsd heads, the question is why did Linux “win”?

USENET:
	alt.sources 

Also look for the term “Public Domain” 


1986: 

And I find that in the pursuit of public domain software, and its use, quite a bit of that spirit remains among the users and those who contribute software. People write it for their own amusement and enjoyment and contribute it to the public domain through services like CompuServe and user groups. There are a number of users who pounce on any piece of software they can find. I can only assume they use it for the fun of it

Business people may take a quick look at public domain software, but it’s more convenient for them simply to go out and make a purchase. It’s too big a hassle for them to dig through the software.”

The fact is that, in general, what’s available in the public domain stays several lengths ahead of what’s available in the retail market. If you need a utility for a specific and narrow purpose, there’s a better chance that someone out there has written one and dropped it into the public domain. 

I've written some great software and had a sense of smugness, like Pd just pulled a rabbit out of my hat, and my friends say, ‘Eh, so what!” Davies says. “I’ve also taken little utilities that were 10-minute knockoffs, that I don’t think much of, and people were excited about them. I really can’t get a sense of what people value.”

Personal Computing - February 1986

There's that analysis of people getting free stuff having a higher threshold to quality issues



AMICUS Beginnings

The AMICUS Network^ started in late summer on Usenet^, the worldwide Unix user's network. Originally for Amiga (tevelopers, AMICUS'^ grew to inclutte interested Amiga users, non-official software (tevelopers, and local Amiga user groups.

I have long had a dream that a national user group could prcKJuce great public ctomain software. There are few reasons why public domain software can't be as good as commercial software So much great effort is put into public (tomain software, however, much of the effort is duplicat^l by different groups and individuals.

By coordinating ourselves, we can produce public domain spreadsheets, word processors, even compilers, and more Creating new tools is an exciting way to learn about the Amiga^. All in all. AMICUS"^ can speed and foster Amiga program development, both public and private.


