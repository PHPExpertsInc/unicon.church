<?php

define('PROJECT_ROOT', realpath(__DIR__ . '/../'));

$customHeader = <<<HTML
    <!-- Froala integration -->
        <!-- Include Font Awesome. -->
        <link href="../froala/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Include Editor style. -->
        <link href="../froala/css/froala_editor.min.css" rel="stylesheet" type="text/css" />
        <link href="../froala/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <!-- End Froala integration -->
HTML;

$customFooter = <<<HTML
<!-- Include JS files. -->
    <script src="../froala/js/froala_editor.min.js"></script>

    <!--[if lt IE 9]>
        <!-- Include IE8 JS. -->
    <script src="../froala/js/froala_editor_ie8.min.js"></script>
    <![endif]-->

    <!-- Initialize the editor. -->
    <script>
        function setSaveParam(editor) {
//            alert(editor.option('contentId'));
            editor.option('saveParams', { contentId: editor.option('contentId') });
        }

        $(function() {
            $('.editable').editable({
                inlineMode: true,
                saveURL: 'http://www.unicon.church/admin/save.php',
                saveRequestType: 'POST',
                //autosave: true,
            });

            $('.editable').on('editable.beforeSave', function (e, editor, data) {
                setSaveParam(editor);
            });

            $('.editable').on('editable.blur', function (e, editor, data) {
                setSaveParam(editor);
                editor.save();
            });
        });
    </script>
HTML;

include '../index.php';