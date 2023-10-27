<template>
    <Head>
        <title>Users</title>
        <meta
            type="description"
            content="Information about users"
            head-key="description"
        />
    </Head>
    <Layout>

        <h1 class="text-3xl">Users</h1>

        <Nav></Nav>

        <ul>
            <li 
                v-for="user in users"
                :key="user.id"
                v-text="user.name"
            />

        </ul>
    </Layout>
</template>

<script setup>
import Layout from '../Shared/Layout.vue';


defineProps({
    users: Array
})
</script>