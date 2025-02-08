<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('API Integration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Mercado Livre Credentials -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Mercado Livre Credentials') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Update your Mercado Livre API credentials.') }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('mercadolivre.credentials.store') }}" class="mt-6 space-y-6">
                            @csrf
                            
                            <div>
                                <x-input-label for="app_id" value="App ID" />
                                <x-text-input id="app_id" name="app_id" type="text" class="mt-1 block w-full"
                                    :value="old('app_id', $mercadoLivreCredential?->app_id)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('app_id')" />
                            </div>

                            <div>
                                <x-input-label for="client_secret" value="Client Secret" />
                                <x-text-input id="client_secret" name="client_secret" type="password" class="mt-1 block w-full"
                                    :value="old('client_secret', $mercadoLivreCredential?->client_secret)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('client_secret')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>

            <!-- Etsy Credentials -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Etsy Credentials') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Update your Etsy API credentials.') }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('etsy.credentials.store') }}" class="mt-6 space-y-6">
                            @csrf
                            
                            <div>
                                <x-input-label for="etsy_api_key" value="API Key" />
                                <x-text-input id="etsy_api_key" name="api_key" type="text" class="mt-1 block w-full"
                                    :value="old('api_key', $etsyCredential?->api_key)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('api_key')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if($etsyCredential?->access_token)
                                    <p class="text-sm text-green-600 dark:text-green-400">{{ __('Connected') }}</p>
                                @else
                                    <a href="{{ route('etsy.auth.redirect') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                        {{ __('Connect with Etsy') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 