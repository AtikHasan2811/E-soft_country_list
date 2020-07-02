<template>
<div>
   <div class="card">
       <div class="card-body">
           <form @submit.prevent="categoryCreate()">
               <div class="form-group">
                   <label>Username</label>
                   <input v-model="form.cat_name" type="text" name="cat_name"
                          class="form-control" :class="{ 'is-invalid': form.errors.has('cat_name') }">
                   <has-error :form="form" field="cat_name"></has-error>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
           </form>
       </div>
   </div>
    <hr>

    <vue-snotify></vue-snotify>
</div>

</template>

<script>
    export default {
        name: "new",
        data(){
            return{
                form: new Form({
                    cat_name: ''
                }),
                category:[],
            }
        },
        methods:{
            categoryCreate(){
                this.form.post('/categoryCreate').then(res=>{

                    this.$router.push('/categoryList')
                    Toast.fire({
                        icon: 'success',
                        title: 'Category Create successfully'
                    })
                })
            },


        }
    }
</script>

<style scoped>

</style>
