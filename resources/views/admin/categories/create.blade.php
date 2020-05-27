@extends('admin.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            الاصناف
            <small>اضافة صتف</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li><a href="#"> الاصناف</a></li>
            <li class="active">اضافة صنف جديد</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">اضافة صنف جديد</h3>
                        <a href="{{route('getAdminCategories')}}" class="btn btn-success">عرض الاصناف</a>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">اسم النوع</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">اسم الصنف</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="اسم الصنف ...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">الصورة</label>
                                <div class="col-sm-10">
                                    <input type="file" id="exampleInputFile">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">الوصف</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="الوصف  ...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">وحدة القياس</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">الكمية</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="الكمية ...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">سعر الشراء</label>
                                <div class="col-sm-10">
                                    <input type="number" name="name" class="form-control" placeholder="سعر الشراء ...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">سعر البيع</label>
                                <div class="col-sm-10">
                                    <input type="number" name="name" class="form-control" placeholder="سعر البيع ...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">اسم المورد</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>   <!-- /.row -->
    </section><!-- /.content -->
@endsection
