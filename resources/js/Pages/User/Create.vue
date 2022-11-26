<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    name: null,
    email: null,
    password: null,
    avatar: null,
    remeber: false,
});

function submit() {
    form.post("/user");
}
</script>
<template>

    <Head title="ユーザの登録"></Head>
    <h1>ユーザの登録</h1>
    <div>
        <form @submit.prevent="submit">
            <div>
                <label for="name">名前:</label>
                <input id="name" v-model="form.name">
                <div v-if="form.errors.name">{{ form.errors.name }}</div>
            </div>
            <div>
                <label for="email">メールアドレス:</label>
                <input id="email" v-model="form.email">
                <div v-if="form.errors.email">{{ form.errors.email }}</div>
            </div>
            <div>
                <label for="password">パスワード:</label>
                <input id="password" v-model="form.password" type="password">
                <div v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>
            <div>
                <label for="avatar">画像:</label>
                <input id="avatar" @input="form.avatar = $event.target.files[0]" type="file" />
                <div v-if="form.errors.avatar">
                    {{ form.errors.avatar }}
                </div>
            </div>
            <button type="submit" :disabled="form.processing">Submit</button>
        </form>
    </div>
</template>