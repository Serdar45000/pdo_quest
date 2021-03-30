    <section>
    <h1>Wanna be my new best friend ? </h1>

    <?php if(!empty($errors)) : ?>
        <ul>
            <?php foreach($errors as $error) : ?>
                <li class="error"><?= $error ?></li>
            <?php endforeach; ?>
            </ul>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="firstname"> First Name : </label>
        <input type="text" name="firstname" id="firstname" required> 
        <label for="lastname"> Last Name : </label>
        <input type="text" name="lastname" id="lastname" required> 
        <button> Send </button>
    
    </form>
</section>
