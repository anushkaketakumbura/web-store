<template>
    <AdminLayout>
        <main class="h-auto p-4 pt-20 md:ml-64">
            <div
                class="mb-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4"
            >
                <div
                    class="h-32 rounded-lg border-2 border-dashed border-gray-300 md:h-64 dark:border-gray-600"
                ></div>
                <div
                    class="h-32 rounded-lg border-2 border-dashed border-gray-300 md:h-64 dark:border-gray-600"
                ></div>
                <div
                    class="h-32 rounded-lg border-2 border-dashed border-gray-300 md:h-64 dark:border-gray-600"
                ></div>
                <div
                    class="h-32 rounded-lg border-2 border-dashed border-gray-300 md:h-64 dark:border-gray-600"
                ></div>
            </div>
            <div
                class="mb-4 h-96 rounded-lg border-2 border-dashed border-gray-300 dark:border-gray-600"
            ></div>
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div
                    class="h-48 rounded-lg border-2 border-dashed border-gray-300 md:h-72 dark:border-gray-600"
                ></div>
                <div
                    class="h-48 rounded-lg border-2 border-dashed border-gray-300 md:h-72 dark:border-gray-600"
                ></div>
                <div
                    class="h-48 rounded-lg border-2 border-dashed border-gray-300 md:h-72 dark:border-gray-600"
                ></div>
                <div
                    class="h-48 rounded-lg border-2 border-dashed border-gray-300 md:h-72 dark:border-gray-600"
                ></div>
            </div>
            <div
                class="mb-4 h-96 rounded-lg border-2 border-dashed border-gray-300 dark:border-gray-600"
            ></div>
            <div class="grid grid-cols-2 gap-4">
                <div
                    class="h-48 rounded-lg border-2 border-dashed border-gray-300 md:h-72 dark:border-gray-600"
                ></div>
                <div
                    class="h-48 rounded-lg border-2 border-dashed border-gray-300 md:h-72 dark:border-gray-600"
                ></div>
                <div
                    class="h-48 rounded-lg border-2 border-dashed border-gray-300 md:h-72 dark:border-gray-600"
                ></div>
                <div
                    class="h-48 rounded-lg border-2 border-dashed border-gray-300 md:h-72 dark:border-gray-600"
                ></div>
            </div>
        </main>
    </AdminLayout>
</template>

<script setup>
import { initFlowbite } from 'flowbite';
import { onMounted } from 'vue';
import AdminLayout from './Components/AdminLayout.vue';

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>
