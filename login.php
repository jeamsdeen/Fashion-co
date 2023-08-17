<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<link rel="stylesheet" href="css/login.css">
        <div class="tabs">
            <button class="tab active-tab" onclick="showForm('signin')">CONNEXION</button>
            <button class="tab" onclick="showForm('signup')">INSCRIPTION</button>
        </div>

        <div class="button-container">
            <button type="button"> <img src="img/fb.png" height="10" width="10" /> Continuer avec Facebook</button>
        </div>
        <div class="button-containerG">
            <button type="button"> <img src="img/google.png" height="10" width="10" /> Continuer avec Google</button>
        </div>


<div class="container">

    <div id="signin">
        <form action="/signin" method="post">
            <div class="form-group">
               
                <label for="signin-username" class="visually-hidden">Email:</label>
                <input type="text" id="signin-username" name="username" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="signin-password" class="visually-hidden">Mot de passe:</label>
                <input type="password" id="signin-password" name="password" placeholder="Mot de passe" required>
            </div>
            <div class="form-group">
                <input type="submit" value="CONNEXION">
            </div>
        </form>
    </div>

    <div id="signup" style="display: none;">
        <form action="/signup" method="post">
            <div class="form-group">
                <label for="signin-username" class="visually-hidden">Nom:</label>
                <input type="text" id="signin-username" name="username" placeholder="Nom" required>
            </div>
            <div class="form-group">
                <label for="signup-password" class="visually-hidden">Prénom:</label>
                <input type="password" id="signup-password" name="password" placeholder="Prénom" required>
            </div>
            <div class="form-group">
                <label for="signup-confirm-password" class="visually-hidden">Email:</label>
                <input type="password" id="signup-confirm-password" name="confirm-password" placeholder="Email" required>
            </div>
        <div class="form-group">
            <label for="signin-password" class="visually-hidden">Mot de passe:</label>
            <input type="password" id="signin-password" name="password" placeholder="Mot de passe" required>
        </div>
    <div class="form-group">
        <label for="signin-password" class="visually-hidden">Confirmer mot de passe:</label>
        <input type="password" id="signin-password" name="password" placeholder="Confirmer mot de passe" required>
    </div>
            <div class="form-group">
                <input type="submit" value="INSCRIPTION">
            </div>
        </form>
    </div>
</div>

<script>
    function showForm(formId) {
        document.getElementById('signin').style.display = 'none';
        document.getElementById('signup').style.display = 'none';
        document.getElementById(formId).style.display = 'block';

        let tabs = document.querySelectorAll('.tab');
        for (let tab of tabs) {
            tab.classList.remove('active-tab');
        }
        if (formId === 'signin') {
            tabs[0].classList.add('active-tab');
        } else {
            tabs[1].classList.add('active-tab');
        }
    }
</script>

<?php include 'footer.php'; ?>