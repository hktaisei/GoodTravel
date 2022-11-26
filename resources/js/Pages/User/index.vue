<script setup>
defineProps({
    users: Array,
});
</script>
<script>
import UserLayout from "../../Layouts/UserLayout.vue";
import { Link } from "@inertiajs/inertia-vue3"

export default {
    layout: UserLayout,
}
</script>

<template>
    <Head>
        <title>Userページ</title>
    </Head>
    <h1>ユーザ一覧</h1>
    <div>
        <Link :href="route('user.create')" as="button" type="button">ユーザ登録</Link>
    </div>
    <ul>
    <li
        v-for="user in users"
        :key="user.id"
        style="display: flex; align-items: center"
    >
        <span v-if="user.avatar_file_path"
            ><img :src="user.avatar_file_path" style="width: 30px"
        /></span>
        <span>{{ user.name }}</span>
    </li>
</ul>
</template>    