<div class="relative">
    <input 
        type="text" 
        class="form-input w-full" 
        placeholder="Search something..."
        wire:model="search"
        wire:keydown.escape="escape"
        wire:keydown.tab="init"
    />

    {{-- <div wire:loading class="form-input absolute z-10 list-group bg-white rounded-t-none shadow-lg w-full">
        <div>Searching</div>
    </div> --}}

    @if (!empty($search))
        {{-- <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="init"></div> --}}

        <div class="form-input absolute z-10 list-group bg-white rounded-t-none shadow-lg w-full">
            @if (!empty($keywords))
                @foreach ($keywords as $keyword)        
                    <a href="#" class="block">{{ $keyword }}</a>        
                @endforeach            
        @else
            <div>No result!</div>
        @endif  
        </div>
    @endif      
</div>
