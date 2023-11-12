<template>
        <table class="mt-4 min-w-full divide-y divide-gray-200 border">

            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
            <tr v-for="post in posts">
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ post.id }}
                </td>
            </tr>
            </tbody>
        </table>
</template>

<script>
export default {
    props: {
        posts: Object
    }
}
</script>

