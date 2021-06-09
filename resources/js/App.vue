<template>
    <div class="container"> 
        <div class="topnav" id="myTopNav">
            <a href="#" class="active">Laravel Vue</a>
            <router-link to="/" class="nav-link">Tasks List</router-link>
            <router-link to="/create" class="nav-link">Create Task</router-link>
            <a href="#" class="icon" @click="toggleNavbar()">
                #
            </a>
        </div>
        <router-view> </router-view>
    </div>
</template>
 
<script>
    export default {
        methods:{
            toggleNavbar(){
                let x = document.getElementById("myTopNav");
                console.log(x);
                if(x.className === "topnav"){
                    x.className += " responsive";
                }else{
                    x.className = "topnav";
                }
            }
        }
    }
</script>