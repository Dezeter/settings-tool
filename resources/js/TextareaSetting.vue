<template>
    <default-setting :setting="setting" :errors="errors || []">

        <template slot="setting">

            <textarea
                :id="setting.key"
                :value="setting.value"
                @input="$emit('update', {
                    key: setting.key,
                    value: $event.target.value,
                })"
                :placeholder="setting.placeholder"
                class="w-full form-control form-input form-input-bordered py-3 h-auto"
                rows="6"
            />

        </template>

    </default-setting>
</template>

<script>
    import DefaultSetting from './DefaultSetting'
    export default {
        components: { DefaultSetting },
        props: {
            setting: Object,
            errors: Array,
        },
    }
</script>
