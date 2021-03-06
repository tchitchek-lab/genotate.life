<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/tooltips.php");

function display_annotation_results($row){
include($_SERVER['DOCUMENT_ROOT'] . "/includes/tooltips.php");


    ?>

<script>
function set_analysis_permanent(analysis_id){
    const xhr = new XMLHttpRequest();
    const get = '/includes/set_analysis_permanent.php?analysis_id=' + analysis_id;
    xhr.open('GET', get);
    xhr.send(null);
}
</script>
<label type=title>Results of the annotation analysis</label>
<br>You can see below the annotation results for your submitted dataset. An annotation sequence viewer is available for each detected ORF or potential ncRNA to represent the positions of identifed functional and homology annotations.
<br>
<br>
<label data-toggle="tooltip" data-placement="top" title="<?php echo $tooltip_text['keep_permanent']; ?>" 
 class='btn btn-default <?php if($row['is_permanent'] == 1){echo 'active';} ?>' style ='float:left;width:100%;' 
 onclick="set_analysis_permanent('<?php echo $row['analysis_id']; ?>');this.classList.add('active');">Keep the results permanently available</label>
<br>
<br>
<form action='/index.php?page=view_annotations&encoded_id=<?php echo $_GET['encoded_id']; ?>' method='post' id='search' name='search'>
    <input type='hidden' name='dataset' id='dataset' value='<?php echo $row['analysis_id']; ?>'>
    <!--<input type='hidden' name='myseq' id='myseq' value=' echo $row['myseq']; '>-->
    <input type='hidden' name='activepage' id='activepage' value='<?php if(isset($_POST['activepage'])){echo $_POST['activepage'];}else{echo "1";}; ?>'>
    <!--<input type='hidden' name='call_jq' id='call_jq' value='call_jq'>-->
    <input type='hidden' name='zoom_ratio' id='zoom_ratio' value='1000'>
    <input type='hidden' name='coding_only_filter' id='coding_only_filter' value='<?php if(isset($_POST['coding_only_filter'])){echo $_POST['coding_only_filter'];}else{echo "false";}; ?>'>
    <input type='hidden' name='noncoding_only_filter' id='noncoding_only_filter' value='<?php if(isset($_POST['noncoding_only_filter'])){echo $_POST['noncoding_only_filter'];}else{echo "false";}; ?>'>
    <input type='hidden' name='annotated_only_filter' id='annotated_only_filter' value='<?php if(isset($_POST['annotated_only_filter'])){echo $_POST['annotated_only_filter'];}else{echo "false";}; ?>'>
    <button id="submit_search_form" style="display: none;"></button>
</form>

<?php if ($row['nb_transcripts'] == "1") { ?>
        <div id="display_regions_div" style='width: 100%;margin-bottom:5px;'>

            <script>
            document.getElementById('zoom_ratio').value = document.getElementById('content').offsetWidth - 4;
            $.post("/includes/display_transcripts.php",
                $('#search').serialize(),
                function (data,status) {
                    $("#display_regions_div").html("");
                    $('#display_regions_div').append(data);
                }
            );
        </script>
    </div>
<?php }
?>

<div id="search_display_div" name="search_display_div" style='width: 100%'>
    <script>
        $.post("/includes/search_display.php",
            $('#search').serialize(),
            function (data,status) {
                $("#search_display_div").html("");
                $('#search_display_div').append(data);
            }
        );

    </script>
</div>


<?php
}
?>