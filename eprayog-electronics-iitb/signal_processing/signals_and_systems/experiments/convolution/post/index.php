<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 10">
<meta name=Originator content="Microsoft Word 10">
<link rel=File-List href="post_files/filelist.xml">
<title>EXPERIMENT 1: DISCRETE TIME CONVOLUTION</title>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Narendra</o:Author>
  <o:LastAuthor>wel-03</o:LastAuthor>
  <o:Revision>3</o:Revision>
  <o:TotalTime>8</o:TotalTime>
  <o:Created>2010-09-30T11:40:00Z</o:Created>
  <o:LastSaved>2010-10-20T10:27:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>127</o:Words>
  <o:Characters>727</o:Characters>
  <o:Company>Microsoft</o:Company>
  <o:Lines>6</o:Lines>
  <o:Paragraphs>1</o:Paragraphs>
  <o:CharactersWithSpaces>853</o:CharactersWithSpaces>
  <o:Version>10.2625</o:Version>
 </o:DocumentProperties>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:GrammarState>Clean</w:GrammarState>
  <w:PunctuationKerning/>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
 </w:WordDocument>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:1627421319 -2147483648 8 0 66047 0;}
@font-face
	{font-family:Calibri;
	mso-font-alt:Arial;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520092929 1073786111 9 0 415 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-bidi-font-family:"Times New Roman";}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-noshow:yes;
	color:purple;
	text-decoration:underline;
	text-underline:single;}
p.ListParagraph, li.ListParagraph, div.ListParagraph
	{mso-style-name:"List Paragraph";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-bidi-font-family:"Times New Roman";}
p.ListParagraphCxSpFirst, li.ListParagraphCxSpFirst, div.ListParagraphCxSpFirst
	{mso-style-name:"List ParagraphCxSpFirst";
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-bidi-font-family:"Times New Roman";}
p.ListParagraphCxSpMiddle, li.ListParagraphCxSpMiddle, div.ListParagraphCxSpMiddle
	{mso-style-name:"List ParagraphCxSpMiddle";
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-bidi-font-family:"Times New Roman";}
p.ListParagraphCxSpLast, li.ListParagraphCxSpLast, div.ListParagraphCxSpLast
	{mso-style-name:"List ParagraphCxSpLast";
	mso-style-type:export-only;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-bidi-font-family:"Times New Roman";}
span.Char
	{mso-style-name:Char;
	mso-style-noshow:yes;
	mso-style-link:"Balloon Text";
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:Tahoma;
	mso-ascii-font-family:Tahoma;
	mso-hansi-font-family:Tahoma;
	mso-bidi-font-family:Tahoma;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
@page Section1
	{size:595.3pt 841.9pt;
	margin:1.0in 1.0in 1.0in 1.0in;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 @list l0
	{mso-list-id:187764503;
	mso-list-type:hybrid;
	mso-list-template-ids:3409276 -1340837770 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;}
@list l0:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:39.3pt;
	text-indent:-.25in;}
@list l0:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:75.3pt;
	text-indent:-.25in;}
@list l0:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l0:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1
	{mso-list-id:984089797;
	mso-list-type:hybrid;
	mso-list-template-ids:467709452 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;}
@list l1:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2
	{mso-list-id:1165046647;
	mso-list-type:hybrid;
	mso-list-template-ids:1889539874 1245621204 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;}
@list l2:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:32.2pt;
	text-indent:-.25in;}
@list l2:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3
	{mso-list-id:1437478111;
	mso-list-type:hybrid;
	mso-list-template-ids:-570786634 1074331649 1074331651 1074331653 1074331649 1074331651 1074331653 1074331649 1074331651 1074331653;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:74.05pt;
	text-indent:-.25in;
	font-family:Symbol;}
@list l3:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4
	{mso-list-id:1642077338;
	mso-list-type:hybrid;
	mso-list-template-ids:-1044978366 -1735226238 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;}
@list l4:level1
	{mso-level-number-format:alpha-lower;
	mso-level-text:"%1\)";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:57.3pt;
	text-indent:-.25in;}
@list l4:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5
	{mso-list-id:1724060291;
	mso-list-type:hybrid;
	mso-list-template-ids:-1943210134 1074331649 1074331651 1074331653 1074331649 1074331651 1074331653 1074331649 1074331651 1074331653;}
@list l5:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:55.0pt;
	text-indent:-.25in;
	font-family:Symbol;}
@list l5:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l5:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6
	{mso-list-id:2132893118;
	mso-list-type:hybrid;
	mso-list-template-ids:-1909437416 -1914149510 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;}
@list l6:level1
	{mso-level-number-format:alpha-lower;
	mso-level-text:"%1\)";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:57.3pt;
	text-indent:-.25in;}
@list l6:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman";}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="8194"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US link=blue vlink=purple style='tab-interval:.5in'>

<div class=Section1>

<p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'>EXPERIMENT 1: DISCRETE TIME CONVOLUTION<o:p></o:p></b></p>

