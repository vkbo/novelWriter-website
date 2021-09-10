<!DOCTYPE html>
<?php

// Settings
  // ========

  // Latest Stable Release
  $nwStableVers   = "1.4.2";
  $nwStableDate   = "2021-08-30";
  $nwStableNotes  = "https://github.com/vkbo/novelWriter/releases/tag/v1.4.2";
  $nwStableMinMac = "https://github.com/vkbo/novelWriter/releases/download/v1.4.2/novelWriter-1.4.2-minimal-darwin.zip";
  $nwStableMinLnx = "https://github.com/vkbo/novelWriter/releases/download/v1.4.2/novelWriter-1.4.2-minimal-linux.zip";
  $nwStableMinWin = "https://github.com/vkbo/novelWriter/releases/download/v1.4.2/novelWriter-1.4.2-minimal-win.zip";
  $nwStablePWheel = "https://github.com/vkbo/novelWriter/releases/download/v1.4.2/novelWriter-1.4.2-py3-none-any.whl";
  $nwStableSrcZip = "https://github.com/vkbo/novelWriter/archive/refs/tags/v1.4.2.zip";
  $nwStableSrcTar = "https://github.com/vkbo/novelWriter/archive/refs/tags/v1.4.2.tar.gz";

  // Latest Testing Release
  $hasTestingvers  = true;
  $nwTestingVers   = "1.5 RC 1";
  $nwTestingDate   = "2021-09-10";
  $nwTestingNotes  = "https://github.com/vkbo/novelWriter/releases/tag/v1.5rc1";
  $nwTestingMinMac = "https://github.com/vkbo/novelWriter/releases/download/v1.5rc1/novelWriter-1.5rc1-minimal-darwin.zip";
  $nwTestingMinLnx = "https://github.com/vkbo/novelWriter/releases/download/v1.5rc1/novelWriter-1.5rc1-minimal-linux.zip";
  $nwTestingMinWin = "https://github.com/vkbo/novelWriter/releases/download/v1.5rc1/novelWriter-1.5rc1-minimal-win.zip";
  $nwTestingDebian = "https://github.com/vkbo/novelWriter/releases/download/v1.5rc1/novelwriter_1.5rc1_all.deb";
  $nwTestingPWheel = "https://github.com/vkbo/novelWriter/releases/download/v1.5rc1/novelWriter-1.5rc1-py3-none-any.whl";
  $nwTestingSrcZip = "https://github.com/vkbo/novelWriter/archive/refs/tags/v1.5rc1.zip";
  $nwTestingSrcTar = "https://github.com/vkbo/novelWriter/archive/refs/tags/v1.5rc1.tar.gz";

  // URLs
  $setupLinux   = "https://novelwriter.readthedocs.io/en/latest/setup_linux.html";
  $setupWindows = "https://novelwriter.readthedocs.io/en/latest/setup_windows.html";
  $setupMacOS   = "https://novelwriter.readthedocs.io/en/latest/setup_mac.html";

  $ppaFull = "https://launchpad.net/~vkbo/+archive/ubuntu/novelwriter";
  $ppaPre  = "https://launchpad.net/~vkbo/+archive/ubuntu/novelwriter-pre";

  // Settings
  $fmtDateL = "F j, Y";
  $fmtDateS = "M j, Y";

?>
<html>
<head>
  <meta charset="utf-8">
  <title>novelWriter</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="icon" href="images/icon-novelwriter-32.png" sizes="32x32">
  <link rel="icon" href="images/icon-novelwriter-192.png" sizes="192x192">
  <link rel="apple-touch-icon" href="images/icon-novelwriter-192.png">
  <meta name="msapplication-TileImage" content="images/icon-novelwriter-192.png" />
  <meta name="author" content="Veronica Berglyd Olsen" />
  <meta property="og:title" content="novelWriter" />
  <meta property="og:description" content="A markdown-like editor for novels" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:image" content="https://novelwriter.io/images/screenshot-multi.png" />
  <meta property="og:image:secure_url" content="https://novelwriter.io/images/screenshot-multi.png" />
  <meta property="og:image:type" content="image/png" />
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
</head>
<body>
<header>
  <div id="top-banner">
    <div class="text-box">
      Want to contribute? Fork novelWriter on <a href="https://github.com/vkbo/novelWriter">GitHub</a>
    </div>
  </div>
  <div id="header-content">
    <h1><a href="https://novelwriter.io">novelWriter</a></h1>
    <div id="sub-title">A markdown-like editor for novels</div>
  </div>
