@extends("admin.layout.main")
@section("content")
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-10 col-xs-6">
                    <div class="box">

                        <div class="box-header with-border">
                            <h3 class="box-title">权限列表</h3>
                        </div>
                        <a type="button" class="btn " href="/admin/permissions/create" >增加权限</a>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody><tr>
                                    <th style="width: 10px">#</th>
                                    <th>权限名称</th>
                                    <th>描述</th>
                                    <th>操作</th>
                                </tr>
                                @foreach($permissions as $permission)
                                <tr>
                                    <td>{{$permission->id}}.</td>
                                    <td>{{$permission->name}}</td>
                                    <td>{{$permission->description}}</td>
                                    <td>
                                        <a type="button"  class="btn btn-default"   href="/admin/permissions/{{$permission->id}}/update" >修改</a>
                                        <button type="button" delete-value="{{$permission->name}}" class="btn btn-default permission-delete" permission_id="{{$permission->id}}">删除</button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody></table>
                        </div>

                    </div>
                </div>
            </div>
        </section>
@endsection