@include('main')
<div class="container-fluid">
    <div class="header">
        <h1>List Issue</h1>
    </div>
</div>
<hr>


<div class="col-xs-8 col-xs-push-2" style="background-color: gainsboro;font-size: 15px;padding: 5px;">
    <div class="col-xs-7">

            <a href="https://github.com/vsharma030/hello-world/compare?expand=1"><button type="button" class="btn btn-default">New Pull Requests</button></a>


    </div>

    <div class="col-xs-1">
        <a href="https://github.com/vsharma030/hello-world/labels"> <button type="button" class="btn btn-default">Labels</button></a>

    </div>
    <div class="col-xs-1">
        <a href="https://github.com/vsharma030/hello-world/milestones"> <button type="button" class="btn btn-default">MileStones</button></a>

    </div>


</div>


@foreach($y as $x)

        {

    <div class="col-xs-8 col-xs-push-2" style="font-size: 15px;padding-top: 10px;">
        Status : {{$x->state}}
    </div>
    <div class="container col-xs-8 col-xs-push-2" style="background-color: whitesmoke;border: solid;padding:2px;border-radius: 10px;">
        <div class="col-xs-12" style="background-color: lightblue;border-radius: 5px;">
            <h3>{{$x->title}}</h3>
        </div>
        <p ><u>Description: </u>{{$x->body}}</p>
        Created by {{$x->user->login}} on {{$x->created_at}} & assignee is {{$x->assignee->login}}

    </div>
        }

@endforeach
