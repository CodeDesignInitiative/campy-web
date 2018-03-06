<div class="bg-grey-light p-4 rounded">
    <h3 class="mb-4">Interesse dabeizusein?</h3>
<form class="w-full" name="interest" method="POST" netlify-honeypot="cookie" netlify>
  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="flex-1 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
        Vorname
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="firstname" type="text" placeholder="Simone" required>
      <input type="text" name="cookie" hidden>
    </div>
    <div class="flex-1 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
        Email
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" name="email" type="email" placeholder="robot@simonegiertz.com" required>
    </div>
    <div class="flex-1 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="city">
        Stadt
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" name="city" required>
          <option value="">Bitte auswählen…</option>
          <option value="ber">Berlin</option>
          <option value="due">Düsseldorf</option>
          <option value="koe">Köln</option>
          <option value="hh">Hamburg</option>
          <option value="lei">Leipzig</option>
          <option value="mue">München</option>
          <option value="stu">Stuttgart</option>
          <option value="fra">Frankfurt</option>
          <option value="all">Alle</option>
          <option value="other">Andere</option>
        </select>
        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    <div class="self-end">
       <button class="px-3 mb-6 md:mb-0  py-3 text-grey-darkest mr-4 rounded bg-grey  hover:bg-grey-dark">Senden</button> 
    </div>
  </div>
</form></div>