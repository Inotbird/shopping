<!DOCTYPE html>
<html class="x-admin-sm">

<head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.2</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/xadmin.css">
    <script src="../lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="../js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
          <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
          <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <form class="layui-form">
        <div class="layui-fluid">
            <div class="layui-col-md12">
                <!-- 查询条件开始 -->
                <div class="layui-card">
                    <div class="layui-card-body ">
                        <blockquote class="layui-elem-quote">
                            <div class="layui-form-item">
                                <div class="layui-row">
                                    <div class="layui-col-md6">
                                        商品名
                                    </div>
                                    <div class="layui-col-md6">
                                        商品分类
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-row">
                                    <div class="layui-col-md4">
                                        <input type="text" name="title" placeholder="商品名称" autocomplete="off" class="layui-input">
                                    </div>
                                    <div class="layui-col-md4 layui-col-md-offset2">
                                        <select name="solt" lay-verify="">
                                            <option value="">全部</option>
                                            <option value="0">待确认</option>
                                            <option value="1">已确认</option>
                                            <option value="2">已收货</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-row">
                                    <div class="layui-col-md6">
                                        热门商品
                                    </div>
                                    <div class="layui-col-md6">
                                        商品分类
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-row">
                                    <div class="layui-col-md4">
                                        <input type="radio" name="isHot" value="非热门商品" title="非热门商品">
                                        <input type="radio" name="isHot" value="热门商品" title="热门商品">
                                        <input type="radio" name="isHot" value="全部" title="全部" checked>
                                    </div>
                                    <div class="layui-col-md4 layui-col-md-offset2">
                                        <select name="solt" lay-verify="">
                                            <option value="">全部</option>
                                            <option value="0">待确认</option>
                                            <option value="1">已确认</option>
                                            <option value="2">已收货</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-row">
                                    <div class="layui-col-md6">
                                        更新日期
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-row">
                                    <div class="layui-col-md4">
                                        <input class="layui-input" placeholder="开始日" name="start" id="start">
                                    </div>
                                    <div class="layui-col-md4 layui-col-md-offset2">
                                        <input class="layui-input" placeholder="结束日" name="end" id="end">
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-row">
                                    <div class="layui-col-md10" style="text-align: right;">
                                        <button class="layui-btn" onclick="xadmin.open('添加用户','./order-add.html',800,600)">
                                            添加
                                        </button>
                                        <button class="layui-btn" onclick="xadmin.open('添加用户','./order-add.html',800,600)">
                                            查询
                                        </button>
                                        <input type="reset" class="layui-btn" value="重置">
                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <!-- 查询条件结束 -->

                <!-- 商品列表开始 -->
                <div class="layui-card">
                    <div class="layui-card-body ">
                        <table class="layui-table layui-form">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" name="" lay-skin="primary">
                                    </th>
                                    <th>商品名称</th>
                                    <th>商品分类</th>
                                    <th>商品概要说明</th>
                                    <th>店内价格</th>
                                    <th>市场价格</th>
                                    <th>数量</th>
                                    <th>热门商品</th>
                                    <th>状态</th>
                                    <th>更新时间</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- 商品列表结束 -->

                <!-- 页码开始 -->
                <div class="layui-card-body ">
                    <div class="page">
                        <div>
                            <a class="prev" href="">&lt;&lt;</a>
                            <a class="num" href="">1</a>
                            <span class="current">2</span>
                            <a class="num" href="">3</a>
                            <a class="num" href="">489</a>
                            <a class="next" href="">&gt;&gt;</a>
                        </div>
                    </div>
                </div>
                <!-- 页码结束 -->
            </div>
        </div>
    </form>
    <script>
        layui.use(['laydate', 'form'],
            function() {
                var laydate = layui.laydate;

                //执行一个laydate实例
                laydate.render({
                    elem: '#start' //指定元素
                });

                //执行一个laydate实例
                laydate.render({
                    elem: '#end' //指定元素
                });
            });

        /*用户-停用*/
        function member_stop(obj, id) {
            layer.confirm('确认要停用吗？',
                function(index) {

                    if ($(obj).attr('title') == '启用') {

                        //发异步把用户状态进行更改
                        $(obj).attr('title', '停用');
                        $(obj).find('i').html('&#xe62f;');

                        $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                        layer.msg('已停用!', {
                            icon: 5,
                            time: 1000
                        });

                    } else {
                        $(obj).attr('title', '启用');
                        $(obj).find('i').html('&#xe601;');

                        $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                        layer.msg('已启用!', {
                            icon: 5,
                            time: 1000
                        });
                    }

                });
        }

        /*用户-删除*/
        function member_del(obj, id) {
            layer.confirm('确认要删除吗？',
                function(index) {
                    //发异步删除数据
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', {
                        icon: 1,
                        time: 1000
                    });
                });
        }

        function delAll(argument) {

            var data = tableCheck.getData();

            layer.confirm('确认要删除吗？' + data,
                function(index) {
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {
                        icon: 1
                    });
                    $(".layui-form-checked").not('.header').parents('tr').remove();
                });
        }
    </script>
</body>

</html>