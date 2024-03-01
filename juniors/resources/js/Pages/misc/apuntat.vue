<template>
    <div>
        <Headerj />

        <GuestLayout>
            <!-- <Head title="Log in" /> -->
<div class="mb-6">
            <p>
                Apunta't i rebràs tota la informació de com apuntar-se al dinar de germanor que celebrarem i et mantindrem informa't de tots els detalls.
            </p>
            <hr>
        </div>

                <div>
                    <InputLabel for="email" value="Email" />

                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full"
                        v-model="form.email"
                        required
                        autofocus
                        autocomplete="username"
                    />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mt-4">
                    <InputLabel for="nom" value="Nom" />

                    <TextInput
                        id="nom"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.nom"
                        required
                        autocomplete="current-nom"
                    />

                    <InputError class="mt-2" :message="form.errors.TextInput" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <PrimaryButton
                        @click="submit"
                        class="ms-4"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        Apunta'm
                    </PrimaryButton>
                </div>

        </GuestLayout>
    </div>
</template>

<script setup>
import '../../../../node_modules/vue3-toastify/dist/index.css';

import Headerj from "@/Components/Headerj.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { toast } from 'vue3-toastify';


defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",

    nom: "",
});

function submit () {
    // form.post(route("login"), {
    //     onFinish: () => form.reset("password"),
    // });
    var url="/apuntarse";
    axios.post(url,form)
    .then(res => {
        toast.success("En breus rebràs un correu amb tota la informació. Gràcies per apuntar-te!");
        console.log(res);
        form.reset();

    })
    .catch(err => {
        toast.error("Error al enviar el formulari");
        console.error(err);
        form.reset();


    })
};
</script>

<style lang="scss" scoped></style>
