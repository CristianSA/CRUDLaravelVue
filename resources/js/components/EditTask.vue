<template>
    <div>
        <h3 class="text-center">Edit Task</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateTask">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="task.name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="task.description">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" class="form-control" v-model="task.content">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                task: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/tasks/${this.$route.params.id}`)
                .then((res) => {
                    this.task = res.data;
                });
        },
        methods: {
            updateTask() {
                this.axios
                    .patch(`http://localhost:8000/api/tasks/${this.$route.params.id}`, this.task)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>