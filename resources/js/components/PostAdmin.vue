<template>
  <div class="container-post">
    <div v-for="(post, i) in posts" :key="i"  class="post">
      <a  href="#">
        <img :src="post" alt="">
      </a>
    </div>
    
    

   
    
  </div>
  
</template>

<script>
export default {
  name: 'PostAdmin',
  data(){
    return{
      posts: [
        '/img/Buona-2.jpg',
        '/img/Buona-88.jpg',
        '/img/Buona-89.jpg',
        // '/img/Buona-119.jpg',
        // '/img/Buona-120.jpg',
        // '/img/Buona-121.jpg'
      ]
    }
  }

}
</script>

<style lang="scss" scoped>
@import "/resources/sass/mixins.scss";
@import "/resources/sass/_variables.scss";

.container-post{
  @include flex('');
  justify-content: center;
  .post{
    //width: 270px;
    width: calc(100% / 3 - 20px);
    margin: 10px;

    img{
      width: 100%;
    }
  }

 
}


</style>