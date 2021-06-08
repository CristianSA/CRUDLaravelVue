<template>
    <div class="container"> 
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <router-link to="/" class="nav-link">Tasks List</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/create" class="nav-link">Create Task</router-link>
                    </li>
                </ul>
            </div>
        </nav>

        <router-view> </router-view>
    </div>
</template>
 
<script>
    export default {}
</script>