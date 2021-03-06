@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    {{_('New Menu')}}
                    <a href="{{route('menu.index')}}" title="Back" class="panel-title-btn btn btn-icon waves-effect waves-light btn-warning m-b-5 pull-right"> <i class="ion-arrow-return-left"></i> </a>
                </h3>
            </div>
            <div class="panel-body row">
                {!! Form::open(['action' => 'Admin\Role\MenuController@store']) !!}
                @include('admin.role.menu.form',['submit'=>__('Save'),'all_routes'=>$all_routes])
                {{ Form::close() }}
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div>
@endsection
