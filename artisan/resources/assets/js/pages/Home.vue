<style>

</style>

<template>
  	<div id="home">
        <span v-show="cafesLoadStatus == 1">Loading</span>
        <div v-show="cafesLoadStatus == 2"><list></list></div>
        <span v-show="cafesLoadStatus == 3">Cafes loaded unsuccessfully!</span>
    </div>
</template>

<script>
	import List from '../components/global/List.vue';
  export default {
  		components: {
            List
        },
        created() {
        	this.$store.dispatch( 'loadCafes' );
        },
        computed: {
		    // 获取 cafes 加载状态
		    cafesLoadStatus(){
		        return this.$store.getters.getCafesLoadStatus;
		    },

		    // 获取 cafes
		    cafes(){
		        return this.$store.getters.getCafes;
		    }
		}
    }
</script>
