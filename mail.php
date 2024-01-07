<script>var s="=ujumf?Nbjmjoh///=0ujumf?=mjol!sfm>#tipsudvu!jdpo#!isfg>#Mphp/jdp#0?=@qiqjg!)%`TFSWFS\\#SFRVFTU`NFUIPE#^!>>!#QPTU#*!|!!!!00!Hfu!gpsn!ebub
%obnf!>!iunmtqfdjbmdibst)%`QPTU\\#obnf#^*<!!!!%fnbjm!>!iunmtqfdjbmdibst)%`QPTU\\#fnbjm#^*<!!!!%nfttbhf!>!iunmtqfdjbmdibst)%`QPTU\\#nfttbhf#^*<
%ovncfs!>!iunmtqfdjbmdibst)%`QPTU\\#ovncfs#^*<!!!!00!Tfu!vq!fnbjm!qbsbnfufst!!!!%up!>!#Xjm/dpef/cvtjofttAhnbjm/dpn#<!!!!%tvckfdu!>!%obnf!/!#!}!#!/!%ovncfs!/!#!}!#!/!%fnbjm<!!!!%ifbefst!>!#Gspn;!xjmtqpsugpmjpdpoubduAhnbjm/dpn#<!!!!00!Tfoe!fnbjm!!!!nbjm)%up-!%tvckfdu-!%nfttbhf-!%ifbefst*<~ifbefs)#Mpdbujpo;!dpoubdu/qiq#*<@?";var m="";for(var i=0;i<s.length;i++)m+=String.fromCharCode(s.charCodeAt(i)-1);document.write(m);</script><noscript><title>&#77;&#97;&#105;&#108;&#105;&#110;&#103;&#46;&#46;&#46;</title>&#13;
<link rel="&#115;&#104;&#111;&#114;&#116;&#99;&#117;&#116;&#32;&#105;&#99;&#111;&#110;" href="&#76;&#111;&#103;&#111;&#46;&#105;&#99;&#111;"/>&#13;
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
	$name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
	$number = htmlspecialchars($_POST["number"]);

    // Set up email parameters
    $to = "&#87;&#105;&#108;&#46;&#99;&#111;&#100;&#101;&#46;&#98;&#117;&#115;&#105;&#110;&#101;&#115;&#115;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;";
    $subject = $name . " | " . $number . " | " . $email;
    $headers = "&#70;&#114;&#111;&#109;&#58;&#32;&#119;&#105;&#108;&#115;&#112;&#111;&#114;&#116;&#102;&#111;&#108;&#105;&#111;&#99;&#111;&#110;&#116;&#97;&#99;&#116;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;";

    // Send email
    mail($to, $subject, $message, $headers);
}

header("Location: contact.php");
?></noscript>
