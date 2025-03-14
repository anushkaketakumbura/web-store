<template>
    <div class="bg-gray-50 antialiased dark:bg-gray-900">
        <Navbar />
        <Sidebar />
        <slot />
    </div>
</template>

<script setup>
import { initFlowbite } from 'flowbite';
import { onMounted } from 'vue';
import Navbar from './Navbar.vue';
import Sidebar from './Sidebar.vue';

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>
