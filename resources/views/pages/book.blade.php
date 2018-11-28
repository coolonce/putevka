@extends('index')
@section('content')



    <h1 class="text-center">HomeBook for PUTevka</h1>
    <hr/>
<form method="POST" id="id-form_messages">

    @include('common.form')
    <br/>

    <div class="messages">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">
                    <span>Карлсон</span>
                    <span class="pull-right label label-info">17:15:00 / 03.07.20016</span>
                </h3>
            </div>
            <div class="panel-body">
                Hello
                <hr/>
                <div class="pull-right">
                    <a href="#" class="btn btn-info">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                    <button class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@stop