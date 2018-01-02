import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    posts:[]
  },
  mutations: {
    'SET_POSTS'(state, posts) {
      state.posts = posts;
    }
  },
  actions: {
    fetchPosts({commit}) {
      axios.get('posts?_embed')
        .then(res => {
          commit('SET_POSTS', res.data);
        });
    }
  },
  getters: {
    posts(state) {
      return state.posts;
    }
  }
})
