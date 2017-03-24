<template>
    <div class="container contact">


        <div class="row row-eq-height">
            <div class="col-md-6">
                <div class="well well-sm">
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <legend class="text-center">Kontaktujte nás</legend>

                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Jméno</label>

                                <div class="col-md-9">
                                    <input v-model="emailName" id="name" name="name" type="text" placeholder="Vaše jméno"
                                           class="form-control">
                                </div>
                            </div>

                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">Váš E-mail</label>

                                <div class="col-md-9">
                                    <input v-model="emailEmail" id="email" name="email" type="text" placeholder="Váš E-mail"
                                           class="form-control">
                                </div>
                            </div>

                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Váš dotaz</label>

                                <div class="col-md-9">
                  <textarea v-model="emailText" class="form-control" id="message" name="message"
                            placeholder="Zde prosím napište svůj dotaz..." rows="5"></textarea>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary btn-lg g-recaptcha" v-on:click="submitEmail"
                                            :data-sitekey="rcapt_sig_key">Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <address>
                    <strong>Autodoprava Postránecký</strong><br>
                    Vinohrady 227<br>
                    68401 Kobeřice u Brna<br>
                    <abbr title="Telefon">Tel:</abbr> +420 603 204 291




                </address>

                <address>
                    <strong>Vít Postránecký</strong><br>
                    <a href="mailto:info@autodoprava-vipo.cz">info@autodoprava-vipo.cz</a>
                </address>
            </div>
            <div class="col-md-6">

                <!--<iframe-->
                <!--width="100%"-->
                <!--height="100%"-->
                <!--frameborder="0" style="border:0"-->
                <!--src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBi5Zdo0IRfM4wlLhMeboPHiu5fJq3W2G8-->
                <!--&q=Vinohrady+227,+684+01+Kobeřice+u+Brna" allowfullscreen>-->
                <!--</iframe>-->
            </div>
        </div>
    </div>
</template>

<script>

    export default{
        data() {
            return {
                rcapt_sig_key: "6LecQBoUAAAAANe7XMF9LMrbkoo7wSGs2rAOSyE3",
                rcapt_id: 0, // will be used later,
                emailText: '',
                emailEmail: '',
                emailName: ''
            }
        },
        methods: {
            submitEmail(){
                console.log(this.emailText);
            }
        },
        mounted(){
            if (window.grecaptcha) {
                this.rcapt_id = grecaptcha.render($('.g-recaptcha')[0], {sitekey: this.rcapt_sig_key});
            }
        }
    }
</script>
<style scoped>
    .contact {
        padding-top: 120px;
    }
</style>
