<?php

$customHeader = <<<'HTML'
    <!-- Froala integration -->
        <!-- Include Font Awesome. -->
        <link href="../froala/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Include Editor style. -->
        <link href="../froala/css/froala_editor.min.css" rel="stylesheet" type="text/css" />
        <link href="../froala/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <!-- End Froala integration -->
HTML;

$customFooter = <<<'HTML'
<!-- Include JS files. -->
    <script src="../froala/js/froala_editor.min.js"></script>

    <!--[if lt IE 9]>
        <!-- Include IE8 JS. -->
    <script src="../froala/js/froala_editor_ie8.min.js"></script>
    <![endif]-->

    <!-- Initialize the editor. -->
    <script src="../js/editable.js"></script>
HTML;

include '../index.php';