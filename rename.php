<?php
    echo "Enter school name: ";
    $line = fgets(STDIN);

    $doc = new DOMDocument('1.0');
    libxml_use_internal_errors(true);
    $doc->loadHTMLFile("/var/www/cowbell/index.html");
    libxml_clear_errors();
    $doc->getElementById('school-name')->nodeValue = $line;
    $doc->saveHTMLFile("/var/www/cowbell/index.html");

    $doc = new DOMDocument('1.0');
    $doc->loadHTMLFile("/var/www/cowbell/emergency.html");
    $doc->getElementById('school-name')->nodeValue = $line;
    $doc->saveHTMLFile("/var/www/cowbell/emergency.html");

    $doc = new DOMDocument('1.0');
    $doc->loadHTMLFile("/var/www/cowbell/Monday.html");
    $doc->getElementById('school-name')->nodeValue = $line;
    $doc->saveHTMLFile("/var/www/cowbell/Monday.html");

    $doc = new DOMDocument('1.0');
    $doc->loadHTMLFile("/var/www/cowbell/Tuesday.html");
    $doc->getElementById('school-name')->nodeValue = $line;
    $doc->saveHTMLFile("/var/www/cowbell/Tuesday.html");

    $doc = new DOMDocument('1.0');
    $doc->loadHTMLFile("/var/www/cowbell/Wednesday.html");
    $doc->getElementById('school-name')->nodeValue = $line;
    $doc->saveHTMLFile("/var/www/cowbell/Wednesday.html");

    $doc = new DOMDocument('1.0');
    $doc->loadHTMLFile("/var/www/cowbell/Thursday.html");
    $doc->getElementById('school-name')->nodeValue = $line;
    $doc->saveHTMLFile("/var/www/cowbell/Thursday.html");

    $doc = new DOMDocument('1.0');
    $doc->loadHTMLFile("/var/www/cowbell/Friday.html");
    $doc->getElementById('school-name')->nodeValue = $line;
    $doc->saveHTMLFile("/var/www/cowbell/Friday.html");

    echo "School name changed!\n";
?>
