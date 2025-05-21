<script setup lang="ts">
    import NavbarLayout from '@/layouts/app/public/NavbarLayout.vue';
    import FooterLayout from '@/layouts/app/public/FooterLayout.vue';
</script>

<template>
    <div class="flex min-h-screen flex-col">
        <NavbarLayout>

        </NavbarLayout>

        <div class="flex-1 bg-white">
            <slot />
        </div>

        <FooterLayout />
    </div>
</template>