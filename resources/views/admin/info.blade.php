@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 系统基本信息
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>快捷操作</h3>
    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="#"><i class="fa fa-plus"></i>新增文章</a>
            <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
            <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
        </div>
    </div>
</div>
<!--结果集标题与导航组件 结束-->


<div class="result_wrap">
    <div class="result_title">
        <h3>系统基本信息</h3>
    </div>
    <div class="result_content">
        <ul>
            <li>
                <label>操作系统</label><span>{{PHP_OS}}</span>
            </li>
            <li>
                <label>运行环境</label><span>{{$_SERVER['SERVER_SOFTWARE'].' php/'.PHP_VERSION}} </span>
            </li>
            <li>
                <label>版本</label><span>-v 1.0</span>
            </li>
            <li>
                <label>上传附件限制</label><span><?php echo get_cfg_var('upload_max_filesize')?get_cfg_var('upload_max_filesize'):'不允许航船附件'?></span>
            </li>
            <li>
                <label>北京时间</label><span><?php echo date('Y年m月d日 H时i分s秒') ?></span>
            </li>
            <li>
                <label>服务器域名/IP</label><span>{{$_SERVER['SERVER_NAME'].'['.$_SERVER['SERVER_ADDR'].']'}}</span>
            </li>
        </ul>
    </div>
</div>


<div class="result_wrap">
    <div class="result_title">
        <h3>说明</h3>
    </div>
    <div class="result_content">
        <ul>
            <li>
                <label>个人博客：</label><span><a href="http://ljwit.com.com">http://ljwit.com.com</a></span>
            </li>
        </ul>
    </div>
</div>
<!--结果集列表组件 结束-->
@endsection
