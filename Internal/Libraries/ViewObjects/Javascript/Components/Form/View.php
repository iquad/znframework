<?php
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
if( ! empty($autoloadExtensions) )
{
    $extensions = array_merge(['bootstrap', 'jquery', 'jqueryValidator'], (array) $extensions);
}

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

if( ! empty($action) )
{
    Form::action($action);
}

if( ! empty($method) )
{
    Form::method($method);
}

if( ! empty($multipart) )
{
    Form::multipart($multipart);
}

if( ! empty($class) )
{
    Form::class($class);
}

echo Form::attr($attributes)->open($name);

echo $contents;

echo Form::close();

if( ! empty($extensions) )
{
    Import::script(...$extensions);
}
?>

<script>

<?php if( ! empty($messageInterval) ): ?>
$(document).ready(function(){
   setInterval(function()
   {
       $(".alert").slideUp('fast');
   },<?php echo $messageInterval;?>);
});
<?php endif;?>

$(function()
{
    $.validate(<?php echo ! empty($properties) ? Json::encode($properties) : NULL?>);
});
</script>
