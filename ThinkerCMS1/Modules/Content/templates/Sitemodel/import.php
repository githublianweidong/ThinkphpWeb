<?php if (!defined('THINK_PATH')) exit; include ($this->admin_tpl('/Admin/head'));echo $this->creatSubmenu();load_formvalidator();?>
<script type="text/javascript">
<!--
	$(function(){
		$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:200,height:50}, function(){this.close();$(obj).focus();})}});
		$("#name").formValidator({onshow:"请输入模型名称",onfocus:"请输入模型名称",oncorrect:"输入正确"}).inputValidator({min:1,onerror:"请输入模型名称"});
		$("#tablename").formValidator({onshow:"请输入模型表键名",onfocus:"请输入模型表键名"}).regexValidator({regexp:"^([a-zA-Z0-9]|[_]){0,20}$",onerror:"表名必须为字母、数字、下划线"}).inputValidator({min:1,onerror:"请输入模型表键名"}).ajaxValidator({type : "get",url : "<?php echo U('public_check_tablename');?>",data :"",datatype : "html",async:'false',success : function(data){if( data == "1" ){return true;}else{return false;}},buttons: $("#dosubmit"),onerror : "模型表键名已存在。",onwait : "正在连接，请稍候。"});		
	})
//-->
</script>
<div class="pad-lr-10">
<form action="" method="post" id="myform" enctype="multipart/form-data">
<fieldset>
	<legend>基本信息</legend>
	<table width="100%"  class="table_form">
  <tr>
    <th width="120">模型名称：</th>
    <td class="y-bg"><input type="text" class="input-text" name="info[modelname]" id="name" size="30" /></td>
  </tr>
  <tr>
    <th>模型表键名：</th>
    <td class="y-bg"><input type="text" class="input-text" name="info[tablename]" id="tablename" size="30" /></td>
  </tr>
    <tr>
    <th>描述：</th>
    <td class="y-bg"><input type="text" class="input-text" name="info[description]" id="description"  size="30"/></td>
  </tr>
  <tr>
		<th>导入模型:</th>
		<td>
		<input type="file" name="model_import" value="" class="input-text" id="model_import"></input>
		</td>
	</tr>
</table>
</fieldset>
<div class="bk15"></div>
<div class="btn"><input type="submit" id="dosubmit" name="dosubmit" value="提交" class="button button-tkp button-tiny"/></div> 
</form>
</div>
<script language="JavaScript">
<!--
	function load_file_list(id) {
		$.getJSON('?m=admin&c=category&a=public_tpl_file_list&style='+id+'&catid=', function(data){$('#category_template').html(data.category_template);$('#list_template').html(data.list_template);$('#show_template').html(data.show_template);});
	}
	//-->
</script>
</body>
</html>