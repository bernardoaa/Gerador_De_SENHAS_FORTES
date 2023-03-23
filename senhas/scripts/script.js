function generatePassword() {
    const length = document.getElementById('length').value;
    const uppercase = document.getElementById('uppercase').checked;
    const numbers = document.getElementById('numbers').checked;
    const symbols = document.getElementById('symbols').checked;
  
    let chars = 'abcdefghijklmnopqrstuvwxyz';
    if (uppercase) chars += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if (numbers) chars += '0123456789';
    if (symbols) chars += '!@#$%^&*()_+{}:"<>?-=[]\\;\',./`~';
  
    let password = '';
    for (let i = 0; i < length; i++) {
      password += chars[Math.floor(Math.random() * chars.length)];
    }
  
    document.getElementById('password').value = password;
  }
  