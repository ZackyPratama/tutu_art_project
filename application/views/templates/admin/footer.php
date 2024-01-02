</div>
<script src="<?= base_url('assets/')?>admin/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/')?>admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/')?>admin/assets/js/sidebarmenu.js"></script>
<script src="<?= base_url('assets/')?>admin/assets/js/app.min.js"></script>
<script src="<?= base_url('assets/')?>admin/assets/libs/simplebar/dist/simplebar.js"></script>
<script>
$('.custom-file-input').on('change', function() {
let fileName = $(this).val().split('\\').pop();
$(this).next('.custom-file-label').addClass("selected").html(fileName);
})
</script>
</body>

</html>