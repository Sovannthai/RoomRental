<div class="container">
    <div class="modal fade" id="approveModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">@lang('Approve')</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <p class="my-0 font-weight-bold">{{ __('Are You Sure You Want To Approve This Data') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Cancel')</button>
                    <form class="btn-ok" action="" method="post">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-primary">@lang('Confirmed')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
