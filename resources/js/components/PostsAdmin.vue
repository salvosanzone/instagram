<template>
  <div class="posts-container">
    <div class="container">
      <PostAdmin />
    </div>
  </div>
</template>

<script>
import PostAdmin from './PostAdmin.vue';
export default {
  name: 'PostsAdmin',
  components: {
    PostAdmin
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