</header>
<nav>
  <div id="nav-box">
    <ul>
      <li><a href="#features">Features</a></li>
      <li><a href="#download">Download</a></li>
      <li><a href="https://novelwriter.readthedocs.io" title="External Link">Documentation</a></li>
      <li><a href="https://github.com/vkbo/novelWriter/discussions" title="External Link">Ask a Question</a></li>
      <li><a href="https://github.com/vkbo/novelWriter/issues" title="External Link">Report an Issue</a></li>
      <li><a href="https://github.com/vkbo/novelWriter" title="External Link">On GitHub</a></li>
      <li><a href="https://pypi.org/project/novelWriter" title="External Link">On PyPi</a></li>
      <li><a href="https://ko-fi.com/D1D53R18W" title="External Link"><img src="images/ko-fi-logo.png"> Buy Me a Coffee</a></li>
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
      <p>Version <?php echo $nwStableVers; ?> released on <?php echo date($fmtDateL, strtotime($nwStableDate)); ?>.</p>
      <p>Read the <a href="<?php echo $nwStableNotes; ?>">Release Notes</a>.</p>
    </div>
    <div class="flex-child-right">
      <img src="images/screenshot-multi.png" alt="A screenshot of the novelWriter main application, with two dialogs superimposed.">
    </div>
  </div>
  <div id="intro-slug">novelWriter is Free and Open Source, and runs on Linux, Windows and macOS</div>
</section>

