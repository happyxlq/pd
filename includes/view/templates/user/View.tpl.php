<div class="bodywrap"> <div id="listbox" style="width: 99%;">
<tbody>
		<tr>
			<td>
<!-- Form block start -->
<?php
$outUserViewValue = $inData["UserViewValue"];
$outAreaList=$inData["AreaList"];
?>

<table class="menutab" cellspacing="0" cellpadding="0" width="100%" border="0">
	<tbody>
		<tr>
			<td class="menumaintopon"><?php Language::show("USER.VIEW.LABEL")?></td>
		</tr>
		<tr>
			<td>
				<table cellspacing="0" cellpadding="0" width="100%" border="0">
<!-- fields start -->
					<tr>
						<td width="194" align="left" valign="top" class="smalltdrow1"><?php Language::show("USER.USER_ID.LABEL")?></td>
						<td align="left" class="smalltdrow2"><?php echo $outUserViewValue->user_id?>
						</td>
					</tr>
					<!-- Field end -->
					<tr>
						<td width="194" align="left" valign="top" class="smalltdrow1"><?php Language::show("USER.ROLE.LABEL")?></td>
						<td align="left" class="smalltdrow2">
					<?php 
if($outUserViewValue->role==Value::USER_ROLE_ADMIN ){
	echo '管理员';
}elseif($outUserViewValue->role==Value::USER_ROLE_ASSIGN){
	echo '派单员';
}else{
	foreach ($outAreaList as $v){
		if($v->area_id==$outUserViewValue->role){
			echo $v->area_name.'跟单员';
		}
	}
}
?>
						</td>
					</tr>
					<!-- Field end -->
					<tr>
						<td width="194" align="left" valign="top" class="smalltdrow1"><?php Language::show("USER.USERNAME.LABEL")?></td>
						<td align="left" class="smalltdrow2"><?php echo $outUserViewValue->username?>
						</td>
					</tr>
					<!-- Field end -->
					<tr>
						<td width="194" align="left" valign="top" class="smalltdrow1"><?php Language::show("USER.PASSWORD.LABEL")?></td>
						<td align="left" class="smalltdrow2"><?php echo $outUserViewValue->password?>
						</td>
					</tr>
					<!-- Field end -->
					<tr>
						<td width="194" align="left" valign="top" class="smalltdrow1"><?php Language::show("USER.REALNAME.LABEL")?></td>
						<td align="left" class="smalltdrow2"><?php echo $outUserViewValue->realname?>
						</td>
					</tr>
					<!-- Field end -->
<!-- fields end -->
				</table>
			</td>
		</tr>
		<tr>
			<td height="25" align="center" valign="center" class="tdblue">
			<!-- action blocks start -->
				<input type="button" onclick="history.back();" value="<?php Language::show("COMMON.BACK.LABEL")?>" class="submit" />
			<!-- action blocks end -->
			</td>
		</tr>
	</tbody>
</table>
<!-- Form block end -->
			</td>
		</tr>
	</tbody>
</table>
</div></div>