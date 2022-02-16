<div class="flex mt-8">
    <div class="m-auto">
    <form class="w-full max-w-lg" wire:submit.prevent="submitForm">
        <div>
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session('success_message') }}
                </div>
            @endif
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              First Name
            </label>
            @error('first_name')
            <p class="text-red-500 mt-1">{{$first_name}}</p>
            @enderror
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" wire:model="first_name" id="grid-first-name" type="text" placeholder="Jane">
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"  for="grid-last-name">
              Last Name
            </label>
            @error('last_name')
            <p class="text-red-500 mt-1">{{$message}}</p>
            @enderror
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model="last_name" id="grid-last-name" type="text" placeholder="Doe">
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Password
            </label>
            @error('password')
            <p class="text-red-500 mt-1">{{$message}}</p>
            @enderror
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model="password" id="grid-password" type="password" placeholder="******************">
            <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
          </div>
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                 submit
          </button>
        </div>
        </div>
      </form>
    </div>
</div>
