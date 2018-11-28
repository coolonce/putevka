@extends('index')
@section('content')



    <h1 class="text-center">HomeBook for PUTevka</h1>
    <hr/>
    <form method="POST" id="id-form_messages" action="create">

        @include('common.form')
    </form>
    <br/>
    <div class="text-right">
        <b>
            all message <i  class="badge">{{$count}}</i>
        </b>
    </div>
    <div class="messages">
        @if(!empty($messages))
            @foreach($messages as $message)
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span>#{{$message->id}} | {{$message->name}}</span>
                            <span class="pull-right label label-info">{{$message->created_at}}</span>
                        </h3>
                    </div>
                    <div class="panel-body">
                       {{$message->message}}
                        <hr/>
                        <div class="pull-right">
                            <a href="delete/{{$message->id}}" class="btn btn-danger">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center">
                {!! $messages->render() !!}
            </div>
        @endif
    </div>

@stop