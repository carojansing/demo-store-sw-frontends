<script setup lang="ts">
const { count } = useCart();
const { count: wishlistCount } = useWishlist();

const sidebarController = useModal();
</script>

<template>
  <div class="notice-banner flex justify-center items-cet text-center bg-[#EBFEE2] py-2">
    <div
      class="sw-search-input i-carbon-tag flex-none h-5 w-5 text-black group-hover:text-brand-primary cursor-pointer mr-1" />
    <p class="text-xs">
      10% für Neukunden!
      <a class="underline" href="/"> Jetzt Sichern</a>
    </p>
  </div>
  <div class="relative bg-white shadow-sm">
    <div class="mx-auto sm:px-32">
      <div class="pt-4 pb-2 grid grid-cols-3 space-x-3">
        <div class="hidden md:flex md:max-w-72">
          <LayoutStoreSearch />
        </div>
        <div class="flex justify-center items-center">
          <NuxtLink to="/">
            <span class="sr-only">Shopware</span>
            <img class="" src="/full logo.png" alt="Logo" />
          </NuxtLink>
        </div>
        <div class="flex items-center justify-end">
          <AccountMenu />
          <div class="flex ml-4 flow-root lg:ml-6">
            <NuxtLink class="group -m-2 p-2 flex items-center relative text-center" aria-label="wishlist"
              data-testid="wishlist-button" to="/wishlist">
              <div class="w-5 h-5 i-carbon-favorite text-black hover:text-brand-primary" />
              <span v-if="wishlistCount > 0"
                class="text-3 font-sm text-white absolute bg-red-500 rounded-full min-w-5 min-h-5 top-0 right-0 leading-5">
                {{ wishlistCount }}
              </span>
            </NuxtLink>
          </div>
          <!-- Cart -->
          <div class="flex ml-4 flow-root lg:ml-6">
            <button class="group -m-2 p-2 flex items-center relative" aria-label="cart" data-testid="cart-button"
              @click="sidebarController.open">
              <!-- Heroicon name: outline/shopping-bag -->
              <div class="w-5 h-5 i-carbon-shopping-bag text-black hover:text-brand-primary" />
              <span v-if="count > 0"
                class="text-3 font-sm text-white absolute bg-blue rounded-full min-w-5 min-h-5 top-0 right-0 leading-5">
                {{ count || "" }}
              </span>
              <span class="sr-only">items in cart, view bag</span>
            </button>
          </div>
          <CheckoutSideCart :controller="sidebarController" />
        </div>
      </div>
      <div class="flex items-center py-6">
        <div class="flex justify-start items-center min-w-10 lg:min-w-12 lg:hidden">
          <div class="order-1 lg:order-2 flex justify-start items-center">
            <LayoutSideMenu />
          </div>
        </div>
        <LayoutTopNavigation />
        <div class="flex flex-1"></div>
      </div>
    </div>
  </div>
</template>
