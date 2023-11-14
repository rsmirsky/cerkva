<script>
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import {formToJSON} from "axios";

export default {
    props: {
        posts: Object,
    },
    components: {
        FullCalendar // make the <FullCalendar> tag available
    },
    data() {
        return {
            calendarOptions: {
                plugins: [dayGridPlugin, interactionPlugin],
                themeSystem: 'bootstrap5',
                initialView: 'dayGridMonth',
                dateClick: this.handleDateClick,
                events: this.posts
            }
        }
    },
    methods: {
        handleDateClick: function (arg) {
            alert('date click! ' + arg.dateStr)
        },
    }
}
</script>

<template>
    <FullCalendar :options="calendarOptions"/>
</template>

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

