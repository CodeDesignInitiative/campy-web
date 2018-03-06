<div class="mt-4">
    <div class="text-2xl font-bold">FAQ</div>

    <dl class="mt-4 text-lg">
        <dt class="font-bold">Datum</dt>
        <dd class="mb-4">{{ $from }} bis {{ $to }}</dd>
        <dt class="font-bold">Uhrzeit</dt>
        <dd class="mb-4">Jeweils {{ $timestart }} bis {{ $timeend }} Uhr</dd>
        <dt class="font-bold">Inhalt</dt>
        <dd class="mb-4">{{ $days }}-Tage-Programmier-Camp für Anfänger und Fortgeschrittene + Berufsorientierung</dd>
        <dt class="font-bold">Betreuung</dt>
        <dd class="mb-4">Erfahrene Coaches im Bereich Web, App, Games</dd>
        <dt class="font-bold">Location</dt>
        @if ($locationlink != '')
        <dd class="mb-4"><a href="{{ $locationlink }}" target="_blank">{{ $location }}</a></dd>
        @else
        <dd class="mb-4">{{ $location }}</dd>
        @endif
        <dt class="font-bold">Unkostenbeitrag</dt>
        <dd class="mb-4">
            {{ $cost }}
        </dd>
        <dt class="font-bold">Inklusive Versorgung</dt>
        <dd class="mb-4">Jeden Tag {{ $meals }}</dd>
        <dt class="font-bold">Laptopausleihe</dt>
        <dd class="mb-4">Bei Bedarf: {{ $costlaptop }} € Unkostenbeitrag (Windows-Laptop)</dd>
    </dl>

</div>