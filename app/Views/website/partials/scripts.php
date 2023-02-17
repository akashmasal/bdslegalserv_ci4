<!-- jQuery Frameworks
    ============================================= -->
<script src="<?= base_url(); ?>/assets/website/js/jquery.js"></script>
<script>
    $(document).ready(function(){
        $("#career_form").submit(function(e){
            e.preventDefault();
            $.ajax({
                url : "<?= base_url('/career');?>",
                type : "POST",
                data : $(this).serialize(),
                dataType : "json",
                success : function(data){
                    console.log(data);
                },
                error : function(data){
                    console.log(data);
                }
            })
        })
    });
</script>
<script>
    $(document).ready(function(){
        $("#contact_form").submit(function(e){
            e.preventDefault();
            $.ajax({
                url : "<?= base_url('/contact-us');?>",
                type : "POST",
                data : $(this).serialize(),
                dataType : "json",
                success : function(data){
                    console.log(data);
                },
                error : function(data){
                    console.log(data);
                }
            })
        })
    });
</script>
<script src="<?= base_url(); ?>/assets/website/js/plugins.min.js"></script>
<script src="<?= base_url(); ?>/assets/website/js/main.js"></script>

</body>

</html>