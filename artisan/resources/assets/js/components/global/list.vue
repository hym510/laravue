<style lang="scss">
@import '~@/abstracts/_variables.scss';
.t-border {
	border-width: thin;
	border-color: black;
	border-bottom-style:solid;
	overflow: auto;
}
.img-border {
	height:100px;
	width:120px;
	float: left;
}
.box2 {
  display: inline-block;
  width: 200px;
  height: 100px;
  margin: 1em;
}
</style>

<template>
		<!-- <div class="box2"></div> -->
		<div>
			<div v-for="(i, index) in items" :key="index" class="t-border">
				<img :src="i.img" class="img-border">
			</div>
		</div>
  <!-- <div class="img-border">
  		<img src="20912718_113301995592_2.jpg" height="100px" width="120">
  </div> -->
</template>

<script>
  export default {
  		data() {
  			return {
  				items : [
	  				{img : '20912718_113301995592_2.jpg'},
	  				{img : '20912718_113301995592_2.jpg'},
	  				{img : '20912718_113301995592_2.jpg'},
	  				{img : '20912718_113301995592_2.jpg'}
	  			]
  			}
  		}
  }
</script>
