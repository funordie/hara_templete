<?php

/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/hara_templete_4/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/hara_templete_4/css/hara.css" type="text/css" />

<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
<![endif]-->
<?php if($this->direction == 'rtl') : ?>
	<link href="<?php echo $this->baseurl ?>/templates/hara_templete_4/css/template_rtl.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body background="/templates/hara_templete_4/images/1.gif">

<table cellSpacing=0 cellPadding=0 width="100%" border=0>
  <tbody>
  <tr>
    	<td rowspan="3" background="/templates/hara_templete_4/images/2.gif" >
    <img style="WIDTH: 94px; HEIGHT: 127px" height=92 alt="" src="/templates/hara_templete_4/images/06.gif" width=88 border=0></td>
        <td width=500 height=53 background="/templates/hara_templete_4/images/3.gif"></td>
        <td width="250" rowspan="3"  background="/templates/hara_templete_4/images/main_image.jpg"></td>
  <tr>
    	<td width=500 height=120 align="center" valign="middle" background="/templates/hara_templete_4/images/6.gif" class="main_Title" >
        4-ти клас</td>
  </tr>
    <tr>
    	<td width=500 height=77 background="/templates/hara_templete_4/images/7.gif"></td>
    </tr>
    <tr>
      <td height="35" colspan="2">
      <div id="pathway">
			<jdoc:include type="modules" name="breadcrumb" />
		</div>
      </td>
      <td height="35" align="right">
      	<jdoc:include type="modules" name="user4" />
      </td>
    </tr>
    <tr>
      <td height="77" colspan="3">
      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
  <tbody>
  <tr align="left" valign="top">
    <td width="200" align="left" valign="top"><p class="hara_menu_left">&nbsp;</p>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="menu_caption" height="31" background="/templates/hara_templete_4/images/13.gif">Меню на сайта</td>
        </tr>
      <tr>
        <td class="menu_left" background="/templates/hara_templete_4/images/14.gif">
            <jdoc:include type="modules" name="left" style="rounded" />
        </td>
      <tr>
        <td height="64" background="/templates/hara_templete_4/images/15.gif"></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="31" background="/templates/hara_templete_4/images/13.gif"></td>
      </tr>
      <tr>
        <td align="center" background="/templates/hara_templete_4/images/14.gif">
        <p><a href="mailto:burborani@gmail.com"><img src="/templates/hara_templete_4/images/mail.jpg" alt="mail" border="0" /></a></p>
          <p><a href="mailto:burborani@gmail.com">За контакти <br />
          e-mail: burborani@gmail.com</a></p>
          <p>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="152" height="152" id="FlashID" title="clock">
              <param name="movie" value="/templates/hara_templete_4/flash/analogclock.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="6.0.65.0" />
              <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
              <!--[if !IE]>-->
              <object data="/templates/hara_templete_4/flash/analogclock.swf" type="application/x-shockwave-flash" width="152" height="152"
               <!--<![endif]-->
                <param name="quality" value="high" />
                <param name="wmode" value="opaque" />
                <param name="swfversion" value="6.0.65.0" />
                <param name="expressinstall" value="../Scripts/expressInstall.swf" />
                <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                <div>
                  <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
                  </div>
                <!--[if !IE]>-->
                </object>
              <!--<![endif]-->
              </object>
          </p></td>
      </tr>
      <tr>
        <td height="64" background="/templates/hara_templete_4/images/15.gif"></td>
      </tr>
    </table>
      <p>&nbsp;</p>      </td>
    <td >
      <?php if($this->countModules('user1 or user2')) : ?>
      <table width="100%" border="0">
        <tr valign="top">
          <?php if($this->countModules('user1')) : ?>
          <td><jdoc:include type="modules" name="user1" style="xhtml" /></td>
          <?php endif; ?>
          <?php if($this->countModules('user1 and user2')) : ?>
          <td valign="top" class="greyline">&nbsp;</td>
          <?php endif; ?>
          <?php if($this->countModules('user2')) : ?>
          <td valign="top"><jdoc:include type="modules" name="user2" style="xhtml" /></td>
          <?php endif; ?>
          </tr>
        </table>
      <?php endif; ?>
      <table width="100%" border="0">
        <tr>
          <td class="type_component"><jdoc:include type="component" /></td>
          </tr>
      </table></td>
    </tr>
  </tbody>
  </table>
  </td>
    </tr>
    <tr>
      <td height="35" colspan="3">
        <jdoc:include type="modules" name="footer" style="xhtml"/>
      </td>
    </tr>
  </tbody>
</table>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://burborani.stanevkonserv.com/sitestat/" : "http://burborani.stanevkonserv.com/sitestat/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://burborani.stanevkonserv.com/sitestat/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

</body>

</html>