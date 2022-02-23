<template>
  <div class="posts-container">
    <div class="container">
      <Post />
    </div>
  </div>
</template>

<script>
import Post from './Post.vue';
export default {
  name: 'Posts',
  components: {
    Post
  }
}
</script>

<style lang="scss" scoped>
@import "/resources/sass/mixins.scss";
@import "/resources/sass/_variables.scss";

.posts-container{
  @include flex('');
  justify-content: center;
  
}
</style>