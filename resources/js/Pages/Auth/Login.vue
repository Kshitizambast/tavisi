<template>

    <div class="container">
         <jet-validation-errors class="mb-4" />
        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
    <div class="authentication-box mt-5 w-100">
        <div class="row authentication-section m-0 p-0 w-100 h-100">
            <div class="col-md-6 d-none d-md-block bg-light" style="background: url('https://images.unsplash.com/photo-1568185518838-3300c90c9170?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1397&q=80'); background-position:center;"></div>
            <div class="col-md-6 py-5 p-md-5 d-flex flex-column justify-content-center align-middle">

                <h1>Login</h1>
                <p class="text-muted">Welcome back! Login to your account.</p>
                <form @submit.prevent="submit" class="py-5 d-flex flex-column justify-content-between">
                    <div class="input-bg-dark mb-3">
                        <label for="exampleInputEmail1" class="p-2 pt-1 pb-0 mb-0 form-label small color-main">Email address</label>
                        <input type="email" class="px-2 p-0 form-control text-light border-0 bg-transparent" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="form.email">
                    </div>
                    <div class="input-bg-dark mb-3">
                        <label for="exampleInputPassword1" class="p-2 pt-1 pb-0 mb-0 form-label small color-main">Password</label>
                        <input type="password" class="px-2 p-0 form-control text-light border-0 bg-transparent" id="exampleInputPassword1" v-model="form.password">
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-check">
                            <input type="checkbox" v-model="form.remember" class="form-check-input bg-dark" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"><small class="text-muted"> Remember Me </small></label>
                        </div>
                        <inertia-link :href="route('password.request')">
                            <p class="nav-link p-0 text-muted"><small><b>Forgot Password?</b></small></p>
                        </inertia-link>
                    </div>

                    <jet-button class="ml-4 btn bg-main w-100 text-dark" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Log in
                    </jet-button>
                    
                   
                </form>

                <p class="text-small text-muted text-center"><b>OR</b></p>

                <div class="d-flex justify-content-between mb-3">
                    <p class="text-muted w-auto">Don't have an account?</p>
                    <inertia-link :href="route('register')">
                        <p class="nav-link p-0 color-main"><b>Sign Up Now</b></p>
                    </inertia-link>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<style type="text/css">
    

.color-main{    
    color: #f8b45a;
}

.bg-main{
    background-color: #fbbe70;
}

.authentication-section{
    min-height: 40vw;
}

.authentication-box{
    height: fit-content;
    background-color: #2e3238;
    color: white;
}

.input-bg-dark{
    background-color: #202327;
    border: .5px solid rgb(82, 82, 82);
    border-radius: .35rem;
    padding: 5px;
}

@media (max-width: 576px) {

    .authentication-box{
        height: max-content;
    }

}
</style>


<!-- <template>
    <jet-authentication-card>
        <template #logo>
            <jet-authentication-card-logo />
        </template>

        <jet-validation-errors class="mb-4" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <jet-label for="email" value="Email" />
                <jet-input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus />
            </div>

            <div class="mt-4">
                <jet-label for="password" value="Password" />
                <jet-input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <jet-checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <inertia-link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Forgot your password?
                </inertia-link>

                <jet-button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </jet-button>
            </div>
        </form>
    </jet-authentication-card>
</template>
 -->
<script>
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
    import JetButton from '@/Jetstream/Button'
    import JetInput from '@/Jetstream/Input'
    import JetCheckbox from '@/Jetstream/Checkbox'
    import JetLabel from '@/Jetstream/Label'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'

    export default {
        components: {
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                })
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        }
    };
</script>
