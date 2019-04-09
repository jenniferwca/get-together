<?php
$pagetitle = $event->getTitle() . ' - Event';
include('header.php');
?>

<main class="events__container">
  <header>
    <h1 class="display-4 text-center"><span class="heading-style"><?= $event->getTitle() ?></span></h1>
  </header>
  <div class="row container justify-content-end">
    <a href=".?action=show_update_form&id=<?= $event->getId() ?>" class="btn btn-sm btn-outline-primary">Update</a>
    <a href="." class="btn btn-sm btn-outline-primary">Go to event list</a>
  </div>
  <div id="event-detail-main" class="container">
    <div class="event-description container text-center pt-3 px-3"><?= $event->getDescription() ?></div>
    <div class="container event-detail p-3">
      <div class="d-flex justify-content-between">
        <div class="ml-5">Venue: <em><?= $event->getLocation() ?></em></div>
        <div class="mr-5">Date: <em><?= $event->getDate() ?></em></div>
      </div>
      <div class="d-flex justify-content-between">
        <div class="ml-5">Start Time: <em><?= $event->getStartTimeDisp() ?></em></div>
        <div class="mr-5">End Time: <em><?= $event->getEndTimeDisp() ?></em></div>
      </div>
    </div>
  </div>

  <div class="card-deck mx-4 d-flex justify-content-center">
    <div class="card col-1">
      <img src="/Content/Images/guest_list.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <h6 class="card-title text-center">Guest List</h6>
      </div>
    </div>
    <div class="card col-1">
      <img src="/Content/Images/to-do-list.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title text-center">To-Do List</h6>
      </div>
    </div>
    <div class="card col-1">
      <img src="/Content/Images/food.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title text-center">Food List</h6>
      </div>
    </div>
    <div class="card col-1">
      <img src="/Content/Images/drink.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title text-center">Drink List</h6>
      </div>
    </div>
    <div class="card col-1">
      <img src="/Content/Images/poll.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title text-center">Poll</h6>
      </div>
    </div>
    <div class="card col-1">
      <img src="/Content/Images/fund_pool.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title text-center">Fund Pool</h6>
      </div>
    </div>
    <div class="card col-1">
      <img src="/Content/Images/car.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title text-center">Carpool</h6>
      </div>
    </div>
    <div class="card col-1">
      <img src="/Content/Images/playlist.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title text-center">Music Playlist</h6>
      </div>
    </div>
  </div>

</main>

<?php include('footer.php') ?>