@include('templates.head') {{-- HTML HEAD TAG --}}

@include('templates.header2') {{-- HTML HEADER INCLUDE NAVBAR --}}

@yield('content') {{-- DYNAMIC CONTENT HERE - HERE GOES DIV WITH ROLE AND CLASS MAIN --}}

@include('templates.footer') {{-- HTML FOOTER TAG --}}

@include('templates.foot') {{-- ENDS HTML DOC - HERE GOES JS HREFs --}}
