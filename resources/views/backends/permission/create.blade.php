@extends('backends.master')

@push('css')
    <style>
        .show-item {
            padding: 10px;
        }
    </style>
@endpush
@section('contents')
    <div class="show-item">
        <div class="row">
            <div class="col-12">
                <div class="back-btn">
                    <a href="{{ route('permission.index') }}" class="float-left" data-value="veiw">
                        <i class="fa-solid fa-angles-left"></i>&nbsp;&nbsp;
                        Back to all Permissions
                    </a><br>
                </div><br>
                <div class="card">
                    <form class="form-material form-horizontal" action="{{ route('permission.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">@lang('Permission')</label>
                                        <div class="input-group mb-3">
                                            <input type="text" id="name" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="@lang('Type name permission')">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-outline btn-primary btn-sm text-uppercase float-right"> <i
                                    class="fas fa-save"></i> {{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
