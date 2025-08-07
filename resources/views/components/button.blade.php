
<button {{ $attributes->merge(['class' => 'px-4 py-2 rounded-lg bg-purple-600 text-white font-semibold hover:bg-purple-700 transition']) }}>
    {{ $slot }}
</button>