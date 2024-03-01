<template>
    <div class="uk-container mt-11">
        <Headerj />
        <div class="mt-11" style="font-family: 'Parisienne', cursive">
            <div
                class="uk-text-large uk-text-center uk-align-center uk-text-large"
                style="font-size: 3em"
            >
                Tenim el gust de convidar-te a un encontre molt especial el
                <b>13 d'Abril de 2024 a les 12:00 a la Parròquia del Carmen</b>
            </div>
            <div
                class="uk-text-large uk-text-center uk-align-center uk-text-large mt-6"
                style="font-size: 2em"
            >
                Volem celebrar-ho com una ocassió molt especial, per això farem una missa a les 12:00 i després dinarem tots junts a la Sala Cancela que
                hem reservat per a l'ocassió. Esperem que puguis venir i compartir aquest dia amb nosaltres. Tindrem moments per a ballar, riure, compartir, tocar
                la guitarra i cantar. Serà un dia inoblidable.
            </div>
            <div class="uk-card uk-card-default" style="font-size: 2em">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img
                                class="uk-border-circle"
                                width="40"
                                height="40"
                                src="../../../img/avatar.jpg"
                                alt="Avatar"
                            />
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">
                                Inivtació per a una persona molt especial
                            </h3>
                            <p
                                class="uk-text-meta uk-margin-remove-top"
                                style="font-size: 20px"
                            >
                                <time datetime="2014-04-13T13:00"
                                    >13 d'Abril de 2024 a l'hora de dinar</time
                                >
                            </p>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body uk-text-center">
                    <div class="mb-6 p-11">
                        <h2 class="mb-5">Entrants</h2>
                        <p class="mb-11">
                            Embotits ibèrics i morter de tomàquet amb pa
                            torrat. Pa de vidre amb verdures i anxova.
                            Foie, poma i pa d'espècies amb PX.
                        </p>
                        <hr />
                    </div>

                    <div class="mb-6 p-11">
                        <h2 class="mb-5">Plat</h2>
                        <p class="mb-11">
                            Galta ibèrica amb parmentier d'avellanes.
                            (Comuniqueu-nos si teniu alguna al·lèrgia o preferiu
                            opció vegana)
                        </p>
                        <hr />
                    </div>

                    <div class="mb-6 p-11">
                        <h2 class="mb-5">Postre</h2>
                        <p class="mb-11">
                            Crema de cafè amb gelat de llet cremada.
                        </p>
                        <hr />

                        <div class="mb-6 p-11">
                            <h2 class="mb-5">Begudes</h2>
                            <p class="mb-11">
                                Vi blanc i negre D.O. València. Cerveses,
                                refrescos i aigua mineral. Cafè i infusions.
                            </p>
                            <hr />
                        </div>
                    </div>
                </div>
                <div class="uk-card-footer">
                    <a href="../../../img/Juniors40.pdf" target="_blank" class="uk-button uk-button-secondary">Descarrega folleto</a>
                    <a href="/apuntat" class="uk-button uk-button-primary">Apunta'm</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import Headerj from "@/Components/Headerj.vue";
import UIkit from "uikit";

export default defineComponent({
    name: "",

    props: {},

    data() {
        return {};
    },

    computed: {},

    watch: {},

    methods: {
        modal(e) {
            e.preventDefault();
            e.target.blur();
            UIkit.modal.alert("UIkit alert!").then(function () {
                console.log("Alert closed.");
            });
        },
    },

    components: { Headerj },

    setup() {
        return {};
    },
});
</script>

<style lang="scss" scoped>
h2,
h3 {
    font-family: "Parisienne", cursive;
    font-weight: bolder;
}
</style>
