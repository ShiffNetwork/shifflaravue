<template>
    <template v-for="link in links">
        <Link
        v-if="link.url"
          :href="link.url"
          v-html="link.label"
          class="px-1"
          :class="{'text-gray-500': ! link.url, 'font-bold' : link.active }"
          />

          <span v-else v-html="link.label"></span>
    </template>
     
</template>

<script setup>
    defineProps({
        links: Array
    })
</script>