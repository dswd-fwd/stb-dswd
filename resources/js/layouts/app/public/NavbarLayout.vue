<script setup lang="ts">
</script>

<template>
    <nav class="h-16 w-full bg-gray-50 fixed text-neutral-800 shadow-sm">
        <div class="flex items-center mx-auto h-full w-full max-w-7xl relative">
            <div>
                <span>STB Logo</span>
            </div>
            <div class="absolute -translate-x-1/2 left-1/2">
                <ul class="flex gap-4 font-medium">
                    <li>Home</li>
                    <li>About us</li>
                    <li>Social Technologies</li>
                    <li>Resources</li>
                    <li>e-Newsletter</li>
                    <li>Contact us</li>
                </ul>
            </div>
            <slot />
        </div>
    </nav>
</template>