<template>
    <div>
        <div class="card">
            <div class="card-body">
                <form @submit.prevent="categoryUpdate()" >
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
        mounted(){
            this.getData();
        },
        data(){
            return{
                form: new Form({
                    cat_name: '',
                }),
            }
        },

        methods: {

            getData() {
                axios.get('/categoryEdit/' + this.$route.params.id).then(res => {
                    this.form.fill(res.data.editData);

                })
            },

            categoryUpdate(){
                this.form.post('/categoryUpdate/' + this.$route.params.id).then(res=>{

                    this.$router.push('/categoryList')
                    Toast.fire({
                        icon: 'success',
                        title: 'Category Update successfully'
                    })

                })
            }

        }
    }
</script>
