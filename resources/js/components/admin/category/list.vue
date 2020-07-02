<template>
<div>
 <section class="conten">
     <div class="row">
         <div class="col-12">
             <div class="card">
                 <div class="card-header">
                     <div class=" title">
                     <h3 class="card-title">Category list</h3>
                     </div>
                     <div class="card-tools">
                     <router-link to="/addCategory" class="btn btn-primary ">Add Category</router-link>
                     </div>
                 </div>
                 <div class="card-body">
                     <table class="table table-striped">
                         <thead>
                         <tr>
                             <th scope="col">SL</th>
                             <th scope="col">Category Name</th>
                             <th scope="col">Action</th>

                         </tr>
                         </thead>
                         <tbody>
                         <tr v-for="(category,index) in categorys.data" >
                             <th scope="row">{{index+1}}</th>
                             <td>{{category.cat_name }}</td>
                             <td>
                                 <router-link :to="`/edit${category.id}`"  class="btn btn-primary">Edit</router-link>
                                 <button type="button" @click="cat_delete(category.id)" class="btn btn-hover-shine btn-danger"><i class=" fa fa-trash"></i>Delete</button>
                             </td>
                         </tr>
                         </tbody>
                     </table>
                 </div>
                 <div class="card-footer">
                  <pagination :data="categorys" :limit="limit"
                  @pagination-change-page="getResults" >
                      <span slot="prev-nav">&lt; Previous</span>
                      <span slot="next-nav">Next &gt;</span>

                  </pagination>
                 </div>
             </div>
         </div>
     </div>
 </section>

</div>
</template>

<script>
    export default {
        name: "list",

        data(){
            return{
            categorys: {}
            }
        },

        mounted(){
            this.getData();
            this.getResults();
        },
        props:{
            limit: {
                type: Number,
                default: 2
            }
        },
        methods: {
            getData(){
                axios.get('/category').then(res=>{
                    this.categorys=res.data.data
                    // console.log(res.data.data)

                })
            },

            getResults(page = 1){
                axios.get('/category?page=' + page)
                    .then(response => {
                        this.categorys=response.data.data;
                    });
            },

            cat_delete(id){
                axios.get('/catDelete/'+id).then(res=>{
                    // console.log(res.data);

                    Toast.fire({
                        icon: 'success',
                        title: 'Category delete successfully'
                    })
                    this.getData();
                })
            }









        }
    }
</script>

<style scoped>
    .title{
        float: left;
    }
.card-tools{
    float: right;

}
</style>
