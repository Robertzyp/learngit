@extends('layouts.app')


{{--左一半--}}
@section('sidebar')
    @parent
@endsection
{{--又一半--}}
@section('content')
    <h2 align="center" style="color: blue;">管理员列表</h2>
    <div align="center">{!! $res->links() !!}</div>
    <table class="layui-table" lay-skin="line"  lay-even>
        <tr>
            <td>编号</td>
            <td>工号</td>
            <td>名称</td>
            <td>注册时间</td>
            <td></td>
        </tr>
        @foreach($res as $k => $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->num}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->register_time}}</td>
                <td>
                    <a href="{{url('del_user?id=' . $value->id)}}" onclick="confirm('确定删除吗?')" >
                        删除
                    </a>
                </td>

            </tr>
        @endforeach
    </table>

@endsection
