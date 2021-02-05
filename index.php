<!DOCTYPE html>
<?php

// Settings
  // ========

  // Latest Stable Release
  $nwStableVers   = "1.0.4";
  $nwStableDate   = "2021-02-03";
  $nwStableNotes  = "https://github.com/vkbo/novelWriter/releases/tag/v1.0.4";
  $nwStableMinWin = "https://github.com/vkbo/novelWriter/releases/download/v1.0.4/novelWriter-1.0.4-minimal.zip";
  $nwStableMinLnx = "https://github.com/vkbo/novelWriter/releases/download/v1.0.4/novelWriter-1.0.4-minimal.zip";
  $nwStableSrcTar = "https://github.com/vkbo/novelWriter/archive/v1.0.4.tar.gz";
  $nwStableSrcZip = "https://github.com/vkbo/novelWriter/archive/v1.0.4.zip";

  // Latest Testing Release
  $nwTestingVers   = "1.1 RC1";
  $nwTestingDate   = "2021-01-31";
  $nwTestingNotes  = "https://github.com/vkbo/novelWriter/releases/tag/v1.1rc1";
  $nwTestingMinWin = "https://github.com/vkbo/novelWriter/releases/download/v1.1rc1/novelWriter-1.1rc1-minimal.zip";
  $nwTestingMinLnx = "https://github.com/vkbo/novelWriter/releases/download/v1.1rc1/novelWriter-1.1rc1-minimal.zip";
  $nwTestingSrcTar = "https://github.com/vkbo/novelWriter/archive/v1.1rc1.tar.gz";
  $nwTestingSrcZip = "https://github.com/vkbo/novelWriter/archive/v1.1rc1.zip";

  // URLs
  $setupWindows = "https://novelwriter.readthedocs.io/en/stable/setup_windows.html";
  $setupLinux   = "https://novelwriter.readthedocs.io/en/stable/setup_linux.html";

  // Settings
  $fmtDateL = "F j, Y";
  $fmtDateS = "M j, Y";

?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" content="Veronica Berglyd Olsen">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="icon" href="images/icon-novelwriter-32.png" sizes="32x32">
  <link rel="icon" href="images/icon-novelwriter-192.png" sizes="192x192">
  <link rel="apple-touch-icon" href="images/icon-novelwriter-192.png">
  <meta name="msapplication-TileImage" content="images/icon-novelwriter-192.png">
</head>
<body>
<header>
  <div id="top-banner">
    <div class="text-box">
      Want to contribute? Fork novelWriter on <a href="https://github.com/vkbo/novelWriter">GitHub</a>
    </div>
  </div>
  <div id="header-content">
    <h1>novelWriter</h1>
    <div id="sub-title">A markdown-like editor for novels</div>
  </div>
</header>
<nav>
  <div id="nav-box">
    <ul>
      <li><a href="#features">Features</a></li>
      <li><a href="#download">Download</a></li>
      <li><a href="#license">License</a></li>
      <li><a href="https://novelwriter.readthedocs.io/">Documentation</a></li>
      <li><a href="https://github.com/vkbo/novelWriter/discussions">Ask a Question</a></li>
      <li><a href="https://github.com/vkbo/novelWriter/issues">Report an Issue</a></li>
      <li><a href="https://github.com/vkbo/novelWriter">Source Code</a></li>
    </ul>
  </div>
</nav>
<main>

<a name="overview"></a>
<section id="intro">
  <div class="flex-outer">
    <div class="flex-child-left">
      <p>A markdown-like text editor designed for writing novels and larger projects of many
        smaller plain text documents.</p>
      <p>It is designed to be a simple text editor that allows for easy organisation of text files
        and notes, with a meta data syntax for comments, synopsis, and cross-referencing between
        files, and built on plain text files for robustness.</p>
      <h2>Latest Release</h2>
      <p>Version <?php echo $nwStableVers; ?>, released on <?php echo date($fmtDateL, strtotime($nwStableDate)); ?>.</p>
    </div>
    <div class="flex-child-right">
      <img src="images/screenshot-multi.png" alt="">
    </div>
  </div>
  <div id="intro-slug">
    novelWriter is Free and Open Source, and runs on Linux, Windows and macOS
  </div>
</section>

