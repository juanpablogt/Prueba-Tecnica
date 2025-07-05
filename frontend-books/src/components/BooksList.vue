<template>
  <div>
    <h1>Lista de libros</h1>
    <ul>
      <li v-for="book in books" :key="book.title">
        <strong>{{ book.title }}</strong> - {{ book.author }} ({{ book.published_year }}) - Promedio: {{ book.average_rating }}
      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const books = ref([])

onMounted(async () => {
  try {
    const response = await axios.get('http://127.0.0.1:8000/api/books')
    books.value = response.data
  } catch (error) {
    console.error(error)
  }
})
</script>
