function setSaveParam(editor) {
//            alert(editor.option('contentId'));
    editor.option('saveParams', { contentId: editor.$box.data('contentId') });
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
