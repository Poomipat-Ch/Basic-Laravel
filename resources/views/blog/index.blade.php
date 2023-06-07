<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Job</th>
                                    <th>Favorite Color</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                <tr class="hover">
                                    <th>1</th>
                                    <td>Cy Ganderton</td>
                                    <td>Quality Control Specialist</td>
                                    <td>Blue</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline btn-success mx-1">Edit</button>
                                        <button class="btn btn-sm btn-outline btn-error mx-1">Delete</button>
                                    </td>
                                </tr>
                                <!-- row 2 -->
                                <tr class="hover">
                                    <th>2</th>
                                    <td>Hart Hagerty</td>
                                    <td>Desktop Support Technician</td>
                                    <td>Purple</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline btn-success mx-1">Edit</button>
                                        <button class="btn btn-sm btn-outline btn-error mx-1">Delete</button>
                                    </td>
                                </tr>
                                <!-- row 3 -->
                                <tr class="hover">
                                    <th>3</th>
                                    <td>Brice Swyre</td>
                                    <td>Tax Accountant</td>
                                    <td>Red</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline btn-success mx-1" onclick="edit_modal.showModal()">Edit</button>
                                        <button class="btn btn-sm btn-outline btn-error mx-1">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Model Edit -->
                        <dialog id="edit_modal" class="modal modal-bottom sm:modal-middle" oncancel="">
                            <form method="dialog" class="modal-box">
                                <h3 class="font-bold text-lg">Hello!</h3>
                                <p class="py-4">Press ESC key or click the button below to close</p>
                                <div class="modal-action">
                                    <!-- if there is a button in form, it will close the modal -->
                                    <button class="btn">Close</button>
                                </div>
                            </form>
                        </dialog>
                        <x-confirm-modal dialog_id="confirm_edit" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>