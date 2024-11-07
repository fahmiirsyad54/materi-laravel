<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">Nama Kelas</th>
                    <th class="py-2 px-4 border-b">Nama Siswa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grades as $grade)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b">{{ $grade->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $grade->name }}</td>
                        <td class="py-2 px-4 border-b">
                            @foreach ($grade->students as $student)
                                <ul>
                                    <li>{{ $student->name }}</li>
                                </ul>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    {{-- <div id="modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="fixed inset-0 bg-black opacity-50"></div>
        <div class="bg-white rounded-lg shadow-lg p-6 z-10 max-w-md w-full">
            <h2 class="text-xl font-bold mb-4" id="modal-title">Detail Siswa</h2>
            <p id="modal-name" class="mb-2"></p>
            <p id="modal-email" class="mb-2"></p>
            <p id="modal-telepon" class="mb-4"></p>
            <button id="closeModal" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                Close
            </button>
        </div>
    </div>

    <script>
        function openModal(name, email, telepon) {
            document.getElementById('modal-name').textContent = 'Nama: ' + name;
            document.getElementById('modal-email').textContent = 'Email: ' + email;
            document.getElementById('modal-telepon').textContent = 'Telepon: ' + telepon;
            document.getElementById('modal').classList.remove('hidden');
        }

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
        });
    </script> --}}

</x-layout>
