import homeComponent from './components/admin/AdminHome'
import buttonComponent from './components/ExampleComponent'
import categoryListComponent from './components/admin/category/list'
import editCategory from './components/admin/category/view'
import addCategory from './components/admin/category/new'
export const routes = [
    {
        path: '/home',
        component:homeComponent,
    },

    {
        path: '/button',
        component:buttonComponent,
    },

    {
        path: '/categoryList',
        component:categoryListComponent,
    },
        {
            path: '/edit:id',
            component:editCategory,

        },
        {
            path: '/addCategory',
            component:addCategory,
        },

]

