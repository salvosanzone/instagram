<template>
  <main>
    
    <!-- UP-MAIN -->
    <div class="up-main">
      <div class="container">
        <div class="profile-image-container">
          <div class="image">
            <img src="/img/foto.webp" alt="">
          </div>
        </div>
        <div class="profile-info">
          <div class="username">
            <div style="margin-right: 10px">
              <h2>salvatore.sanzone</h2>
            </div>
            <div style="margin-right: 10px">
              <button>
                <strong>Edit Profile</strong>
              </button>
            </div>
            <!-- <div style="margin-right: 10px">
              <i class="fa fa-circle-o" style="font-size: 20px;" aria-hidden="true"></i>
            </div> -->
          </div>
          <div class="statistics">
            <div style="margin-right: 10px">
              <span style="margin-right:30px;"><strong style="margin-right: 5px;">112</strong>Posts</span>
            </div>
            <div style="margin-right: 10px">
              <span style="margin-right:30px;"><strong style="margin-right: 5px;">2.499</strong>Followers</span>
            </div>
            <div style="margin-right: 10px">
              <span style="margin-right:30px;"><strong style="margin-right: 5px;">560</strong>Following</span>
            </div>
          </div>
          <div style="margin-bottom: 5px;"><strong>Salvatore Sanzone</strong></div>
          <div style="margin-bottom: 5px;">Photographer</div>
          <p style="margin-bottom: 5px;">
            •From Sicily 🇮🇹 <br>
            •Documentary Photography 📷
          </p>
        </div>
      </div>
    
    </div>  
    <!-- /UP-MAIN -->

      
    <!-- CENTER-MAIN -->
    <div class="center-main">
      <div class="container">
        <div class="highlights-container">
          <div style="margin-bottom: 5px;" class="highlights-image">
            <img src="/img/hightlight-foto.jpg" alt="">
          </div>
          <div>
            summer 20'
          </div>
        </div>
      </div>
    </div>
    <!-- /CENTER-MAIN -->

    <!-- BOTTOM-MAIN -->
    <div class="bottom-main">
      <div class="container">
        <div>POSTS</div>
        <div style="margin:0 70px;">SAVED</div>
        <div>TAGGED</div>
      </div>
    </div>
    <!-- /BOTTOM-MAIN -->

     <Posts />   
    
  </main>
</template>

<script>
import Posts from './Posts.vue';
export default {
  name: 'Main',
  components: {
    Posts
  }
}
</script>

<style lang="scss" scoped>
@import "/resources/sass/mixins.scss";
@import "/resources/sass/_variables.scss";
main{
  //position: relative;
  background-color: rgba(var(--b3f,250,250,250),1);
  padding: 30px 20px 0;

  .up-main{
    
    @include flex('');
    justify-content: center;


    .container{
      @include flex('center');

      .profile-image-container{
        width: 30%;
        height: 200px;
        @include flex('');
        justify-content: center;
        position: relative;

        .image{
          position: absolute;
          bottom: 50px;
          width: 160px;
          height: 160px;
          border-radius: 50%;
          padding: 5px;
          border: 1px solid lightgrey;

          img{
            max-width: 100%;
            max-height: 100%;
            border-radius: 50%;
            cursor: pointer;

          }
        }
      }
    
      .profile-info{
        width: 70%;

        .username{
          @include flex('');
          align-items: baseline;
          margin-bottom: 20px;

          button{
            background-color: transparent;
            border: none;
            padding: 5px 9px;
            border: 1px solid lightgray;
            border-radius: 5px;
            cursor: pointer;
            
          }

        }

        .statistics{
          @include flex('');
          margin-bottom: 20px;

        }
    
      }


    }

  }

  .center-main{
    @include flex('');
    justify-content: center;

    .container{
      padding-top: 35px;
      
      &::after{
        content: "";
        display: block;
        padding-top: 40px;
        border-bottom: 1px solid lightgrey;
      }

    }


    .highlights-container{
      width: 150px;
      display: flex;
      flex-direction: column;
      align-items: center;


     .highlights-image{
      width: 90px;
      height: 90px;
      border-radius: 50%;
      padding: 5px;
      border: 1px solid lightgrey;

      img{
        width: 100%;
        max-height: 100%;
        border-radius: 50%;
        cursor: pointer;

        

      }
    }
 
    }
    
  }

  .bottom-main{
    @include flex('');
    justify-content: center;

    .container{
      padding: 20px 0;
      @include flex('');
      justify-content: center;
    }
  }

  
}
</style>