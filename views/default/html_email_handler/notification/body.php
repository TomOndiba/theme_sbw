<?php
$subject = elgg_extract("subject", $vars);
$message = elgg_autop(elgg_extract("body", $vars));
$recipient = elgg_extract("recipient", $vars);

$site = elgg_get_site_entity();
$site_url = elgg_get_site_url();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset=UTF-8" />
		<title><?php echo ($subject) ? $subject : $site->name ?></title>
		<style type="text/css">
			#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
			.ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
			.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
			body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
			table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
			img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

			body{margin:0; padding:0;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table{border-collapse:collapse !important;}
			body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}

			#bodyCell{padding:20px 0;}

			body, #bodyTable{
				background-color:#f2f2f2;
			}

			#templateContainer{
				width: 80%;
				max-width: 800px;
				background: #fafafa;
				border: 1px solid #dcdcdc;
				box-shadow: 0 2px 4px 0 rgba(0,0,0,.05);
			}

			h1{
				color:#33b1d9 !important;
				display:block;
				font-family:Helvetica;
				font-size:26px;
				font-style:normal;
				font-weight:bold;
				line-height:100%;
				letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}

			h2{
				color:#33b1d9 !important;
				display:block;
				font-family:Helvetica;
				font-size:20px;
				font-style:normal;
				font-weight:bold;
				line-height:100%;
				letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}

			h3{
				color:#33b1d9 !important;
				display:block;
				font-family:Helvetica;
				font-size:16px;
				font-style:italic;
				font-weight:normal;
				line-height:100%;
				letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}

			h4{
				color:#33b1d9 !important;
				display:block;
				font-family:Helvetica;
				font-size:14px;
				font-style:italic;
				font-weight:normal;
				line-height:100%;
				letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}

			#templatePreheader{
				display: none;
			}

			.preheaderContent{
				color:#808080;
				font-family:Helvetica;
				font-size:10px;
				line-height:125%;
				text-align:left;
			}

			.preheaderContent a:link, .preheaderContent a:visited, /* Yahoo! Mail Override */ .preheaderContent a .yshortcuts /* Yahoo! Mail Override */{
				color:#33b1d9;
				font-weight:normal;
				text-decoration:underline;
			}

			.headerContent{
				color:#505050;
				font-family:Helvetica;
				font-size:20px;
				font-weight:bold;
				line-height:100%;
				padding-top:0;
				padding-right:0;
				padding-bottom:0;
				padding-left:0;
				text-align: left;
				vertical-align:middle;
			}

			.headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
				color:#33b1d9;
				font-weight:normal;
				text-decoration:underline;
			}

			#headerImage{
				height:auto;
				max-width:200px;
				margin: 20px;
			}

			#templateHeader {
				background: #33b1d9;
			}

			#templateBody{
				background-color: #FFF;
				border-bottom:1px solid #FFFFFF;
			}

			#templateTitle{
				border-bottom: 1px solid #dcdcdc;
				color: #222;
				text-align: left;
			}

			.bodyContent{
				color:#222;
				font-family:Helvetica;
				font-size:14px;
				line-height:150%;
				padding-top:20px;
				padding-right:40px;
				padding-bottom:20px;
				padding-left:40px;
				text-align:left;
			}
			.bodyContent blockquote, .bodyContent p, .bodyContent div, .bodyContent * {
				color: #222;
			}

			.titleContent{
				color:#222;
				font-family:Helvetica;
				font-size:20px;
				line-height:150%;
				padding-top:20px;
				padding-right:20px;
				padding-bottom:20px;
				padding-left:20px;
				text-align:left;
			}
			.bodyContent a[href], .bodyContent a:link, .bodyContent a:visited, /* Yahoo! Mail Override */ .bodyContent a .yshortcuts /* Yahoo! Mail Override */{
				color: #33b1d9;
				font-weight:normal;
				text-decoration:underline;
			}

			.bodyContent img{
				display:inline;
				height:auto;
				max-width:560px;
			}

			#templateFooter{
				border-top: 1px solid #dcdcdc;
			}

			.footerContent{
				color:#666;
				font-family:Helvetica;
				font-size:10px;
				line-height:150%;
				padding: 5px;
				text-align:center;
			}

			.footerContent a[href], .footerContent a:link, .footerContent a:visited, /* Yahoo! Mail Override */ .footerContent a .yshortcuts, .footerContent a span /* Yahoo! Mail Override */{
				color: #33b1d9;
				font-weight:normal;
				text-decoration:underline;
			}
		</style>
	</head>
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
		<center>
			<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
				<tr>
					<td align="center" valign="top" id="bodyCell">
						<table border="0" cellpadding="0" cellspacing="0" id="templateContainer">
							<tr>
								<td align="center" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templatePreheader">
										<tr>
											<td valign="top" class="preheaderContent" style="padding-top:10px; padding-right:20px; padding-bottom:10px; padding-left:20px;" mc:edit="preheader_content00">
												<?php echo elgg_get_excerpt(strip_tags($message), 100); ?>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td align="center" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader">
										<tr>
											<td valign="top" class="headerContent">
												<a href="<?php echo $site_url ?>">
													<img src="<?php echo elgg_get_simplecache_url('graphics/logo.png') ?>" style="max-width:200px;" id="headerImage" mc:label="header_image" mc:edit="header_image" mc:allowdesigner mc:allowtext />
												</a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td align="center" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateTitle">
										<tr>
											<td valign="top" class="titleContent" mc:edit="body_content_header">
												<?php echo $subject ?>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td align="center" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
										<tr>
											<td valign="top" class="bodyContent" mc:edit="body_content00">
												<?php echo $message ?>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td align="center" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter">
										<tr>
											<td valign="top" class="footerContent" style="padding-top:0;" mc:edit="footer_content01">
												<?php 
												$footer = elgg_get_plugin_setting('email_footer', 'html_email_handler');
												if ($footer) {
													echo elgg_format_element('p', [], $footer);
												}

												if (!empty($recipient) && ($recipient instanceof ElggUser)) {
													$settings_url = "{$site_url}settings/user/{$recipient->username}";
													if (elgg_is_active_plugin('notifications')) {
														$settings_url = "{$site_url}notifications/personal/{$recipient->username}";
													}
													$settings_text = elgg_echo('html_email_handler:notification:footer:settings', [
														"<a href='{$settings_url}'>",
														'</a>',
													]);
													echo elgg_format_element('p', [], $settings_text);
												}
												?>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>
