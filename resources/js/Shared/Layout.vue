<template>
    <Head>
        <!-- <title>ShiffLaraVue</title> -->
        <meta
            type="description"
            content="Information about ShiffLaravue"
            head-key="description"
        />
    </Head>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <div class="flex items-center">
                <h1 class="font-bold text-lg">ShiffLaraVue</h1>
                <p class="text-sm ml-4">
                    Welcome Back, {{  username }} !
                </p>
            </div>
            <Nav></Nav>
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot></slot>
        </div>
        
    </section>
</template>

<script>
import Nav from './nav.vue';
import { Head } from '@inertiajs/vue3';

export default{
    components: { Nav, Head }, 
    computed: {
        username() {
            return this.$page.props.auth.user.username;
        }
    }
}
</script>