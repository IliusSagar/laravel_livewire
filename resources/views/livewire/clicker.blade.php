<div>
    <form class="p-5" wire:click="createNewUser" action="">
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model="name" type="text"
            placeholder="name">
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model="email" type="email"
            placeholder="email">
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model="password" type="password"
            placeholder="password">

        <button class="block rounded px-3 py-1 bg-gray-400 text-white">Create</button>
    </form>

    <hr>

    @foreach ($users as $user)
    <h3>{{ $user->name}}</h3>
    @endforeach
</div>
