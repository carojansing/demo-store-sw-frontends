<script lang="ts">
export default {
  name: "RecoverPassword",
};

useBreadcrumbs([
  {
    name: "Account Overview",
    path: "/account",
  },
  {
    name: "Recover password",
    path: "/account/recover",
  },
]);
</script>

<template>
  <div class="recover-wrapper">
    <AccountRecoverPassword>
      <template #action>
        <div class="text-center space-y-2">
          <p class="py-2 px-4 text-lg text-brand-primary">
            Don't have an account yet?
          </p>
          <NuxtLink
            to="/register"
            class="text-sm font-medium px-4 text-gray-600 focus:outline-none underline"
          >
            Register today!
          </NuxtLink>
          <NuxtLink
            to="/login"
            class="flex justify-center align-center text-sm font-medium text-gray-600 py-2 px-4 focus:outline-none underline"
          >
            or try to log in again.
          </NuxtLink>
        </div>
      </template>
    </AccountRecoverPassword>
  </div>
</template>
