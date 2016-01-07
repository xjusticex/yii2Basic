<?php
/* @var $this yii\web\View */
?>
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<form action="/test/upload" method="post">
<textarea id="editor1" name="editor1" ></textarea>
</form>
<script>
    CKEDITOR.replace( 'editor1', {
        extraPlugins: 'mathjax',
        mathJaxLib: 'http://cdn.mathjax.org/mathjax/2.2-latest/MathJax.js?config=TeX-AMS_HTML',
        height: 320
    } );

    if ( CKEDITOR.env.ie && CKEDITOR.env.version == 8 ) {
        document.getElementById( 'ie8-warning' ).className = 'tip alert';
    }
</script>