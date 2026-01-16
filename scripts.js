const signUpButton = document.getElementById("signUpButton");
const signInButton = document.getElementById("signInButton");
const signUpForm = document.getElementById("signUp");
const signInForm = document.getElementById("signIn");

signUpButton.onclick = () => {
    signInForm.style.display = "none";
    signUpForm.style.display = "block";
};

signInButton.onclick = () => {
    signUpForm.style.display = "none";
    signInForm.style.display = "block";
};
