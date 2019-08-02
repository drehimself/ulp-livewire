<template>
    <div>
        <button @click="decrement">-</button>
        <button @click="increment">+</button>

        <span>{{ count }}</span>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                count: 0
            }
        },
        methods: {
            increment() {
                this.count++
            },
            decrement() {
                this.count--
            },
        },
    }
</script>
