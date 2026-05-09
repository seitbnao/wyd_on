
<html>
<head>
<title>WYD</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
<link rel="stylesheet" href="images/wydstyle.css" type="text/css">
<script language="JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<!--------------------   Scripts   -------------------->
<SCRIPT LANGUAGE="JavaScript">
<!--
function f_login()
{
	if(	frmLogin.pwd.value == "" )
	{
		frmLogin.err_msg.value = " Senha não pode ser em branco! Digite sua senha! ";
		frmLogin.pwd.focus();
		return;
	}
	frmLogin.submit();
}

function f_enterCheck()	{
	if(	event.keyCode == 13	) {
		f_login();
	}
}
//-->
</SCRIPT>
<!-------------------- End of Scripts -------------------->

</head>
<body text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" scroll="no" onLoad="frmLogin.pwd.focus(); MM_preloadImages('images/botton-03a.gif')" bgcolor="#000000"  oncontextmenu='return false' ondragstart='return false' onselectstart='return false'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
  <tr>
    <td align="left" valign="top"> 
      <form name="frmLogin" method="post" action="./login_process_mod.php">
      <input type="hidden" name="app_server" value="serv0">
      <input type="hidden" name="id" value="">
      <input type="hidden" name="i_empty" value="10">
      <table width="800" border="0" cellspacing="0" cellpadding="0" height="560">
        <tr> 
          <td width="800" height="25" background="images/main_01.gif"></td>
        </tr>
        <tr> 
          <td width="800" height="41" background="images/main_02.gif" align="right">&nbsp; 
          </td>
        </tr>
        <tr> 
          <td background="images/back2_06.gif" height="494" align="center" valign="top"> 
            <br>
            <table width="92%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="bottom" height="36"><img src="images/title2.gif" width="387" height="30"></td>
              </tr>
            </table>
            <br>
            <table width="100" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td colspan="3"><img src="images/back2_01.gif" width="729" height="5"></td>
              </tr>
              <tr height="324"> 
                <td width="5" background="images/back2_02.gif" height="157"><img src="images/back2_02.gif" width="5" height="62"></td>
                <td width="719" background="images/back2_05.gif" align="center"> 
                  <br>
                  <br>
                  <input type="text" name="err_msg" class="fieldmain5" size="26" value="" readonly>
                  <br><br>
                  <table width="227" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td class="tarea2" width="39" height="36" bgcolor="#515151" align="right"><img src="images/icon_02.gif" width="14" height="14"></td>
                      <td class="tarea2" width="58" height="36" bgcolor="#515151"><b class="tarea2">GUILD BOARD</b></td>
                      <td width="21" height="36" bgcolor="#696969">&nbsp; </td>
                      <td height="36" bgcolor="#696969" colspan="2" class="tarea" width="114"> 
                        <input type="password" name="pwd" size="13" class="tarea4" style="FONT-FAMILY:Arial" onKeyPress="f_enterCheck();">
                      </td>
                    </tr>
                  </table>
                  <br>
                  <a href="javascript:f_login();"onFocus='this.blur()'><br>
                  <img src="images/botton-03.gif" width="70" height="21" name="Image1" onMouseOut="MM_swapImgRestore()" border="0" onMouseOver="MM_swapImage('Image1','','images/botton-03a.gif',1)"></a><br>
                  </form>
                  <br>
                  <br>
                </td>
                <td width="5" background="images/back2_03.gif" height="157"><img src="images/back2_03.gif" width="5" height="63"></td>
              </tr>
              <tr> 
                <td colspan="3" height="5"><img src="images/back2_04.gif" width="729" height="5"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