<a name="features"></a>
<section id="features">
  <div class="text-box">
    <h1 class="section-title">Key Features</h1>
  </div>
  <div class="feature-carousel">
    <div class="feature-slide">
      <div class="flex-outer">
        <div class="flex-child-left">
          <h2>Easy Project Overview</h2>
          <p>novelWriter allows you to break down your novel in whatever way you need, and your
            documents can be dragged and dropped, and organised into folders.</p>
          <p>Cross-references to your project notes are defined by convenient meta keyword/value
            tags. You can even insert comments.</p>
        </div>
        <div class="flex-child-right">
          <img src="images/f-nw-editor-light.png" alt="Screenshot of the main application window.">
        </div>
      </div>
    </div>
    <div class="feature-slide">
      <div class="flex-outer">
        <div class="flex-child-left">
          <h2>Project Outline</h2>
          <p>The <i>Outline</i> tab gives you a quick overview of the structure of your novel in
            terms of your chapters and scenes.</p>
          <p>It also shows you all the associated meta data and cross-references in user defined columns.</p>
        </div>
        <div class="flex-child-right">
          <img src="images/f-nw-outline-light.png" alt="Screenshot of the main application window with the outline tab active.">
        </div>
      </div>
    </div>
    <div class="feature-slide">
      <div class="flex-outer">
        <div class="flex-child-left">
          <h2>Build &amp; Export</h2>
          <p>The <i>Build Novel Project</i> tool lets you assemble all your files into a single
            document. You can filter what to include and make a draft of your novel, or an outline
            showing all your notes.</p>
          <p>The result can be printed or saved to HTML, Open Document, Markdown, Plain Text, or PDF.</p>
        </div>
        <div class="flex-child-right">
          <img src="images/f-nw-build-light.png" alt="Screenshot of the Buld Novel project dialog.">
        </div>
      </div>
    </div>
    <div class="feature-slide">
      <div class="flex-outer">
        <div class="flex-child-left">
          <h2>Dark Theme &amp; Syntax</h2>
          <p>novelWriter defaults to your system’s colour theme, but also comes with an optional dark theme.</p>
          <p>You can also choose from a number of light and dark syntax highlighting themes, and
            between four <a href="https://www.s-ings.com/typicons">Typicons</a> icon sets for dark and light backgrounds.</p>
        </div>
        <div class="flex-child-right">
          <img src="images/f-nw-editor-dark.png" alt="Screenshot of the main application window with dark colours.">
        </div>
      </div>
    </div>
    <div class="feature-slide">
      <div class="flex-outer">
        <div class="flex-child-left">
          <h2>Other Features</h2>
          <h3>Document Viewer</h3>
          <p>Any document, including the document you’re editing, can be viewed in parallel in a
            separate view panel.</p>
          <h3>Editor Focus Mode</h3>
          <p>In <i>Focus Mode</i>, the editor covers the full window, hiding away the project tree
            and the view panel so you can focus on the text.</p>
        </div>
        <div class="flex-child-right">
          <h2>&nbsp;</h2>
          <h3>Follow Links &amp; References</h3>
          <p>Tags and references are clickable so you can quickly navigate between your notes
            while writing. Documents open in the view panel will also have a list of all other
            documents pointing back to it.</p>
        </div>
      </div>
    </div>
  </div>
  <div id="features-sub">
    <div class="flex-outer">
      <div class="flex-child-left">
        <p>Want to know more?</p>
        <a href="https://novelwriter.readthedocs.io"><img src="images/readthedocs.png" alt="The Read the Docs logo."></a>
      </div>
      <div class="flex-child-right">
        <p>Built with ...</p>
        <a href="https://www.python.org"><img src="images/python-logo.png" alt="The Python logo."></a>
        <a href="https://www.qt.io"><img src="images/qt-logo.png" alt="The Qt Company logo."></a>
      </div>
    </div>
  </div>
</section>