<a name="download"></a>
<section id="download">
  <div>
    <h1>Download &amp; Setup</h1>

    <h2>Linux</h2>
    <div class="flex-outer">
      <div class="flex-child-left">
        <p><b>Pre-Requisites:</b> Make sure you have at least Python 3.6 installed on your system.
          You also need the following python packages on Ubuntu/Debian, or equivalen packages if
          you use another OS and package manager:</p>
        <pre>sudo apt install python3-pyqt5 python3-lxml python3-enchant</pre>
        <p><b>Installation:</b> Download the tar.gz file, extract it, and run:</p>
        <pre>./setup.py install</pre>
        <p><b>Launcher:</b> To install launcher icons, you can also run:</p>
        <pre>./setup.py xdg-install</pre>
        <p><b>Further Details:</b> <a href="<?php echo $setupLinux; ?>">Linux Setup</a></p>
      </div>
      <div class="flex-child-right">
        <div class="flex-sub">
          <img src="images/download-outline.svg" alt="">
        </div>
        <div class="flex-sub">
          <h3>Stable Version</h3>
          <table>
            <tr>
              <td><b>Version:</b></td>
              <td>
                <?php echo $nwStableVers; ?> from <?php echo date($fmtDateS, strtotime($nwStableDate)); ?>
                |
                <a href="<?php echo $nwStableNotes; ?>">Release Notes</a>
              </td>
            </tr>
            <tr>
              <td><b>Download:</b></td>
              <td>
                <a href="<?php echo $nwStableMinLnx; ?>">Minimal Package</a>
                |
                <a href="<?php echo $nwStableSrcTar; ?>">Full Source</a>
              </td>
            </tr>
          </table>
          <h3>Testing Version</h3>
          <table>
            <tr>
              <td><b>Version:</b></td>
              <td>
                <?php echo $nwTestingVers; ?> from <?php echo date($fmtDateS, strtotime($nwTestingDate)); ?>
                |
                <a href="<?php echo $nwTargetNotes; ?>">Release Notes</a>
              </td>
            </tr>
            <tr>
              <td><b>Download:</b></td>
              <td>
                <a href="<?php echo $nwTestingMinLnx; ?>">Minimal Package</a>
                |
                <a href="<?php echo $nwTestingSrcTar; ?>">Full Source</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <h2>Windows</h2>
    <div class="flex-outer">
      <div class="flex-child-left">
        <p><b>Pre-Requisites:</b> Make sure you have Python installed. Version 3.6
          or above is required. If you don't have Python, you can download the latest
          version from <a href="https://www.python.org/downloads/">python.org</a>. Make
          sure you select the "Add Python to PATH" option during installation.</p>
        <p><b>Installation:</b> Download the zip file, extract it to where you want to
          keep the novelWriter program files, and run the <code>setup_windows.bat</code>
          file inside the extracted folder. This will install the Qt libraries and a couple
          of other needed packages from PyPi, and set up desktop and start menu icons.</p>
        <p><b>Further Details:</b> <a href="<?php echo $setupWindows; ?>">Windows Setup</a></p>
      </div>
      <div class="flex-child-right">
        <div class="flex-sub">
          <img src="images/download-outline.svg" alt="">
        </div>
        <div class="flex-sub">
          <h3>Stable Version</h3>
          <table>
            <tr>
              <td><b>Version:</b></td>
              <td>
                <?php echo $nwStableVers; ?> from <?php echo date($fmtDateS, strtotime($nwStableDate)); ?>
                |
                <a href="<?php echo $nwStableNotes; ?>">Release Notes</a>
              </td>
            </tr>
            <tr>
              <td><b>Download:</b></td>
              <td>
                <a href="<?php echo $nwStableMinWin; ?>">Minimal Package</a>
                |
                <a href="<?php echo $nwStableSrcTar; ?>">Full Source</a>
              </td>
            </tr>
          </table>
          <h3>Testing Version</h3>
          <table>
            <tr>
              <td><b>Version:</b></td>
              <td>
                <?php echo $nwTestingVers; ?> from <?php echo date($fmtDateS, strtotime($nwTestingDate)); ?>
                |
                <a href="<?php echo $nwTargetNotes; ?>">Release Notes</a>
              </td>
            </tr>
            <tr>
              <td><b>Download:</b></td>
              <td>
                <a href="<?php echo $nwTestingMinWin; ?>">Minimal Package</a>
                |
                <a href="<?php echo $nwTestingSrcTar; ?>">Full Source</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

</main>
<footer>
  <div class="text-box">
    Copyright &copy; 2018&ndash;<?php echo date("Y"); ?> Veronica Berglyd Olsen
  </div>
</footer>

</body>
</html>
