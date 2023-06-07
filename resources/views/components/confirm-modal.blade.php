@props(['dialog_id'])

<dialog id={{$dialog_id}} class="modal modal-bottom sm:modal-middle">
    <form method="dialog" class="modal-box">
        <button for={{$dialog_id}} class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        <h3 class="font-bold text-lg">Are You Confirm?!</h3>
        <p class="py-4">Press ESC key or click the button below to close</p>
        <div class="modal-action">
            <!-- if there is a button in form, it will close the modal -->
            <button class="btn">Close</button>
        </div>
    </form>
</dialog>