<p class=MsoNormalCxSpMiddle style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;margin-left:35.45pt;mso-add-space:auto;line-height:normal'><span
style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormalCxSpMiddle style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;margin-left:14.2pt;mso-add-space:auto;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;font-family:
"Times New Roman";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
Calibri'><span style='mso-spacerun:yes'>�</span>Post Session work</span></b><span
style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:Calibri'>: <o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:0in;margin-bottom:
5.0pt;margin-left:32.2pt;mso-add-space:auto;text-indent:-.25in;line-height:
normal;mso-list:l2 level1 lfo12'><![if !supportLists]><span style='font-size:
12.0pt;font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman"'><span
style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Calibri'>Compute
the convolution y[n] of the signals<o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:0in;margin-bottom:
5.0pt;margin-left:75.3pt;mso-add-space:auto;text-indent:-.25in;line-height:
normal;mso-list:l0 level2 lfo4'><![if !supportLists]><span style='font-size:
12.0pt;font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman"'><span
style='mso-list:Ignore'>a.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Calibri'>x[n] = </span><span
style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:Calibri'>a</span><span style='font-size:12.0pt;font-family:
"Times New Roman";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
Calibri'>^n for -3&lt;n&lt;5n (Choose any value of </span><span
style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:Calibri'>a&gt;1</span><span style='font-size:12.0pt;
font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:Calibri'> )<o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='mso-margin-top-alt:auto;margin-bottom:5.0pt;
mso-add-space:auto;line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:Calibri'><span style='mso-spacerun:yes'>���������� </span><span
style='mso-tab-count:1'> </span><span
style='mso-spacerun:yes'>�����������</span>0 otherwise<o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='mso-margin-top-alt:auto;margin-bottom:5.0pt;
mso-add-space:auto;line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:Calibri'><span style='mso-tab-count:1'>����������� </span><span
style='mso-spacerun:yes'>�</span><span class=GramE>h[</span>n] = 1 for for
0&lt;n&lt;4<o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:0in;margin-bottom:
5.0pt;margin-left:101.25pt;mso-add-space:auto;line-height:normal'><span
style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:Calibri'><span
style='mso-spacerun:yes'>� </span><span class=GramE>0<span
style='mso-spacerun:yes'>� </span>otherwise</span> <o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:0in;margin-bottom:
5.0pt;margin-left:75.3pt;mso-add-space:auto;text-indent:-.25in;line-height:
normal;mso-list:l0 level2 lfo4'><![if !supportLists]><span style='font-size:
12.0pt;font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman"'><span
style='mso-list:Ignore'>b.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Calibri'>x[n] =
(</span><span style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:Calibri'>1/3)</span><span
style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:Calibri'>n for 0&lt;n&lt;6<o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='mso-margin-top-alt:auto;margin-bottom:5.0pt;
mso-add-space:auto;line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:Calibri'><span style='mso-spacerun:yes'>���������� </span><span
style='mso-tab-count:1'> </span><span
style='mso-spacerun:yes'>�����������</span>0 otherwise<o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='mso-margin-top-alt:auto;margin-bottom:5.0pt;
mso-add-space:auto;line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:Calibri'><span style='mso-tab-count:1'>����������� </span><span
style='mso-spacerun:yes'>�</span><span class=GramE>h[</span>n] = 1 for for
-2&lt;n&lt;2<o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='mso-margin-top-alt:auto;margin-bottom:5.0pt;
mso-add-space:auto;line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:Calibri'><span style='mso-tab-count:1'>����������� </span><span
style='mso-spacerun:yes'>���������� </span>0 otherwise <o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='mso-margin-top-alt:auto;margin-bottom:5.0pt;
mso-add-space:auto;line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormalCxSpMiddle style='mso-margin-top-alt:auto;margin-bottom:5.0pt;
mso-add-space:auto;line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:Calibri'>Verify them using the Scilab code provided.<o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='mso-margin-top-alt:auto;margin-bottom:5.0pt;
mso-add-space:auto;line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:0in;margin-bottom:
5.0pt;margin-left:32.2pt;mso-add-space:auto;text-indent:-.25in;line-height:
normal;mso-list:l2 level1 lfo12'><![if !supportLists]><span style='font-size:
12.0pt;font-family:"Times New Roman";mso-fareast-font-family:"Times New Roman"'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:12.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Calibri'>When
does convolution of a sequence x[n] with a sequence h[n] result in the output
y[n] = x[n]?<o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:0in;margin-bottom:
5.0pt;margin-left:32.2pt;mso-add-space:auto;line-height:normal'><span
style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:Calibri'>Give example of such a sequence
and plot it using Scilab.<o:p></o:p></span></p>

<p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:0in;margin-bottom:
5.0pt;margin-left:32.2pt;mso-add-space:auto;line-height:normal'><span
style='font-size:12.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:Calibri'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-indent:17.45pt'><b style='mso-bidi-font-weight:
normal'><span style='mso-bidi-font-family:Calibri'>References</span></b><span
style='mso-bidi-font-family:Calibri'>: <o:p></o:p></span></p>

<p class=ListParagraph style='margin-left:35.45pt;mso-add-space:auto;
text-indent:-.25in;mso-list:l5 level1 lfo14'><![if !supportLists]><span
style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol'><span style='mso-list:Ignore'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>Link to a tutorial to understand the concept of
convolution better.</p>

<p class=MsoNormal style='text-indent:17.45pt'><a
href="http://www.jhu.edu/signals/convolve/index.html">http://www.jhu.edu/signals/convolve/index.html</a></p>

<p class=MsoNormal style='text-indent:17.45pt'><a
href="http://www.jhu.edu/signals/discreteconv2/index.html">http://www.jhu.edu/signals/discreteconv2/index.html</a></p>

</div>

</body>

</html>
