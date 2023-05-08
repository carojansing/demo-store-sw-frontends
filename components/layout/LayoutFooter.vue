<script setup lang="ts">
import {
  getTranslatedProperty,
  getCategoryUrl,
} from "@shopware-pwa/helpers-next";

const { navigationElements } = useNavigation({ type: "footer-navigation" });
const gridColumns = computed<number>(() =>
  navigationElements.value
    ? Object.keys(navigationElements.value).length + 2
    : 2
);

const { data } = await useFetch('https://countriesnow.space/api/v0.1/countries/flag/unicode');
const countries = data.value.data;

// Shuffle array
const shuffled = countries.sort(() => 0.5 - Math.random());

// Get sub-array of first n elements after shuffled
let randomCountries = shuffled.slice(0, 10);

console.log(countries);
</script>

<template>
  <footer class="px-4 sm:px-30 mt-2 lg:mt-8 bg-[#052B1D] text-white">
    <menu class="">
      <div class="py-12 w-full gap-6" :class="`grid md:grid-cols-[max-content_max-content_max-content]`">
        <div class="hidden md:block">
          <NuxtLink to="/">
            <span class="sr-only">Asam</span>
            <img class="h-15 w-45 sm:h-8" src="/full_logo_inverted.svg" alt="Logo" />
          </NuxtLink>
        </div>
        <div v-for="navigationElement in navigationElements" :key="navigationElement.id">
          <h4 class="mb-4">
            {{ getTranslatedProperty(navigationElement, "name") }}
          </h4>
          <template v-if="navigationElement.childCount > 0">
            <ul class="list-none p-0 mb-5">
              <li v-for="navigationChild in navigationElement.children" :key="navigationChild.id"
                class="pb-3 md:pb-2 font-light">
                <NuxtLink :target="navigationChild.externalLink || navigationChild.linkNewTab
                    ? '_blank'
                    : ''
                  " :to="getCategoryUrl(navigationChild)" class="text-base hover:text-gray-900 font-light">
                  {{ getTranslatedProperty(navigationChild, "name") }}
                </NuxtLink>
              </li>
            </ul>
          </template>
        </div>
      </div>
    </menu>
    <div class="footer-bottom font-light pb-11">
      <div class="first-layer py-6 border-t-1 border-b-1 flex gap-44">
        <div class="flex gap-7 ml-50">
          <div class="socials">
            <p class="mb-3">Unsere App herunterladen</p>
            <p class="font-semibold mb-5">App iOS & Android</p>
            <div class="socials_logos flex gap-6">
              <div class="w-7 h-7 i-carbon-logo-instagram hover:text-brand-primary" />
              <div class="w-7 h-7 i-carbon-logo-youtube hover:text-brand-primary" />
              <div class="w-7 h-7 i-carbon-logo-facebook hover:text-brand-primary" />
            </div>
          </div>
          <div class="payment">
            <p class="">Alle gängigen Zahlungsarten</p>
            <img src="/payment_options.png" alt="">
          </div>
        </div>
        <div class="flex gap-38">
          <div class="delivery">
            <p>Versand</p>
            <img src="/payment_options.png" alt="">
          </div>
          <div class="partners">
            <p>Unsere Partner</p>
            <img src="/payment_options.png" alt="">
          </div>
        </div>
      </div>
      <div class="second-layer ml-50 pt-11 flex justify-between items-start">
        <div class="select-wrap border-solid border-1 p-3 w-96 bg-[#052B1D] rounded-md">
          <label class="text-xs" for="countries">Shop wählen</label>
          <select class="bg-[#052B1D] outline-none w-full" name="countries" id="countries">
            <option v-for="country in randomCountries" value="{{ country.name }}">
              {{ country.unicodeFlag }} {{ country.name }}
            </option>
          </select>
        </div>
        <div>
          <ul>
            <li>Impressum</li>
            <li>AGB</li>
            <li>Datenschutz</li>
            <li>Cookie Einstellungen</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</template>
