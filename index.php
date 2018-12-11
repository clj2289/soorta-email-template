<?
$json_file = file_get_contents('./events.json');
$evt = json_decode($json_file);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title><?=$evt->title; ?></title>

    <style type="text/css">

    body, .bgBody {background: #F4F1DF; font-family:"Georgia", "Times New Roman", Times, sans-serif; font-size:12px; line-height:18px; color:#000;margin:0;}
    p {margin-bottom:10px; margin-top:0;font-family:"Georgia", "Times New Roman", Times, sans-serif; font-size:15px;line-height:150%;}
    a.link1 {
        text-decoration:none;
        color:#ffffff;
        font-size: 13px;
        border-radius: 3px;
         -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-top:10px solid #cc000A;
        border-left: 20px solid #cc000A;
        border-right: 20px solid #cc000A;
        border-bottom: 10px solid #cc000A;
        background-color: #cc000A;
    }
    a{
        text-decoration: none;
    }
    h1 {margin-top:0; margin-bottom:2px;padding:0; color:#797671; font-size:22px; line-height:24px;  font-weight:normal;font-family:"Georgia", "Times New Roman", Times, sans-serif;}
    h2 {margin-top:0; color:#797671; font-size:20px;  font-weight:normal;font-family:"Georgia", "Times New Roman", Times, sans-serif;}
    h3 {margin:0 0 2px 0; color:#797671; font-size:18px; font-family:"Georgia", "Times New Roman", Times, sans-serif;font-weight: normal;}
    .bgItem {background:#fff;}
    .bgBody {background:#f4f1df;}
    ul li{
        font-size: 14px;
    }
    </style>

    <script type="colorScheme" class="swatch active">
    {
        "name":"Default",
        "bgBody":"f4f1df",
        "link":"ffffff",
        "color":"000000",
        "bgItem":"ffffff",
        "title":"797671"
    }
    </script>

</head>

<body style="margin:0;">
<table cellpadding="0" cellspacing="0" border="0" width="100%"  class="bgBody" align='center'>
<tr>
   <td align='center'>
      <table cellpadding="0" cellspacing="0" border="0" width="600"  class="bgBody">
         

         <tr>
            <td class='movableContentContainer'>
                
                <div class="movableContent">
                    <table cellpadding="0" cellspacing="0" border="0" width="600">
                        <tr>
                             <td>
                                 <table cellpadding="0" cellspacing="0" border="0" width="600" >
                                     <tr><td height='20'></td></tr>
                                     <tr>
                                      <td align="center">
                                         <div class="contentEditableContainer contentTextEditable">
                                             <div class="contentEditable">
                                                 <!--<p style='margin:0;font-size: 14px;'>Having trouble viewing this message, <a target='_blank' href="[SHOWEMAIL]" style='color:#000000;text-decoration: underline;'>open it in a browser window</a></p>-->
                                             </div>
                                         </div>
                                      </td>
                                   </tr>
                                 </table>
                             </td>
                         </tr>
                    </table>
                </div>

                <!-- Image -->
               <div class="movableContent">
                    <table cellpadding="0" cellspacing="0" border="0" width="600">
                        <tr><td height='20'></td></tr>
                        <tr>
                            <td>
                                <table cellpadding="0" cellspacing="0" border="0" width="600" >
                                 <tr>
                                    <td align="center">
                                       <div class="contentEditableContainer contentImageEditable">
                                          <div class="contentEditable" style="text-align:center;">
                                             <img data-default="placeholder" src=<?=$evt->bannerImage; ?> data-max-width="600" width='600' style='background:#fc0d1b;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;'>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                              </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- .Image -->

				<?
				foreach ($evt->events as &$event) {
					echo '<!-- Image + text -->';
					echo '<div class="movableContent">';
						echo '<table width="600" cellpadding="0" cellspacing="0" align="center"  >';
							echo '<tr><td height="20"></td></tr>';
							echo '<tr>';
								echo '<td >';
									echo '<table cellpadding="0" cellspacing="0" border="0" width="600" class="bgItem" style="border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;">';
										echo '<tr><td colspan="5" height="20"></td></tr>';
										echo '<tr>';
										   echo '<td width="20"></td>';
											echo '<td valign="top">';
												echo '<div class="contentEditableContainer contentImageEditable">';
													echo '<div class="contentEditable">';
														echo '<img data-default="placeholder" src="'. $event->photo .'" width="300" data-max-width="300">';
													echo '</div>';
												echo '</div>';
											echo '</td>';
											echo '<td width="20"></td>';
											echo '<td valign="top" >';
												echo '<div class="contentEditableContainer contentTextEditable">';
													echo '<div class="contentEditable">';
														echo '<h2 style="text-align:left;">'. $event->name .'</h2>';
														echo '<p style="text-align:left;">'. $event->dates .'</p>';
														echo '<p style="text-align:left;">'. $event->location .'</p>';
														if(!empty($event->host->email)){
															echo '<p style="text-align:left;">Hosted by: <a href="mailto:'. $event->host->email .'">'. $event->host->name .'</a></p>';
														} else {
															echo '<p style="text-align:left;">Hosted by: '. $event->host->name .'</p>';
														}	
														echo '<p style="text-align:left;">'. $event->description .'</p>';
														echo '<br>';
														echo '<p style="text-align:right;"><a target="_blank" class="link1" href="'. $event->link .'">Learn more</a></p>';
													echo '</div>';
												echo '</div>';
											echo '</td>';
											echo '<td width=20></td>';
										echo '</tr>';
										echo '<tr><td colspan="5" height=20></td></tr>';
									echo '</table>';
								echo '</td>';
							echo '</tr>';
						echo '</table>';
					echo '</div>';
					echo '<!-- .Image + text -->';
				}
				?>

                <!-- Image + Image -->
                <div class="movableContent">
                    <table width="600" cellpadding="0" cellspacing="0" align="center"  >
                        <tr><td height='20'></td></tr>
                        <tr>
                            <td >
                                <table cellpadding="0" cellspacing="0" border="0" width='600' class="bgItem" style='border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;'>
                                    <tr>
                                        <td colspan="5" height='20'>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td width='20'>
                                       </td>
                                        <td valign="top">
                                            <div class="contentEditableContainer contentImageEditable">
                                                <div class="contentEditable">
                                                    <img data-default="placeholder" src="<?=$evt->picture1 ?>" width='268' data-max-width="268">
                                                </div>
                                            </div>
                                        </td>
                                        <td width='20'></td>
                                        <td valign="top" >
                                            <div class="contentEditableContainer contentImageEditable">
                                                <div class="contentEditable">
                                                    <img data-default="placeholder" src="<?=$evt->picture2 ?>" width='268' data-max-width="268">
                                                </div>
                                            </div>
                                        </td>
                                        <td width='20'></td>
                                    </tr>
                                    <tr><td colspan="5" height='20'></td></tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- .Image + Image -->

                <div class='movableContent'>
                  <table cellspacing="0" cellpadding="0" border="0" width='600'>
                    <tr><td height="20"></td></tr>
                    <tr><td height="20"><td></tr>
                  </table>
                </div>
            </td>
        </tr>
        
      </table>
   </td>
</tr>
</table>

</body>

</html>
