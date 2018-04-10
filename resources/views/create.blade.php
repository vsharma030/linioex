@include('main')
<div class="container-fluid">
    <div class="header" style="color: red;">
        <h1>Create Issue</h1>
    </div>
</div>


<div class="col-xs-6 col-xs-push-3"
     style="height: 450px;width: 650px;border: groove;padding: 20px;border-radius: 10px;background-color:seashell;box-shadow: 20px 10px 5px grey;
">
    <div class="row">
        <form action="{{action('Controller@create')}}" method="POST">
            {{csrf_field()}}

            <div class="form-group" style="background-color: lightgrey;">
                <input type="text" class="form-control" name= "title" id="title" placeholder="Issue Title" required>
            </div>

            <div class="form-group">
                <textarea class="form-control" name="body" id="body" rows="8"
                          placeholder="Leave a Comment"></textarea>
            </div>


            <div class="form-group" style="background-color: lightgrey;">
                <input type="text" name="assignees[]" class="form-control" id="assignee" placeholder="Assigned To">
            </div>
            <br>

                <input type="hidden" name="labels[]" value="bug"/>
            <button type="submit" class="btn btn-primary">Submit new Issue</button>
        </form>
    </div>

</div>

