<template>
  <div class="container-post">
    <div  class="post">
      <a @click="popover" href="#">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ350QlkrjUeQhBAcTPP9LeLaYr0xduhvFVtA&usqp=CAU" alt="">
      </a>
    </div>
    <div class="post">
      <a @click="popover" href="#">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ350QlkrjUeQhBAcTPP9LeLaYr0xduhvFVtA&usqp=CAU" alt="">
      </a>
    </div>
    <div @click="popover" class="post">
      <a href="#">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ350QlkrjUeQhBAcTPP9LeLaYr0xduhvFVtA&usqp=CAU" alt="">
      </a>

    </div>

    <!-- se la variabile isNone è vera allora do la classe attiva e quin in pop up non si vedrà poiche sara display: none, al click chiamo una funzione che mi cambia il valore di isNone trasformandola in false e quindi non varrà piu la condizione e dunque non gli daremo la classe active e quindi il pop up si vedra perche di default è display: block -->
    <div class="popover" :class="{active : isActive}">
      <h1>DEVI ESSERE REGISTRATO</h1>
      <button @click="popover">Submit</button>
    </div>
  </div>
  
</template>

<script>
export default {
  name: 'Post',


data(){
  return{
    isActive: false,
  }
},
methods: {
  popover(){
    console.log('click');
    this.isActive = !this.isActive;
  },
  
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

  .popover{
    display: none;
    position: absolute;
    top: 50px;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    z-index: 99;
    width: 60%;
    height: 500px;
    padding: 20px;
    color: white;
    border-radius: 20px;
    background-color: rgba(0,0,0,0.8);

    &.active{
      display: inline-block;
    }

    button{
      border: none;
      padding: 5px 9px;
      background-color: white;
      border: 1.5px solid black;
      border-radius: 5px;
      cursor: pointer;

      &:hover{
        background-color: rgb(233, 224, 224);

      }
    }
  }
}


</style>