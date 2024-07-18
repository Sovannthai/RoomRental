<!DOCTYPE html>
<html lang="en">
@include('backends.layouts.head')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>
    <div class="wrapper">
        <!--
   Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
  -->
        @include('backends.layouts.header')

        <!-- Sidebar -->
        @include('backends.layouts.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">@yield('page-title')</h4>
                    </div>
                    @yield('contents')
                </div>
            </div>
        </div>

        <!-- Custom template | don't include it in your project! -->
        @include('backends.layouts.custom')
        <!-- End Custom template -->
    </div>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete-btn', function(e) {
                e.preventDefault();
                var form = $(this).closest('form');
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @include('backends.layouts.script')
    <script>
        $('#myModal').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('action', $(e.relatedTarget).data('href'));
        });
        $('#rejectModal').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('action', $(e.relatedTarget).data('href'));
        });
        $('#approveModal').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('action', $(e.relatedTarget).data('href'));
        });
    </script>
    <script>
        $(document).ready(function() {
            @if (Session::has('success'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "timeOut": "3000",
                    "extendedTimeOut": "1000",
                    "positionClass": "toast-top-right"
                };
                toastr.success("{{ Session::get('success') }}");
            @endif
            @if (Session::has('error'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "timeOut": "3000",
                    "extendedTimeOut": "1000",
                    "positionClass": "toast-top-right"
                };
                toastr.error("{{ Session::get('error') }}");
            @endif
        });
    </script>
</body>

</html>
