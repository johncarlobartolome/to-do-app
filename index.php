<?php include 'includes/header.php' ?>
    <section class="view-selector">
        <button class="day-view-btn active">Day</button>
        <button class="week-view-btn">Week</button>
    </section>
    <section class="date-navigation">
        <section class="day-view">
            <a class="date-nav-controls" href=""><img src="img/left-arrow.svg" alt="Previous" width="25px" height="25px"></a>
            <section class="current-date">
                <h3 class="long-date">Oct 06, 2019</h3>
                <h1 class="current-day">SUNDAY</h1>
            </section>
            <a class="date-nav-controls" href=""><img src="img/right-arrow.svg" alt="Next" width="25px" height="25px"></a>
        </section>
        <section class="week-view">
            <section class="current-date">
                <section class="current-date-container">
                    <a class="date-nav-controls" href=""><img src="img/left-arrow.svg" alt="Previous" width="20px" height="20px"></a>
                    <h3 class="week-span">Oct 06 - Oct 12</h3>
                    <a class="date-nav-controls" href=""><img src="img/right-arrow.svg" alt="Next" width="20px" height="20px"></a>
                </section>
                <div class="btn-container">
                    <button class="week-view-btn active">SUN</button>
                    <button class="week-view-btn">MON</button>
                    <button class="week-view-btn">TUE</button>
                    <button class="week-view-btn">WED</button>
                    <button class="week-view-btn">THU</button>
                    <button class="week-view-btn">FRI</button>
                    <button class="week-view-btn">SAT</button>
                </div>
            </section>
        </section>
    </section>
    <section class="input-box">
        <form class="form-add-item" action="#">
            <input type="text" placeholder="Add an item">
            <button type='submit'><img src="img/add.svg" alt="Add" width="25px" height="25px"></button>
        </form>
    </section>
    <hr>
    <section class="item-container">
        <h1>None</h1>
    </section>
    <div>Icons made by <a href="https://www.flaticon.com/authors/roundicons" title="Roundicons">Roundicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/google" title="Google">Google</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script/script.js"></script> -->
</body>

</html>