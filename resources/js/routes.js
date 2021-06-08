import AllTasks from './components/AllTasks.vue';
import CreateTask from './components/CreateTask.vue';
import EditTask from './components/EditTask.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllTasks
    },
    {
        name: 'create',
        path: '/create',
        component: CreateTask
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditTask
    }
];