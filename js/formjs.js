function validateForm() {
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById('prenom').value;
    var mail = document.getElementById('mail').value;
    var mdp = document.getElementById('mdp').value;
    var mdp2 = document.getElementById('mdp2').value;
    var majminus = /^(?=.*[a-z])(?=.*[A-Z])[a-zA-Z ]+$/;
    var chiffre = /^\d+$/;
    var majuscules = /[A-Z]/;
        
    if (nom == '' || nom.length < 3 || nom.length > 100 || !majminus.test(nom)) {
        document.getElementById('nom').style.borderColor = 'red';
        return false;
    } else {
        document.getElementById('nom').style.borderColor = 'green'
    }

    if (prenom == '' || prenom.length < 3 || prenom.length > 100 || !majminus.test(prenom)) {
        document.getElementById('prenom').style.borderColor = 'red';
        return false;
    } else {
        document.getElementById('prenom').style.borderColor = 'green';
    }
    
    if (mail === '' || mail.length < 3 || mail.length > 100 || majuscules.test(mail) || !mail.includes('@')) {
        document.getElementById('mail').style.borderColor = 'red';
        return false;
    } else {
        document.getElementById('mail').style.borderColor = 'green';
    }
    
    if (mdp == mdp2)
    document.getElementById('mdp2').style.borderColor = 'green';
     else {
    document.getElementById('mdp2').style.borderColor = 'red';
    return false;
     }
}

