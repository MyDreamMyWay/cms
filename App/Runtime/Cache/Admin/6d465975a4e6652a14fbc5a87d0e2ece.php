<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/CMS2.0/Public/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="/CMS2.0/Public/Admin/css/nav.css">

    <title>Document</title>
</head>
<body>
    
    <ol class="breadcrumb">
      <li><a href="<?php echo U('Vote/index');?>">投票管理</a></li>
      <li class="active">修改投票</li>
    </ol>
    <form method="post" action="<?php echo U('Vote/updateAfter');?>">
        <input type="hidden" name="id" value="<?php echo ($oneVote["id"]); ?>">
      <div class="form-group">
        <label for="exampleInputEmail1">投票名称</label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="请输入名称" value="<?php echo ($oneVote["title"]); ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">投票简介</label>
        <textarea name="info" class="form-control" rows="3" placeholder="请输入简介"><?php echo ($oneVote["info"]); ?></textarea>
      </div>
      <button type="submit" class="btn btn-default">修改投票</button>
    </form>

        
<script type="text/javascript" src="/CMS2.0/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/CMS2.0/Public/bootstrap/js/bootstrap.js"></script>

    

</body>
</html>