<template>
  <div class="carousel">
    <div>
      <img class="img-carousel" :src="images[counter]" alt="">
    </div>
    
    
  </div>
</template>

<script>
export default {
    name: 'Carousel',

    data(){                   
      return{
        images: [ 
          '/img/screen2.jpg',
          '/img/screen3.jpg',
          '/img/screen4.jpg',
          '/img/screen5.jpg',
          '/img/screen6.jpg'
        ],
        counter: 0
      }
    },
    methods: {
      nextImage(){
        this.counter ++;
        if(this.counter > this.images.length - 1){
          this.counter = 0;
        }
      },
    },
    mounted(){
      setInterval(this.nextImage, 3000)
        
    }
    
}
</script>


<style lang="scss" scoped>
.carousel{
    .img-carousel{
      width: 100% !important;
      height: 100%;
    }
}
</style>