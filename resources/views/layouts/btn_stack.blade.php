<a href="{{ route($route.'.show',$id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="@lang('View')"><i class="fa fa-eye ambitious-padding-btn"></i></a>&nbsp;&nbsp;
<a href="{{ route($route.'.edit', $id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="@lang('Edit')"><i class="fa fa-edit ambitious-padding-btn"></i></a>&nbsp;&nbsp;
<a href="#" data-href="{{ route($route.'.destroy', $id) }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal" title="@lang('Delete')"><i class="fa fa-trash ambitious-padding-btn"></i></a>
