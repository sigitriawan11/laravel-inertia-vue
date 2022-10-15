<template>
    <div>
        <Main title="Student Create">
            <form @submit.prevent="submit">
                <div class="mb-3">
                    <input type="text" v-model="form.name" class="px-5 py-1.5 rounded focus:outline-green-300 bg-slate-100 shadow block" placeholder="Name">
                    <small class="text-red-400" v-if="props.errors.name">{{ props.errors.name }}</small>
                </div>
               <div class="mb-3">
                    <input type="number" v-model="form.age" class="px-5 py-1.5 rounded focus:outline-green-300 bg-slate-100 shadow block" placeholder="Age">
                    <small class="text-red-400" v-if="props.errors.age">{{ props.errors.age }}</small>
               </div>
               <div class="mb-3">
                   <input type="text" v-model="form.email" class="px-5 py-1.5 rounded focus:outline-green-300 bg-slate-100 shadow block" placeholder="Email">
                   <small class="text-red-400" v-if="props.errors.email">{{ props.errors.email }}</small>
               </div>
                <button class="bg-blue-500 rounded text-white px-4 py-1.5" type="submit">Submit</button>
            </form>
        </Main>
    </div>
</template>

<script setup>

import { reactive } from "@vue/reactivity";
import Main from "./../Layouts/Main.vue"
import { Inertia } from "@inertiajs/inertia"

const props = defineProps(['errors'])

const form = reactive({
    name: "",
    age: "",
    email: ""
})

const submit = (e) => {
    e.preventDefault();

    Inertia.post('/students', form)
}

</script>