<a name="download"></a>
<section id="download">
  <div class="text-box">
    <h1 class="section-title">Download &amp; Setup</h1>

    <h2>Linux</h2>
    <div class="flex-outer">
      <div class="flex-child-left">
        <p><b>Ubuntu:</b> A <a href="<?php echo $ppaFull; ?>">PPA</a>
          is available for easy installation and updating:</p>
        <pre><?php echo "sudo add-apt-repository ppa:vkbo/novelwriter\nsudo apt update && sudo apt install novelwriter"; ?></pre>
        <p><b>Debian:</b> Download the debian package and install it with:</p>
        <pre>sudo apt install ./path/to/downloaded/package.deb</pre>
        <p>The PPA will also work on Debian, but see <a href="<?php echo $setupLinux; ?>">Linux Setup</a>
          for how to add the key.</p>
        <p><b>Minimal:</b> Download the Minimal Package file and extract it to a suitable location.
          Make sure dependencies are installed. On Ubuntu and Debian run:</p>
        <pre>sudo apt install python3-pyqt5 python3-lxml python3-enchant</pre>
        <p>You can install a launcher and icons by running:</p>
        <pre>python3 setup.py xdg-install</pre>
        <p><b>Further Details:</b> <a href="<?php echo $setupLinux; ?>">Linux Setup</a></p>
      </div>
      <div class="flex-child-right">
        <div class="flex-sub">
          <img src="images/download-outline.svg" alt="A decorative download icon.">
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
              <td><b>Ubuntu:</b></td>
              <td>
                <a href="<?php echo $ppaFull; ?>">Launcpad PPA</a>
              </td>
            </tr>
            <tr>
              <td><b>Minimal:</b></td>
              <td>
                <a href="<?php echo $nwStableMinLnx; ?>">Minimal Package</a>
                |
                <a href="<?php echo $nwStableMinLnx.".sha256"; ?>">SHA256</a>
              </td>
            </tr>
            <tr>
              <td><b>Other:</b></td>
              <td>
                <a href="<?php echo $nwStablePWheel; ?>">Python Wheel</a>
                |
                <a href="<?php echo $nwStableSrcTar; ?>">Full Source</a>
              </td>
            </tr>
          </table>
          <h3>Testing Version</h3>
          <?php if($hasTestingvers) { ?>
            <table>
              <tr>
                <td><b>Version:</b></td>
                <td>
                  <?php echo $nwTestingVers; ?> from <?php echo date($fmtDateS, strtotime($nwTestingDate)); ?>
                  |
                  <a href="<?php echo $nwTestingNotes; ?>">Release Notes</a>
                </td>
              </tr>
              <tr>
                <td><b>Ubuntu:</b></td>
                <td>
                  <a href="<?php echo $ppaPre; ?>">Launcpad PPA (Pre-Release)</a>
                </td>
              </tr>
              <tr>
                <td><b>Debian:</b></td>
                <td>
                  <a href="<?php echo $nwTestingDebian; ?>">Debian Package</a>
                  |
                  <a href="<?php echo $nwTestingDebian.".sha256"; ?>">SHA256</a>
                </td>
              </tr>
              <tr>
                <td><b>Minimal:</b></td>
                <td>
                  <a href="<?php echo $nwTestingMinLnx; ?>">Minimal Package</a>
                  |
                  <a href="<?php echo $nwTestingMinLnx.".sha256"; ?>">SHA256</a>
                </td>
              </tr>
              <tr>
                <td><b>Other:</b></td>
                <td>
                  <a href="<?php echo $nwTestingPWheel; ?>">Python Wheel</a>
                  |
                  <a href="<?php echo $nwTestingSrcTar; ?>">Full Source</a>
                </td>
              </tr>
            </table>
          <?php } else { ?>
            <p>There is currently no testing release.</p>
          <?php } ?>
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
        <p><b>Installation:</b> Download the Minimal Package, extract it to where you want to
          keep the novelWriter program files, and run the <code>setup_windows.bat</code>
          file inside the extracted folder. This will install the Qt libraries and a couple
          of other needed packages from PyPi, and set up desktop and start menu icons.</p>
        <p><b>Further Details:</b> <a href="<?php echo $setupWindows; ?>">Windows Setup</a></p>
      </div>
      <div class="flex-child-right">
        <div class="flex-sub">
          <img src="images/download-outline.svg" alt="A decorative download icon.">
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
              <td><b>Minimal:</b></td>
              <td>
                <a href="<?php echo $nwStableMinWin; ?>">Minimal Package</a>
                |
                <a href="<?php echo $nwStableMinWin.".sha256"; ?>">SHA256</a>
              </td>
            </tr>
            <tr>
              <td><b>Other:</b></td>
              <td>
                <a href="<?php echo $nwStablePWheel; ?>">Python Wheel</a>
                |
                <a href="<?php echo $nwStableSrcZip; ?>">Full Source</a>
              </td>
            </tr>
          </table>
          <h3>Testing Version</h3>
          <?php if($hasTestingvers) { ?>
            <table>
              <tr>
                <td><b>Version:</b></td>
                <td>
                  <?php echo $nwTestingVers; ?> from <?php echo date($fmtDateS, strtotime($nwTestingDate)); ?>
                  |
                  <a href="<?php echo $nwTestingNotes; ?>">Release Notes</a>
                </td>
              </tr>
              <tr>
                <td><b>Minimal:</b></td>
                <td>
                  <a href="<?php echo $nwTestingMinWin; ?>">Minimal Package</a>
                  |
                  <a href="<?php echo $nwTestingMinWin.".sha256"; ?>">SHA256</a>
                </td>
              </tr>
              <tr>
                <td><b>Other:</b></td>
                <td>
                  <a href="<?php echo $nwTestingPWheel; ?>">Python Wheel</a>
                  |
                  <a href="<?php echo $nwTestingSrcZip; ?>">Full Source</a>
                </td>
              </tr>
            </table>
          <?php } else { ?>
            <p>There is currently no testing release.</p>
          <?php } ?>
        </div>
      </div>
    </div>

    <h2>macOS</h2>
    <div class="flex-outer">
      <div class="flex-child-left">
        <p><b>Pre-Requisites:</b> Make sure you have Python installed. Version 3.6 or above is
          required. These instructions assume you're using the Homebrew version of Python. For
          further instructions, check the <a href="https://docs.brew.sh/Homebrew-and-Python">Python
          brew docs</a>.</p>
        <p>Install dependencies from PyPi with the following from command line:</p>
        <pre>pip3 install --user pyobjc -r requirements.txt</pre>
        <p>You should also install the enchant library for spell check support:</p>
        <pre>brew install enchant</pre>
        <p><b>Installation:</b> There are no dedicated install scripts for macOS yet. It will be
          added at some point. Contributins from Mac users would be appreciated. You can run
          novelWriter by executing the <code>novelWriter.py</code> script.</p>
        <p><b>Further Details:</b> <a href="<?php echo $setupMacOS; ?>">macOS Setup</a></p>
      </div>
      <div class="flex-child-right">
        <div class="flex-sub">
          <img src="images/download-outline.svg" alt="A decorative download icon.">
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
              <td><b>Minimal:</b></td>
              <td>
                <a href="<?php echo $nwStableMinMac; ?>">Minimal Package</a>
                |
                <a href="<?php echo $nwStableMinMac.".sha256"; ?>">SHA256</a>
              </td>
            </tr>
            <tr>
              <td><b>Other:</b></td>
              <td>
                <a href="<?php echo $nwStablePWheel; ?>">Python Wheel</a>
                |
                <a href="<?php echo $nwStableSrcTar; ?>">Full Source</a>
              </td>
            </tr>
          </table>
          <h3>Testing Version</h3>
          <?php if($hasTestingvers) { ?>
            <table>
              <tr>
                <td><b>Version:</b></td>
                <td>
                  <?php echo $nwTestingVers; ?> from <?php echo date($fmtDateS, strtotime($nwTestingDate)); ?>
                  |
                  <a href="<?php echo $nwTestingNotes; ?>">Release Notes</a>
                </td>
              </tr>
              <tr>
                <td><b>Minimal:</b></td>
                <td>
                  <a href="<?php echo $nwTestingMinMac; ?>">Minimal Package</a>
                  |
                  <a href="<?php echo $nwTestingMinMac.".sha256"; ?>">SHA256</a>
                </td>
              </tr>
              <tr>
                <td><b>Other:</b></td>
                <td>
                  <a href="<?php echo $nwTestingPWheel; ?>">Python Wheel</a>
                  |
                  <a href="<?php echo $nwTestingSrcTar; ?>">Full Source</a>
                </td>
              </tr>
            </table>
          <?php } else { ?>
            <p>There is currently no testing release.</p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div id="download-sub">
    <p>For older versions, please check the <a href="https://github.com/vkbo/novelWriter/releases">Releases</a> page.</p>
  </div>
</section>

</main>
<footer>
  <div class="text-box">
    <p><b>Copyright &copy; 2016&ndash;<?php echo date("Y"); ?> Veronica Berglyd Olsen</b></p>
    <p>novelWriter is licensed under <a href="https://www.gnu.org/licenses/gpl-3.0.en.html">GPLv3</a></p>
    <p>Typicons, used in the app and on this site, are licensed under <a href="http://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a></p>
  </div>
</footer>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".feature-carousel").slick({
      "slidesToShow": 1,
      "slidesToScroll": 1,
      "dots": true,
      "autoplay": true,
      "autoplaySpeed": 5000,
    });
  });
</script>

</body>
</html>
