<?php require_once '../Bonnefete/src/App/Views/head.php'; ?>

<?php if (isset($_SESSION['users'])) :  ?>
  <div class="container">
    <div class="w-full h-full home-page">
      <a href="/Bonnefete/post/CreateComment/<?php echo $posts['id']; ?>"><img src="/Bonnefete/src/public/assets/icon/icons8-new-post-96.png" alt=""></a>


      <div class="w-3/5 card">
        <div class="card-header">
          <div class="card-user">
            <img class="card-img" src="/Bonnefete/src/public/assets/images/photo-avatar-profil.png" alt="">
            <h3><?php echo $posts['name'] . ' ' . $posts['surname']; ?></h3>
          </div>
          <h3><?php echo $posts['title']; ?></h3>
          <p><?php echo $posts['created_at']; ?></p>
        </div>
        <div class="card-body">
          <p><?php echo $posts['article']; ?></p>
        </div>
        <div class="flex card-footer">
          <div class="flex card-footer-left">
            </form>
          </div>
        </div>
      </div>
      <h1 class="font-black text-neutral-900 text-center text-4xl">Commentaires</h1>

      <?php foreach ($comments as $comment) : ?>
        <div class="w-3/5 card">
          <div class="card-header">
            <div class="card-user">
              <img class="card-img" src="/Bonnefete/src/public/assets/images/photo-avatar-profil.png" alt="">
              <h3><?php echo $comment['name'] . ' ' . $comment['surname']; ?></h3>
            </div>
            <p><?php echo $comment['created_at']; ?></p>
          </div>
          <div class="card-body">
            <p><?php echo $comment['article']; ?></p>
          </div>
          <div class="flex card-footer">
            <div class="flex card-footer-left">
              </form>
            </div>
          </div>
        </div>

      <?php endforeach ?>
    <?php else : ?>
      <h1>Vous devez être connecté pour accéder à cette page</h1>
      <a href="../user/login">Se connecter</a>
    <?php endif; ?>
    <?php require_once '../Bonnefete/src/App/Views/foot.php'; ?>
