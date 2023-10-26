<template>
    <nav  class="mt-6">
        <ul class="lis-disc">
            <li><Link href="/" class="text-red-500 hover:underline">Home</Link></li>
            <li><Link href="/users" class="text-red-500 hover:underline">User</Link></li>
            <li><Link href="/settings" class="text-red-500 hover:underline">Settings</Link></li>
            <li><Link href="/logout" class="text-red-500 hover:underline" method="post" as="button">Log out</Link></li>
        </ul>
    </nav>
</template>

<script>
    import { Link } from '@inertiajs/vue3';

    export default{
        components: {Link},
    }
</script>