@props(['for'])

<div x-data="{ {{$for}}: false }" class="relative dropdown">
        
    <input id="{{$for}}" {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!} @click="{{$for}} = ! {{$for}}">

    <div x-cloak x-show="{{$for}}" @click="{{$for}} = false" class="fixed inset-0 z-10 w-full h-full "></div>

    <div x-cloak x-show="{{$for}}" class="absolute left-0 z-10 mt-2 bg-white rounded-md shadow-xl border max-h-[200px] overflow-auto" id="{{$for}}Dropdown">
        
    </div>
</div>
