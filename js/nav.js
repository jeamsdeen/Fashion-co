const createNav =() =>
{
    let nav = document.querySelector('.navbar');

    nav.innerHTML= `
    <div class="nav"><a href="index.php">
    <img class="brand-logo" src="img/dark-logo.png" href="index.php"></a>
    <div class="nav-items">
       <a href="#"><img src="img/notif.png"></a>
       <a href="#"><img src="img/blog.png" ></a>  
   <a href="login.php"><img src="img/user.png" alt="userimage"></a>     
   <a href="#"><img src="img/cart.png" alt="cardimage"></a>    

  
</div>

</div>

    `;
}

createNav();