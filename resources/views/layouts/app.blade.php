<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content w-full md:flex px-4">
        <main class="main  w-full px-2 md:w-2/3 mx-auto">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar md:w-1/3">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
