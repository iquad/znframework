<?php
//--------------------------------------------------------------------------------------------------------
// Properties
//--------------------------------------------------------------------------------------------------------
//
//
//
//--------------------------------------------------------------------------------------------------------

if( ! isset($properties['selector']) )
{
    $properties['selector'] = 'textarea';    
}

//--------------------------------------------------------------------------------------------------------
// Autoloader Extension
//--------------------------------------------------------------------------------------------------------
//
// @extension jquery
// @extension bootstrap
// @extension raphael
// @extension morris
//
//--------------------------------------------------------------------------------------------------------

$extensions = JC::extensions($extensions, ['tinymce'], $autoloadExtensions);

//--------------------------------------------------------------------------------------------------------
// Available Extensions
//--------------------------------------------------------------------------------------------------------
//
// Internal/Config/ViewObjects
// 'cdn' =>
// [
//     script => [],
//     style  => []
// ]
//
//--------------------------------------------------------------------------------------------------------
if( ! empty($extensions) )
{
    Import::style(...$extensions);
}

echo Form::attr($attributes)->textarea($id);

if( ! empty($extensions) )
{
    Import::script(...$extensions);
}
?>

<script>
    tinymce.init(<?php echo ! empty($properties) ? Json::encode($properties) : NULL?>);
</script>
