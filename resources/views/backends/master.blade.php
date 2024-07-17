<!DOCTYPE html>
<html lang="en">
@include('backends.layouts.head')

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
    </div>
    @include('backends.layouts.script')
</body>

</html>
