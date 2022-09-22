function button(){
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    const success = document.getElementById('success');
    const danger = document.getElementById('danger');

    if(username.value === '' || password.value === ''){
        danger.style.display = 'block';
    }
    else{
        setTimeout(() => {
            username.value = 'atuny0';
            password.value = '9uQFF1Lh';
        }, 2000);

        success.style.display = 'block';
    }
}
