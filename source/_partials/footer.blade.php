<div class="block bg-white p-8 mt-8 text-lg">
    <div class="md:flex mb-4">
  <div class="md:w-1/2 h-auto">
      <div class="mb-2 "><span class="border-b-2 border-green">Code+Design</span></div>
      <ul class="list-reset leading-normal">
          <li class="hover:text-green text-grey-darker"><a href="/initiative" class="no-underline hover:text-green text-grey-darker" class="no-underline hover:text-green text-grey-darker">Initiative</a></li>
{{--           <li class="hover:text-green text-grey-darker">Ansatz</li>
          <li class="hover:text-green text-grey-darker">Personen</li> --}}
          <li class="hover:text-green text-grey-darker"><a href="/initiative/partner" class="no-underline hover:text-green text-grey-darker" class="no-underline hover:text-green text-grey-darker">Partner</a></li>
          <li class="hover:text-green text-grey-darker"><a href="/initiative/spenden" class="no-underline hover:text-green text-grey-darker" class="no-underline hover:text-green text-grey-darker">Spenden</a></li>
		  <li class="hover:text-green text-grey-darker"><a href="/blog" class="no-underline hover:text-green text-grey-darker" class="no-underline hover:text-green text-grey-darker">Blog</a></li>
          <li class="hover:text-green text-grey-darker"><a href="/initiative/stimmen" class="no-underline hover:text-green text-grey-darker">Stimmen</a></li>
          <li class="hover:text-green text-grey-darker"><a href="/kontakt" class="no-underline hover:text-green text-grey-darker">Kontakt</a></li>
{{--           <li class="hover:text-green text-grey-darker">Videos</li>
 --}}          <li class="hover:text-green text-grey-darker"><a href="/impressum" class="no-underline hover:text-green text-grey-darker">Impressum</a></li>
          <li class="hover:text-green text-grey-darker"><a href="/datenschutz" class="no-underline hover:text-green text-grey-darker">Datenschutz</a></li>
      </ul>
  </div>
  <div class="md:w-1/2 h-auto md:mt-0 mt-8">
      <div class="mb-2 "><span class="border-b-2 border-purple text-grey-darkest">Aktuelle Camps</span></div>

      <ul class="list-reset leading-normal">
          @foreach ($camps as $camp)
             @if ($camp->active === 'yes')
                  <li class="hover:text-purple text-grey-darker"><a href="{{  $camp->getUrl() }}" class="no-underline hover:text-purple text-grey-darker">{{  $camp->city }}, {{ date('d.', $camp->date_start) }}-{{ date('d.m.y', $camp->date_end) }}</a></li>
            @endif
          @endforeach
      </ul>
      {{-- <ul class="list-reset leading-normal">
          <li class="hover:text-purple text-grey-darker"><a href="/camps/berlin/1802/" class="no-underline hover:text-purple text-grey-darker">Berlin, 08.-11.02.2018</a></li>
          <li class="hover:text-purple text-grey-darker"><a href="/camps/hamburg/1803/" class="no-underline hover:text-purple text-grey-darker">Hamburg, 08.-11.03.2018</a></li>
          <li class="hover:text-purple text-grey-darker"><a href="/camps/duesseldorf/1803/" class="no-underline hover:text-purple text-grey-darker">Düsseldorf, 16.-18.03.2018</a></li>
          <li class="hover:text-purple text-grey-darker"><a href="/teilnahmebedingungen" class="no-underline hover:text-purple text-grey-darker">Teilnahmebedingungen</a></li>

      </ul> --}}

    <div class="text-purple-light mb-2 mt-4">Vergangene Camps</div>
      <ul class="list-reset leading-normal">
          <li class="hover:text-purple-light text-grey-darker"><a href="/camps/berlin/1710" class="no-underline hover:text-purple text-grey-darker">Berlin Oktober 2017</a></li>
      </ul>

  </div>
  <div class="md:w-1/2 h-auto md:mt-0 mt-8">
            <div class="mb-2"><a href="/magazin" class="text-grey-darkest no-underline border-b-2 border-yellow">Magazin</a></div>
      <ul class="list-reset leading-normal">
          <li class="text-grey-darker"><a href="/files/code-design-magazine-001.pdf" target="_blank" class="text-grey-darker no-underline hover:text-yellow-dark"><svg xmlns="http://www.w3.org/2000/svg" class="stroke-current w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download</a></li>
          <li class="hover:text-yellow text-grey-darker"><a href="/magazin/bestellen" class="no-underline hover:text-yellow-dark text-grey-darker">Bestellen</a></li>
          {{-- <li class="hover:text-yellow text-grey-darker">Mediadaten</li> --}}
      </ul>


  </div>
    <div class="md:w-1/2 md:mt-0 mt-8 h-auto">
        <div>
            <div class="mb-2"><span class="border-b-2 border-red">Newsletter</span></div>
            <form name="best-newsletter" class="hidden">
              <input type="text" name="test" id="" class="hidden">
              <button style="hidden">Submit</button>
            </form>
            <form name="newsletter-double-opt-in" action="/newsletter/bestaetigen" netlify-honeypot="ene" netlify>
            <label class="text-grey-darker leading-normal">Abonniere unseren Newsletter und bekomme unsere Neuigkeiten ins Postfach.</label>
            <div class="mt-4 flex">
                <input name="email" type="email" class="p-2 border border-grey-light round text-grey-darkest h-auto" placeholder="Deine E-Mail-Adresse">
                <div data-netlify-recaptcha></div>
              </div>
              <div>
                <input type="text" name="ene" class="hidden">
                                <button type="submit" class="bg-red-light text-white rounded-sm h-auto p-3">Anmelden</button></form>
            </div>
        </div>
        <div class="mt-4 flex" id="social">
            <a href="https://instagram.com/codeunddesign/" target="_blank" class="mr-2"><svg class="stroke-current text-grey-light hover:text-red w-8 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line></svg></a>

            <a href="https://www.youtube.com/channel/UCuT3xJjPZFqQEEpleHBxVuA/videos" target="_blank"><svg class="stroke-current text-grey-light hover:text-red w-8 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play-circle"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg></a>

            <a href="https://www.facebook.com/codeunddesign/" target="_blank"><svg class="stroke-current text-grey-light hover:text-red w-8 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
        </div>
    </div>

</div>
</div>
<div class="bg-grey-lightest text-grey-dark p-8 leading-normal text-center">
  <p>Die Code+Design Initiative e.V. ist ein gemeinnütziger Verein zur Berufs- und Studienorientierung im Bereich Informatik und Design.</p>
Vereinsregister VR 35667 B | Code+Design Initiative e.V. c/o CODE Education GmbH – Rheinsberger Straße 76/77, Berlin
</div>