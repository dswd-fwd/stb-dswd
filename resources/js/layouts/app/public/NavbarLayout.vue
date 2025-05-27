<!-- <script setup lang="ts">
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
</template> -->

<script setup lang="ts">
import { ref, onMounted } from 'vue'

const currentTime = ref('')
const updateTime = () => {
  const now = new Date()
  currentTime.value = now.toLocaleTimeString('en-PH', {
    hour: '2-digit',
    minute: '2-digit',
    second: '2-digit',
    hour12: true,
    timeZone: 'Asia/Manila'
  })
}

onMounted(() => {
  updateTime()
  setInterval(updateTime, 1000)
})

// For the date (static or dynamic)
const today = new Date()
const month = today.toLocaleString('en-US', { month: 'short' }).toUpperCase()
const day = today.getDate()
</script>

<template>
  <nav class="h-16 w-full bg-gray-50 fixed text-neutral-800 shadow-sm z-50">
    <div class="flex items-center justify-between mx-auto h-full w-full max-w-7xl px-4">
      <!-- Logo -->
      <div>
        <span class="font-bold">STB Logo</span>
      </div>

      <!-- Center nav links -->
      <div>
        <ul class="flex gap-4 font-medium">
            <li><a href="/" class="hover:underline">Home</a></li>
            <li><a href="/about" class="hover:underline">About us</a></li>
            <li><a href="/social-technologies" class="hover:underline">Social Technologies</a></li>
            <li><a href="/resources" class="hover:underline">Resources</a></li>
            <li><a href="/e-newsletter" class="hover:underline">e-Newsletter</a></li>
            <li><a href="/contact-us" class="hover:underline">Contact us</a></li>
        </ul>
      </div>


      <!-- Right side: Search + Date + Time -->
      <div class="flex items-center gap-2 bg-white-100 px-2 py-1 rounded">
        <!-- Search Button -->
        <button class="flex items-center space-x-2 bg-gray-900 text-white px-4 py-2 rounded shadow text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1116.65 2a7.5 7.5 0 010 14.5z" />
            </svg>
            <span class="font-bold">Search</span>
        </button>

        <!-- Date -->
        <a href="https://oras.pagasa.dost.gov.ph/index.shtml" target="_blank" rel="noopener" class="border border-gray-400 bg-white px-2 py-1 rounded text-center leading-none hover:underline">
            <div class="text-[12px] font-bold text-gray-600">{{ month }}</div>
            <div class="text-sm font-bold">{{ day }}</div>
        </a>

        <!-- Time -->
        <a href="https://oras.pagasa.dost.gov.ph/index.shtml" target="_blank" rel="noopener" class="border border-gray-400 bg-white px-3 py-1 rounded text-xs font-semibold hover:underline">
            <div class="text-[12px] text-gray-600">Philippine Standard Time:</div>
            <div class="text-[15px] text-center font-bold">{{ currentTime }}</div>
        </a>

      </div>

      <!-- Optional slot content -->
      <slot />
    </div>
  </nav>
</template>
