<div class="row">
    <div class="col-md-8 offset-md-2" id="form_container">
        <h2>Me contacter</h2>
        <form method="post" id="sendEmail">

            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="message">
                        Message:</label>
                    <textarea class="form-control" name="message" id="message" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">
                        Votre nom:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-default pull-right" >Envoyer →</button>
                </div>
            </div>

        </form>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Votre message a bien été envoyé !</h3>
        </div>
        <div id="error_message"
             style="width:100%; height:100%; display:none; ">
            <h3>Erreur</h3>
            Désolé, une erreur c'est produite.

        </div>
    </div>
</div>