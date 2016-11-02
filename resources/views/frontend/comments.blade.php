<div class="row">
    <div class="col-sm-12">
        <h4>Comments</h4>
    </div>
</div>
<hr class="margin-bottom-15">
@forelse($comments as $comment)
    <div class="row margin-bottom-5">
        <div class="col-sm-12">
            <b>{{is_null($comment->reader) ? 'Someone' : $comment->reader->name }}</b>&nbsp;said:
        </div>
        <div class="col-sm-12 text-justify">{{$comment->content}}
            <span class="text-grey">&nbsp;{{$comment->created_at}}</span>
        </div>
    </div>
@empty
    <div class="row">
        <div class="col-sm-12">
            <span class="text-grey">No comment yet</span>
        </div>
    </div>
@endforelse