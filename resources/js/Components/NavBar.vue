<script setup>
import { Link } from "@inertiajs/inertia-vue3"
</script>
<template>
    <div>URL: {{ $page.url }}</div>
    <div>Component: {{ $page.component }}</div>
    <nav>
        <ul
            style="
                display: flex;
                justify-content: space-around;
                list-style-type: none; "
        >
            <li><Link
                 :href="route('welcome')"
                 :class="{ active: $page.component === '/' }"
                 >Welcome</Link></li>
            <li><Link 
                :href="route('about')"
                :class="{ active: $page.url.startsWith('/about') }"
                >About</Link></li>
            <li><Link 
                :href="route('user.index')"
                :class="{ active: $page.component === 'User/Index' }"
                >User</Link></li>
        </ul>
    </nav>
</template>
<style scoped>
.active {
    font-weight: bold;
    color: navy;
    text-decoration: none;
}
</style>