<script>
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import esLocale from '@fullcalendar/core/locales/es'
import {formToJSON} from "axios";


export default {
    props: {
        posts: Object,
    },
    components: {
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
                eventClick: this.handleEventDateClick,
                locale: esLocale
            }
        }
    },
    methods: {
        handleDateClick: function (arg) {
            alert('date click! ' + arg.dateStr)
        },
        handleEventDateClick: function (arg) {
            alert('date click! ' + arg.dateStr)
        }
    }
}
</script>

<template>
    <FullCalendar :options="calendarOptions"/>
</template>

<style>


:root {
     /*font-size: 1.2rem;*/
    font-style: ;
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

