<template>
    <header>
        <title>{{ props.title }}</title>
        <nav class="w-full bg-green-400 py-4">
            <div class="container mx-auto px-10">
                <div class="flex justify-between items-center text-slate-200">
                    <div>
                        <Link href="/" class="hoevr:text-slate-50 font-bold text-2xl">Home</Link>
                    </div>
                    <ul class="flex items-center gap-x-5">
                        <li><Link href="/students" class="hover:text-slate-50">Students</Link></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>

<script setup>

import { Link } from '@inertiajs/inertia-vue3'

const props = defineProps(['title'])

</script>
