<div>
    <form wire:submit="submit" class="space-y-6">
        @if ($successMessage)
            <div class="p-4 mb-4 text-sm text-green-800 rounded-xl bg-green-50 dark:bg-gray-800 dark:text-green-400 border border-green-200 dark:border-green-800"
                role="alert">
                <span class="font-bold">{{ $successMessage }}</span>
            </div>
        @endif

        <div class="grid md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label
                    class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('messages.contact.form.name') }}</label>
                <input type="text" wire:model="name"
                    class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition-all @error('name') border-red-500 @enderror"
                    placeholder="John Doe">
                @error('name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="space-y-2">
                <label
                    class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('messages.contact.form.email') }}</label>
                <input type="email" wire:model="email"
                    class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition-all @error('email') border-red-500 @enderror"
                    placeholder="john@example.com">
                @error('email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="space-y-2">
            <label
                class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('messages.contact.form.subject') }}</label>
            <input type="text" wire:model="subject"
                class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition-all @error('subject') border-red-500 @enderror"
                placeholder="Project Inquiry">
            @error('subject')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div class="space-y-2">
            <label
                class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('messages.contact.subtitle') }}</label>
            <textarea rows="4" wire:model="message"
                class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition-all @error('message') border-red-500 @enderror"
                placeholder="{{ __('messages.contact.form.message_placeholder') }}"></textarea>
            @error('message')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit"
            class="w-full py-4 bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white font-bold rounded-xl shadow-lg shadow-purple-500/30 transform hover:-translate-y-1 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
            wire:loading.attr="disabled">
            <span wire:loading.remove>{{ __('messages.contact.form.send') }}</span>
            <span wire:loading><i class="fa-solid fa-circle-notch animate-spin"></i> Enviando...</span>
        </button>
    </form>
</div>
