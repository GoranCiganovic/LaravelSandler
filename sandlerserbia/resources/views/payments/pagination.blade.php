<div class="text-center">  
{{ with(new App\Pagination\CustomPresenter($paginator->appends(['payments'=>$payments])))->render() }}
</div> 