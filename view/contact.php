<div class="row" style="padding: 20px">
    <div class="d-flex justify-content-center">
        <h5>Me contacter</h5>
    </div>
    <div class="text-center">
        <form>
            <div class="mb-3">
                <label for="Email" class="form-label">Votre adresse email</label>
                <input type="email" class="form-control" id="Email">
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Votre message</label>
                <input type="password" class="form-control" id="Password">
            </div>
            <button type="button" class="btn btn-primary col-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Envoyer
            </button>
        </form>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nous contacter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Votre message a bien été envoyé !
                </div>
            </div>
        </div>
    </div>
</div>