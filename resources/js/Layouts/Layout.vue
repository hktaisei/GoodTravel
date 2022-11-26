<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import NavBar from "../Components/NavBar.vue";

</script>
<template>
    <Head> <title>My App</title></Head>
    <header>
        <h1 style="text-align:center">Logo</h1>
        <NavBar/>
    </header>
    <main>
        <slot />
    </main>
</template>