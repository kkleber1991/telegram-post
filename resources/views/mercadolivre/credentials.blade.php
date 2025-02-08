<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mercado Livre API Integration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('mercadolivre.credentials.store') }}" class="space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="app_id" value="App ID" />
                            <x-text-input id="app_id" name="app_id" type="text" class="mt-1 block w-full"
                                :value="old('app_id', $credentials?->app_id)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('app_id')" />
                        </div>

                        <div>
                            <x-input-label for="client_secret" value="Client Secret" />
                            <x-text-input id="client_secret" name="client_secret" type="password" class="mt-1 block w-full"
                                :value="old('client_secret', $credentials?->client_secret)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('client_secret')" />
                        </div>

                        <div>
                            <x-input-label for="redirect_uri" value="Redirect URI (Optional)" />
                            <x-text-input id="redirect_uri" name="redirect_uri" type="url" class="mt-1 block w-full"
                                :value="old('redirect_uri', $credentials?->redirect_uri)" />
                            <x-input-error class="mt-2" :messages="$errors->get('redirect_uri')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                            @if (session('status'))
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ session('status') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 