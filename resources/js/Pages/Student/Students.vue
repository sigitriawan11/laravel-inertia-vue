<template>
    <div>
        <Main title="Students">
            <Link href="/students/create" class="mb-3 block w-fit bg-green-600 text-white px-4 py-1.5 text-sm rounded">Tambah Data</Link>
            <p class="text-green-400" v-if="props.flash">{{ props.flash.message }}</p>
            <table class="w-full overflow-x-auto">
                <tr class="bg-green-300 text-left">
                    <th class="px-5 py-2">#</th>
                    <th class="px-5 py-2">Name</th>
                    <th class="px-5 py-2">Age</th>
                    <th class="px-5 py-2">Email</th>
                    <th class="px-5 py-2">Action</th>
                </tr>
                <tr class="bg-slate-100 border-b-2" v-for="(student, index) in props.students" :key="index">
                    <td class="px-5 py-2">{{ index + 1 }}</td>
                    <td class="px-5 py-2">{{ student.name }}</td>
                    <td class="px-5 py-2">{{ student.age }}</td>
                    <td class="px-5 py-2">{{ student.email }}</td>
                    <td class="px-5 py-2 space-x-2">
                        <Link :href='`/students/${student.id}/edit`' class="bg-yellow-500 px-3 py-1.5 text-sm text-white rounded">Edit</Link>
                        <button @click="deleteStudent(student.id)" class="bg-red-500 px-3 py-1.5 text-sm text-white rounded">Delete</button>
                    </td>
                </tr>
            </table>
        </Main>
    </div>
</template>

<script setup>

import Main from "./../Layouts/Main.vue"
import { Inertia } from "@inertiajs/inertia"
import { Link } from "@inertiajs/inertia-vue3"

const props = defineProps(['students', 'flash'])

const deleteStudent = (e) => {
    Inertia.delete(`/students/${e}`)
}

</script>
