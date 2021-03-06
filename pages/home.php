<link rel="stylesheet" type="text/css" href="/css/genotate.css">

<div style="display: block;float: none;margin: auto;text-align: center">
    <label class="title_genotate">Genotate</label>
    <br>
    <label style='font-size: 20px;'>
        annotating and exploring transcript sequences
    </label>
</div>

<br>

<p style='font-size: 16px; text-align: justify; text-justify: inter-word;'>
    The Genotate platform is a web-based interactive environment to automatically annotate transcript sequences. Annotations can be predicted based on sequence homology and structural analyses at both the nucleic and amino acid levels. Genotate aims to provide a way for bioinformaticians, systems biologists, and experimental biologists a way to unify transcriptomic information obtained from multiple predictive algorithms and databases.
</p>
<p style='font-size: 16px; text-align: justify; text-justify: inter-word;'>
    You can access to a restricted administration interface using the lock icon in the top menu (login:demo, password demo).
</p>

<br>

<div class="div-border-title" style='width: 100%;'>Genotate functionalities</div>
<div class="div-border" style='width: 100%;'>
    <div style='width: 100%; margin-top: 2px;'>
        <div style='min-width: 209px; width:50%;padding: 2px;' data-toggle="tooltip" data-placement="bottom"
             title="<?php echo $tooltip_text['tt_home_annotate_single']; ?>">
            <a href="/index.php?page=annotate_single" class='btn btn-primary'>
                <img src="/img/seq.svg" style='height: 30px; filter: invert(90%);'>
                <br><br>Annotate a single transcript
            </a>
        </div>
        <div style='min-width: 209px; width:50%;padding: 2px;' data-toggle="tooltip" data-placement="bottom"
             title="<?php echo $tooltip_text['tt_home_annotate_multiple']; ?>">
            <a href="/index.php?page=annotate_multiple" class='btn btn-primary'>
                <img src="/img/seq.svg" style='height: 30px; filter: invert(90%);'><img src="/img/seq.svg"
                                                                                        style='height: 30px; filter: invert(100%);'>
                <br><br>Annotate multiple transcripts
            </a>
        </div>
        <div style='min-width: 209px; width:50%;padding: 2px;' data-toggle="tooltip" data-placement="bottom"
             title="<?php echo $tooltip_text['tt_home_manage_results']; ?>">
            <a href="/index.php?page=view_annotations" class='btn btn-primary'>
                <img src="/img/database.svg" style='height: 30px; filter: invert(90%);'>
                <br><br>View annotation results
            </a>
        </div>
		        <div style='min-width: 209px; width:50%;padding: 2px;' data-toggle="tooltip" data-placement="bottom"
             title="<?php echo $tooltip_text['tt_home_explore_results']; ?>">
            <a href="/index.php?page=explore_annotations" class='btn btn-primary'>
                <img src="/img/search.svg" style='height: 30px; filter: invert(90%);'>
                <br><br>Explore annotation results
            </a>
        </div>
        <div style='min-width: 209px; width:50%;padding: 2px;' data-toggle="tooltip" data-placement="bottom"
             title="<?php echo $tooltip_text['tt_home_tutorial']; ?>">
            <a href="/index.php?page=tutorial" class='btn btn-primary'>
                <img src="/img/tutorial.svg" style='height: 30px; filter: invert(90%);'>
                <br><br>Help and tutorial
            </a>
        </div>
        <div style='min-width: 209px; width:50%;padding: 2px;' data-toggle="tooltip" data-placement="bottom"
             title="<?php echo $tooltip_text['tt_home_about']; ?>">
            <a href="/index.php?page=about" class='btn btn-primary'>
                <img src="/img/about.svg" style='height: 30px; filter: invert(90%);'>
                <br><br>About
            </a>
        </div>
    </div>
</div>

<script>
    document.title = "Genotate.life - Home";
</script>
