@extends('admins.layout.master-layout')
@section('title')
    Danh sách loại tin tức
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Danh sách loại tin tức
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Danh sách loại tin tức</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                <div class="box-header">
                    <a href="{{route('cate_new.add')}}" class="btn btn-primary">Thêm loại tin tức</a>
                </div>
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="col-md-2">Tên loại tin tức</th>
                                        <th class="col-md-2">Slug</th>
                                        <th class="col-md-3">Hành động</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cate_new as $value)
                                        <tr class="odd gradeX" >
                                            <td >{{$value->name}}</td>
                                            <td >{{$value->slug}}</td>
                                            <td>
                                                <a href="{{Route('cate_new.edit',['id'=> $value->id]) }}" class="btn btn-primary">Sửa</a>
                                                <a href="{{Route('cate_new.delete',['id'=> $value->id]) }}" class="btn btn-danger" onclick="return confirmAction()">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <b></b>
    </div>
</div>

<script language="JavaScript">
        function confirmAction() {
            return confirm("Bạn có chắc chắn không ?")
        }
        
    
    </script>

{{-- modal --}}
<div class="container container-fluid">
        <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                    
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h2 class="modal-title">Thông tin người dùng tin tức</h2>
                        {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button> --}}
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body" id="cont">
                        
                    </div>
                    
                        
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                    </div>
                </div>
                </div>
                
            </div>
    </div>
@stop