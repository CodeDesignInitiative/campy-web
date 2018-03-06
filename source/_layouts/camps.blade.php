@extends('_layouts.master')

@section('body')



<div class="p-8 bg-{{ $page->color }} @if ($page->active === 'no') border-t-4 border-pink @endif">
  @if ($page->active === 'no')
<div class="text-pink-lighter">
    Dieses Camp ist leider schon vorbei…
</div>
@endif
   <h1 class="text-white">Komm' zum Camp in {{ $page->city }} ({{ date('d.m.', $page->date_start) }} bis {{ date('d.m.y', $page->date_end) }})</h1>


<div class="md:flex mt-4">
  <div class="md:w-1/2 bg-white p-4">

    <header>
      @if ($page->youtube)
          <div id='plyr-youtube' data-type="youtube" data-video-id="{{ $page->youtube }}"></div>
        @else
          <div><img src="/img/{{ $page->headerimage }}" alt=""></div>
        @endif
    </header>

    @component('_components.camps.facts')
        @slot('location')
        {{ $page->location }}
        @endslot

        @slot('timestart')
        {{ $page->time_start }}
        @endslot

        @slot('timeend')
        {{ $page->time_end }}
        @endslot

        @slot('from')
        {{ date('d.m.', $page->date_start) }}
        @endslot

        @slot('to')
        {{ date('d.m.y', $page->date_end) }}
        @endslot

        @slot('days')
        {{ $page->days }}
        @endslot

        @slot('meals')
        {{ $page->meals }}
        @endslot

        @slot('cost')
        {{ $page->cost }}
        @endslot

        @slot('costlaptop')
        {{ $page->costlaptop }}
        @endslot

        @slot('locationlink')
        {{ $page->locationlink }}
        @endslot

    @endcomponent


    @component('_components.camps.teaser')
        @slot('location')
        {{ $page->location }}
        @endslot

        @slot('from')
        {{ date('d.m.y', $page->date_start) }}
        @endslot

        @slot('to')
        {{ date('d.m.y', $page->date_end) }}
        @endslot

        @slot('city')
        {{ $page->city }}
        @endslot

        @slot('holidays')
        {{ $page->holidays }}
        @endslot

        @slot('days')
        {{ $page->days }}
        @endslot


    @endcomponent

    @include('_partials.faq')

    @include('_partials.update')

    @if ($page->timetable === 'yes')
    @include('_partials.timetable', ['width' => 'w-1/2'])
    @endif

    @yield('content')   
  </div>
  <div class="md:w-1/2 bg-white p-4 md:ml-4 mt-4 md:mt-0">
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
    portalId: '2730872',
    formId: '{{  $page->form }}'
  });
</script>

  </div>

</div>

<div class="text-5xl mt-8 text-white font-bold uppercase font-mono tracking-wide">Förderer</div>

<div class="bg-white p-8 mt-8">

  <div class="flex flex-wrap ">
            @foreach ($partners->filter->hasCamp($page->id) as $partner)

            @if($partner->tier == 'silver' or $partner->tier == 'gold' or $partner->tier == 'bronze')
                   <div class="p-4"><div class="flex flex-col items-center">
                   
                                   <div class="h-64 flex flex-col justify-center">
                                   <a href="{{ $partner->website}}">
                                    @component('_components.img')
                                                                                                  
                                      @slot('src')
                                      /img/partner/{{ $partner->logo }}
                                      @endslot
                                  
                                      @slot('alt')
                                      {{ $partner->name }}
                                      @endslot
      
                                      @slot('width')
                                      w-64
                                      @endslot
                                                                      
                                   @endcomponent
                                  </a>
                                   </div>

                                   @if($page->long)
                                   {{ $partner->long }}
                                   @endif
                                                                         
                    </div>
                </div>
            @endif
            @endforeach
</div></div>

<div class="text-5xl mt-8 text-white font-bold uppercase font-mono tracking-wide">Partner</div>

<div class="bg-white p-8 mt-8">

  <div class="flex flex-wrap ">
            @foreach ($partners->filter->hasCamp($page->id) as $partner)
                   @if ($partner->tier == 'patron' or $partner->tier == 'partner' )
                   <div class="p-4"><div class="flex flex-col items-center">
                   
                                   <div class="h-32 flex flex-col justify-center">
                                   <a href="{{ $partner->website}}">
                                    @component('_components.img')
                                                                                                  
                                      @slot('src')
                                      /img/partner/{{ $partner->logo }}
                                      @endslot
                                  
                                      @slot('alt')
                                      {{ $partner->name }}
                                      @endslot
      
                                      @slot('width')
                                      w-32
                                      @endslot
                                                                      
                                   @endcomponent
                                  </a>
                                   </div>

                                   @if($page->long)
                                   {{ $partner->long }}
                                   @endif
                                                                         
                    </div>
                </div>
                @endif
            @endforeach
</div></div>

@endsection





@section('styles')

@if ($page->youtube)
<link rel="stylesheet" href="/css/plyr.css">
@endif

@if ($page->form)
<style>
  [id^='hs'] * {
    font-family: "Hans Grotesque";
    font-size: 16px;
  }

  [class^='hs'] * {
    font-family: "Hans Grotesque";
    font-size: 16px;
  }

  .hs-button {
    background-color: {{ $page->color }} !important;
    border: 0 !important;
  }

  #hsForm_5133d262-3f8c-4bc7-8323-3c7f52507dc8 > div > div.actions > input {
    font-size: 16px !important;
    background-image: none !important;
    text-shadow: none;
    padding: 12px !important;
  }

</style>
@endif

@endsection


@section('scripts')

@if ($page->youtube)
<script src="https://cdn.plyr.io/2.0.18/plyr.js"></script>
    <script>
        plyr.setup("#plyr-youtube");

    </script>
@endif

@if ($page->form)
<script src="//js.hsforms.net/forms/v2.js"></script>
@endif

@endsection


@section('title')
Camp | {{ $page->city }} ({{ date('d.m.', $page->date_start) }} - {{ date('d.m.y', $page->date_end) }})
@endsection