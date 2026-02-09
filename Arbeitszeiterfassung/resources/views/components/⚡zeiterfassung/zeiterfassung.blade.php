<div class="p-6">



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
                    <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100 transition">

                        @foreach ($columns as $column)
                            <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                                {{ $row->$column }}
                            </td>
                        @endforeach

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
