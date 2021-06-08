<template>
    <div>
        <h2 class="text-center">Tasks List</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Detail</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="task in tasks" :key="task.id">
                <td>{{ task.id }}</td>
                <td>{{ task.name }}</td>
                <td>{{ task.description }}</td>
                <td>{{ task.content }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: task.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteTask(task.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                tasks: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/tasks/')
                .then(response => {
                    this.tasks = response.data;
                });
        },
        methods: {
            deleteTask(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/tasks/${id}`)
                    .then(response => {
                        let i = this.tasks.map(data => data.id).indexOf(id);
                        this.tasks.splice(i, 1)
                    });
            }
        }
    }
</script>