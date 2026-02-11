<div class="p-6">

    <div>
        <select>
            <option disabled selected value> -- select an option -- </option>
            @foreach ($Names as $the_name)
                <option>
                    {{ $the_name->Name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <button wire:click='testdata'
            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold
         text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Test Data
        </button>
    </div>

    <div class="overflow-x-auto rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    @foreach ($columns as $column)
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">
                            {{ ucfirst($column) }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @foreach ($rows as $row)
                    @if ($row->Name == $current_Name)
                        <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100 transition">
                            @foreach ($columns as $column)
                                <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                                    {{ $row->$column }}
                                </td>
                            @endforeach
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
