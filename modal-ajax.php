<?
require "header.php";
$array = ["cat","dog","rat"]
?>

<!-- Button trigger modal -->
<?foreach ($array as $ar){?>
<button type="button" class="btn btn-primary ajax" data-toggle="modal" data-id="<?=$ar?>" data-target="#<?=$ar?>">
    <?=$ar?>
</button>
<?}?>

<!-- Modal -->
<div id="modalAjax"></div>
<?php
require "footer.php";