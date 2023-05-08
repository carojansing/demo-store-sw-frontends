<script setup lang="ts">
import { CmsBlockImageTextCover } from "@shopware-pwa/composables-next";

const props = defineProps<{
    content: CmsBlockImageTextCover;
}>();

const { getSlotContent } = useCmsBlock(props.content);

const leftContent = getSlotContent("left");
const rightContent = getSlotContent("right");
</script>
<template>
    <article class="!ml-0 md:grid md:grid-cols-2">
        <img class="w-full h-full" src="/image_hands.png" alt="">
        <div class="flex justify-center flex-col p-31 bg-[#EBFEE2]">
            <div class="text">
                <p class="text-2xl mb-1">Jetzt zum</p>
                <h1 class="text-5xl mb-3 leading-14 font-semibold">Newsletter</h1>
                <p class="text-2xl mb-6">anmelden</p>

                <p class="mb-5 font-light">Abonniere unseren Newsletter und sichere dir 10% Rabatt auf deine erste
                    Bestellung!</p>
            </div>
            <form class="w-96 flex flex-col gap-2" action="">
                <input class="outline-none font-light border-1 p-4 border-[#94999E]" type="email" name="email" id="email"
                    placeholder="E-Mail-Adresse">
                <button class="flex justify-center gap-4 font-light bg-[#052B1D] text-white p-4" type="submit">
                    <p>ANMELDEN</p>
                    <div class="w-5 h-5 i-carbon-checkmark hover:text-brand-primary" />
                </button>
            </form>
        </div>
    </article>
</template>

<style scoped></style>
