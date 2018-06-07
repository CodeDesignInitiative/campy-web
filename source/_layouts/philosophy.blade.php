@extends('_layouts.master')

@section('styles')
    .philosophy-page {
      padding-bottom: 1rem;
    }
    .philosophy-page h2 {
      margin-bottom: 1rem;
      font-size: 2.25rem;
      font-weight: 500;
    }
    .philosophy-page h2 + p {
      margin-top: 2rem;
    }
    .philosophy-page h3 {
      margin-top: 3rem;
      margin-bottom: 1rem;
      font-size: 1.5rem;
      font-weight: 500;
    }
    .philosophy-page h4 {
      font-size: 1.5rem;
      font-weight: 300;
      margin-bottom: -0.2em;
      color: #8f4dbf;
    }
    .philosophy-page h4 a {
      font-weight: 300;
    }
    .philosophy-page h4 a:hover {
      text-decoration: none;
    }
    .philosophy-page p {
      margin-top: 0.5rem;
      margin-bottom: 1rem;
    }
    .philosophy-page a {
      color: #8f4dbf;
    }
    .philosophy-page a:hover,
    .philosophy-page a:focus {
      color: #67328d;
    }
    .philosophy-page blockquote {
      margin-top: 1rem;
      margin-bottom: 1rem;
      padding: 0.25rem 1rem;
      color: rgba(72, 71, 72, 0.6);
      border-left: 0.25rem solid #d4d0d6;
    }
    .philosophy-page blockquote > p {
      margin: 0;
    }
    .philosophy-page pre + blockquote {
      margin-top: 2rem;
    }
    .philosophy-page code {
      display: inline-block;
      padding-left: 0.25rem;
      padding-right: 0.25rem;
      font-size: 0.875rem;
      background-color: #efedf0;
    }
    .philosophy-page pre {
      margin-bottom: 1rem;
      padding: 0.5rem 1rem;
      line-height: 1.75;
      background-color: #f7f4ee;
    }
    .philosophy-page pre > code {
      display: inline;
      padding: 0;
      background: none;
    }
    .philosophy-page ol,
    .philosophy-page ul {
      margin-bottom: 1rem;
      padding-left: 2rem;
    }
    .philosophy-page ol {
      list-style-type: decimal;
    }
    .philosophy-page ul {
      list-style-type: disc;
    }
    .philosophy-page li {
      margin-bottom: 0.5rem;
    }
    .philosophy-page img {
      max-width: 100%;
    }
    .philosophy-page hr {
      border: none;
      border-bottom: 1px solid #ddd;
      margin: 2rem 0;
    }
@endsection

@section('body')
    <main class="p-8 bg-blue">
        <div class="text-3xl mb-4 text-white">Philosophie der Camps</div>
            <div class="p-8 rounded bg-white philosophy-page"> 
                @yield('philosophy_content')
            </div>
        </div>
    </main>
@endsection

@section('title')
Philosophy
@endsection
