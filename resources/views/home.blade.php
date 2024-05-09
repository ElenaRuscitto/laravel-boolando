


<template>

  <main>
    <div class="container">

      <ProductCard
      v-for=" product in productsList.products"
      :key="product.id"
      :product="product"/>

    </div>

  </main>

</template>



