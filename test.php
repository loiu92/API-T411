<?php
include 'api_t411.php';
$info_t411 = json_decode(stat_t411());
?>

<html>
<h1>Ratio</h1>
<?php echo round($info_t411->uploaded / $info_t411->downloaded, 2); ?>

<h1>Download</h1>
<?php echo round($info_t411->downloaded / 1073741824, 2); ?> GB

<h1>Upload</h1>
<?php echo round($info_t411->uploaded / 1073741824, 2); ?> GB

</html>
