<?php include_once("settings.php"); ?>
<?php include_once("includes/header.php"); ?>

<div id="intro-box">
  <div class="intro-row">
    <div class="intro-text">
      <p>A markdown-like text editor designed for writing novels and larger projects of many
        smaller plain text documents.</p>
      <p>It is designed to be a simple text editor that allows for easy organisation of text files
        and notes, with a meta data syntax for comments, synopsis, and cross-referencing between
        files, and built on plain text files for robustness.</p>
      <h2>Latest Release</h2>
      <p>Version <?php echo $nwStableVers; ?>, released on <?php echo date("j F Y", strtotime($nwStableDate)); ?></p>
    </div>
    <div class="intro-image">
      <img src="images/screenshot-multi.png" alt="">
    </div>
  </div>
</div>
<div id="intro-slug">
  novelWriter is Free and Open Source, and runs on Linux, Windows and macOS
</div>

<?php include_once("includes/footer.php"); ?>
