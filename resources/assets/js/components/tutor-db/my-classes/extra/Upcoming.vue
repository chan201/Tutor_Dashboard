<!-- <template>
  <div class="m-portlet m-portlet--accent m-portlet--head-solid-bg m-portlet--head-sm" m-portlet="true"
  id="m_portlet_tools_1">

    <div class="m-portlet__body" v-if="classes.length">
      <div v-for="item in classes">
               <Card :ahamClass="item"></Card>
      </div>
     <div class="m-portlet-foot">
        <paginator1 :source="pagination" @navigate="navigate"></paginator1>
      </div>
    </div>
      <div class="m-portlet__body" v-else>
         No upcoming Classes
      </div>

   </div>
  </div>
</template>
<script>
import store from "../../../store";
import Card from "./Card";
import paginator1 from "./paginator1";

export default {
  components: {
    Card,
    paginator1
  },

  data() {
    return {
      classes: [],
      pagination : null
      
    };
  },

  mounted() {

   this.getUpcoming(),
   this.navigate()

  },

  methods:{

    getUpcoming()
    {
       axios.get('/tutor/classes?filter=upcoming')
      .then((response) => {
            this.classes = response.data.data;
            //this.pagination=response.data;
      })
      .catch((error) => {
        console.log(error);
      });
    },
    
    

    navigate(page){
    axios.get('/tutor/classes?filter=upcoming&page='+page)
    .then((response) => {
            this.classes = response.data.data;
            this.pagination=response.data;
            
      })
     

},

}}
</script> -->


<template>
<div class="row">
                          
                            <div class="col-md-3" v-for="ahamclass in todayclasses">
                                <Card1 :ahamclass='ahamclass'></Card1>
                            </div>
                        </div>
</template>
<script>
import Card1 from './Card1';
import store from "../../../store";
export default {
  components: {
    Card1,
    //paginator1
  },

  data() {
    return {
      todayclasses: [],
      //pagination : null
      
    };
  },

  mounted() {

   this.getUpcoming();
   //this.navigate()

  },

  methods:{

    getUpcoming()
    {
       axios.get('/tutor/classes?filter=upcoming')
      .then((response) => {
            this.classes = response.data.data;
            //this.pagination=response.data;
      })
      .catch((error) => {
        console.log(error);
      });
    },
  
},
}
</script>