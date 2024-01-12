<script>
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import esLocale from '@fullcalendar/core/locales/es'
import {formToJSON} from "axios";
import Modal from "@/Pages/Posts/Modal.vue";
import App from "@/Pages/Posts/App.vue";

export default {
    props: {
        posts: Object,

    },
    components: {
        App,
        Modal,
        FullCalendar, // make the <FullCalendar> tag available
        esLocale
    },
    data() {
        return {
            calendarOptions: {
                plugins: [dayGridPlugin, interactionPlugin],
                themeSystem: 'bootstrap5',
                initialView: 'dayGridMonth',
                dateClick: this.handleDateClick,
                events: this.posts,
                //eventClick: this.handleEventDateClick,
                locale: 'uk'
            }
        }
    },
    methods: {
        handleDateClick: function (arg) {
            this.posts.forEach(function (element) {
                if (element.date === arg.dateStr) {
                    alert(element.description)
                }
            });
        }
    }
}


</script>

<template>
    <FullCalendar :options="calendarOptions" >
<!--        <template v-slot:eventContent='arg'>
            <b>{{ arg.event.title }}</b>
            <article v-for="post in posts" >
                <h3>{{post.description}}</h3>
                <h3>{{arg.dateStr}}</h3>
            </article>

        </template>-->
    </FullCalendar>
</template>

<style>


@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap');



:root {
     /*font-size: 1.2rem;*/
    font-family: 'Montserrat', sans-serif;
    --fc-border-color: black;
    --fc-daygrid-event-dot-width: 5px;
    --fc-today-bg-color: rgb(255,255,102) ;
    --fc-bg-event-color: rgb(204, 0, 0);

}
</style>

<!--<template>-->
<!--        <table class="mt-4 min-w-full divide-y divide-gray-200 border">-->

<!--            <tbody class="bg-white divide-y divide-gray-200 divide-solid">-->
<!--            <tr v-for="post in posts">-->
<!--                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">-->
<!--                    {{ post.id }}-->
<!--                </td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->
<!--</template>-->

<!--<script>-->
<!--export default {-->
<!--    props: {-->
<!--        posts: Object-->
<!--    }-->
<!--}-->
<!--</script>-->

