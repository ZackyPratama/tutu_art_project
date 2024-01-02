<section class="section__container craft__container" id="craft">
    <!-- <div class="craft__content">
            <h2 class="section__header"> </h2>
            <p class="section__subheader">
            
            </p>
            <button class="btn">Explore</button>
        </div> -->
    <?php foreach ($gallery as $gl): ?>
        <div class="craft__image">
            <div class="craft__image__content">

                <img src="<?= base_url('uploads/') . $gl['gambar']; ?>" style="width: 100px;" class="img-thumbnail" />
                <p>
                    <?= $gl['nama']; ?>
                </p>
                <h4>
                    <?= $gl['kategori']; ?>
                </h4>
            </div>
            <a href="#"><i class="ri-add-line"></i></a>

        </div>
    <?php endforeach; ?>
</section>