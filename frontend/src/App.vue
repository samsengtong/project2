<template>
    <v-app>
      <header-view/>
    <v-main>
    
      <router-view/>
    </v-main>
    <footer-view/>
  </v-app>
</template>

<script>
import HeaderView from "../src/components/Header.vue"
import FooterView from "../src/components/Footer.vue"
export default {
  name: 'App',
  components: {
    HeaderView,
    FooterView
  },


  data: () => ({
    //
  }),
};
</script>
