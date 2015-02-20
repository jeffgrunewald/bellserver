<?php
    $doc = new DOMDocument('1.0');
    $day = $_POST['day'].".html";
    libxml_use_internal_errors(true);
    $doc->loadHTMLFile("../".$day);
    libxml_clear_errors();

    $text = $_POST['day'].".txt";
    $daytxt = fopen("../".$text, "w") or die("Unable to open file!");

    $doc->getElementById('p1-twomin')->nodeValue = $_POST['p1-t1'];
    if (!empty($_POST['p1-t1'])) {
        $txt = $_POST['p1-t1']." twomin\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p1-tardy')->nodeValue = $_POST['p1-t2'];
    if (!empty($_POST['p1-t2'])) {
        $txt = $_POST['p1-t2']." tardy\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p1-end')->nodeValue = $_POST['p1-t3'];
    if (!empty($_POST['p1-t3'])) {
        $txt = $_POST['p1-t3']." end\n";
        fwrite($daytxt, $txt);
    }

    $doc->getElementById('p2-twomin')->nodeValue = $_POST['p2-t1'];
    if (!empty($_POST['p2-t1'])) {
        $txt = $_POST['p2-t1']." twomin\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p2-tardy')->nodeValue = $_POST['p2-t2'];
    if (!empty($_POST['p2-t2'])) {
        $txt = $_POST['p2-t2']." tardy\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p2-end')->nodeValue = $_POST['p2-t3'];
    if (!empty($_POST['p2-t3'])) {
        $txt = $_POST['p2-t3']." end\n";
        fwrite($daytxt, $txt);
    }

    $doc->getElementById('p3-twomin')->nodeValue = $_POST['p3-t1'];
    if (!empty($_POST['p3-t1'])) {
        $txt = $_POST['p3-t1']." twomin\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p3-tardy')->nodeValue = $_POST['p3-t2'];
    if (!empty($_POST['p3-t2'])) {
        $txt = $_POST['p3-t2']." tardy\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p3-end')->nodeValue = $_POST['p3-t3'];
    if (!empty($_POST['p3-t3'])) {
        $txt = $_POST['p3-t3']." end\n";
        fwrite($daytxt, $txt);
    }

    $doc->getElementById('p4-twomin')->nodeValue = $_POST['p4-t1'];
    if (!empty($_POST['p4-t1'])) {
        $txt = $_POST['p4-t1']." twomin\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p4-tardy')->nodeValue = $_POST['p4-t2'];
    if (!empty($_POST['p4-t2'])) {
        $txt = $_POST['p4-t2']." tardy\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p4-end')->nodeValue = $_POST['p4-t3'];
    if (!empty($_POST['p4-t3'])) {
        $txt = $_POST['p4-t3']." end\n";
        fwrite($daytxt, $txt);
    }

    $doc->getElementById('p5-twomin')->nodeValue = $_POST['p5-t1'];
    if (!empty($_POST['p5-t1'])) {
        $txt = $_POST['p5-t1']." twomin\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p5-tardy')->nodeValue = $_POST['p5-t2'];
    if (!empty($_POST['p5-t2'])) {
        $txt = $_POST['p5-t2']." tardy\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p5-end')->nodeValue = $_POST['p5-t3'];
    if (!empty($_POST['p5-t3'])) {
        $txt = $_POST['p5-t3']." end\n";
        fwrite($daytxt, $txt);
    }

    $doc->getElementById('p6-twomin')->nodeValue = $_POST['p6-t1'];
    if (!empty($_POST['p6-t1'])) {
        $txt = $_POST['p6-t1']." twomin\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p6-tardy')->nodeValue = $_POST['p6-t2'];
    if (!empty($_POST['p6-t2'])) {
        $txt = $_POST['p6-t2']." tardy\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p6-end')->nodeValue = $_POST['p6-t3'];
    if (!empty($_POST['p6-t3'])) {
        $txt = $_POST['p6-t3']." end\n";
        fwrite($daytxt, $txt);
    }

    $doc->getElementById('p7-twomin')->nodeValue = $_POST['p7-t1'];
    if (!empty($_POST['p7-t1'])) {
        $txt = $_POST['p7-t1']." twomin\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p7-tardy')->nodeValue = $_POST['p7-t2'];
    if (!empty($_POST['p7-t2'])) {
        $txt = $_POST['p7-t2']." tardy\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p7-end')->nodeValue = $_POST['p7-t3'];
    if (!empty($_POST['p7-t3'])) {
        $txt = $_POST['p7-t3']." end\n";
        fwrite($daytxt, $txt);
    }

    $doc->getElementById('p8-twomin')->nodeValue = $_POST['p8-t1'];
    if (!empty($_POST['p8-t1'])) {
        $txt = $_POST['p8-t1']." twomin\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p8-tardy')->nodeValue = $_POST['p8-t2'];
    if (!empty($_POST['p8-t2'])) {
        $txt = $_POST['p8-t2']." tardy\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p8-end')->nodeValue = $_POST['p8-t3'];
    if (!empty($_POST['p8-t3'])) {
        $txt = $_POST['p8-t3']." end\n";
        fwrite($daytxt, $txt);
    }

    $doc->getElementById('p9-twomin')->nodeValue = $_POST['p9-t1'];
    if (!empty($_POST['p9-t1'])) {
        $txt = $_POST['p9-t1']." twomin\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p9-tardy')->nodeValue = $_POST['p9-t2'];
    if (!empty($_POST['p9-t2'])) {
        $txt = $_POST['p9-t2']." tardy\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p9-end')->nodeValue = $_POST['p9-t3'];
    if (!empty($_POST['p9-t3'])) {
        $txt = $_POST['p9-t3']." end\n";
        fwrite($daytxt, $txt);
    }

    $doc->getElementById('p10-twomin')->nodeValue = $_POST['p10-t1'];
    if (!empty($_POST['p10-t1'])) {
        $txt = $_POST['p10-t1']." twomin\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p10-tardy')->nodeValue = $_POST['p10-t2'];
    if (!empty($_POST['p10-t2'])) {
        $txt = $_POST['p10-t2']." tardy\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p10-end')->nodeValue = $_POST['p10-t3'];
    if (!empty($_POST['p10-t3'])) {
        $txt = $_POST['p10-t3']." end\n";
        fwrite($daytxt, $txt);
    }

    $doc->getElementById('p11-twomin')->nodeValue = $_POST['p11-t1'];
    if (!empty($_POST['p11-t1'])) {
        $txt = $_POST['p11-t1']." twomin\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p11-tardy')->nodeValue = $_POST['p11-t2'];
    if (!empty($_POST['p11-t2'])) {
        $txt = $_POST['p11-t2']." tardy\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p11-end')->nodeValue = $_POST['p11-t3'];
    if (!empty($_POST['p11-t3'])) {
        $txt = $_POST['p11-t3']." end\n";
        fwrite($daytxt, $txt);
    }

    $doc->getElementById('p12-twomin')->nodeValue = $_POST['p12-t1'];
    if (!empty($_POST['p12-t1'])) {
        $txt = $_POST['p12-t1']." twomin\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p12-tardy')->nodeValue = $_POST['p12-t2'];
    if (!empty($_POST['p12-t2'])) {
        $txt = $_POST['p12-t2']." tardy\n";
        fwrite($daytxt, $txt);
    }
    $doc->getElementById('p12-end')->nodeValue = $_POST['p12-t3'];
    if (!empty($_POST['p12-t3'])) {
        $txt = $_POST['p12-t3']." end\n";
        fwrite($daytxt, $txt);
    }

    $doc->saveHTMLFile("../".$day);
    fclose($daytxt);

    header("Location: ../".$day);
?>
