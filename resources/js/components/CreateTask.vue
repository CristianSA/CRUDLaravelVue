<template>
    <div>
        <h3 class="text-center">Create Task</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addTask">
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
                    <button type="submit" class="btn btn-primary">Create</button>
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
        methods: {
            addTask() {
                this.axios
                    .post('http://localhost:8000/api/tasks', this.task)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>