<template>
    <main>
        <Header :title="props.title" />
        <div class="container mx-auto px-10 pt-10">
            <slot />
        </div>
    </main>
</template>

<script setup>

import Header from "./Header.vue"

const props = defineProps(['title'])

</script>
