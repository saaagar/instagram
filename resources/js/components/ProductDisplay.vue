
<template>
  <div>
    <img
      class="xzoom"
      :src="'/storage/' + images[0].image"
      :xoriginal="'/storage/' + images[0].image"
    />

    <div class="xzoom-thumbs">
      <a v-for="imgs in images" :href="'/storage/' + imgs.image" :key="imgs.id">
        <img
          class="xzoom-gallery"
          width="80"
          :href="'/storage/' + imgs.image"
         
        />
      </a>
    </div>
          <div class="large-7 column"></div>

  </div>
</template>
<script>
export default {
  props: {
    images: { type: Array },
  },
  data() {
    return {
      images_arr: [],
    };
  },
  mounted: function () {
    this.initilizePlugin();
  },
  methods: {
    initilizePlugin: function () {
      console.log(this.images);
    },
  },
};
</script>