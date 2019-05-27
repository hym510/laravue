/**
 * Adds the promise polyfill for IE 11
 */
require('es6-promise').polyfill();

/**
 * Import Vue and Vuex
 */
import Vue from 'vue'
import Vuex from 'vuex'
/**
 * Imports all of the modules used in the application to build the data store.
 */
import { cafes } from './modules/cafes.js'

Vue.use( Vuex )


/**
 * Export the data store.
 */
export default new Vuex.Store({
    modules: {
    	cafes
    }
});
