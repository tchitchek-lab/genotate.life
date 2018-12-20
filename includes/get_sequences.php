<?php

function get_regions($name, $analysis_id, $transcript_name, $relative_region_id)
{
    $path = $_SERVER['DOCUMENT_ROOT'] . "../workspace/storage/{$analysis_id}/regions_nucl_id.fasta";
    if (!file_exists($path)) {
        die ("File not found $path");
    }

    $file_handle = fopen($path, "r");
    $i = 0;
    while (!feof($file_handle)) {
        if ($i == $relative_region_id) {
            break;
        }
        fgets($file_handle);
        fgets($file_handle);
        $i++;
    }

    $text = "";
    if (!feof($file_handle)) {
        fgets($file_handle);
        if ($name) {
            $text .= ">$transcript_name dataset_$analysis_id region_$relative_region_id\n";
        }
        $text .= fgets($file_handle);
    }
    fclose($file_handle);

    return ($text);
}

function get_transcripts($name, $analysis_id, $transcript_name, $relative_transcript_id)
{
    $path = $_SERVER['DOCUMENT_ROOT'] . "../workspace/storage/".$analysis_id."/transcripts.fasta";

    if (!file_exists($path)) {
        die ("File not found $path");
    }

    $file_handle = fopen($path, "r");
    $i = 0;
    while (!feof($file_handle)) {
        if ($i == $relative_transcript_id) {
            break;
        }
        fgets($file_handle);
        fgets($file_handle);
        $i++;
    }

    $text = "";
    if (!feof($file_handle)) {
        fgets($file_handle);
        if ($name) {
            $text .= ">$transcript_name dataset_$analysis_id transcript_$relative_transcript_id\n";
        }
        $text .= fgets($file_handle);
    }
    fclose($file_handle);

    return ($text);
}

function get_proteins($name, $analysis_id, $transcript_name, $relative_region_id)
{
    $path = $_SERVER['DOCUMENT_ROOT'] . "../workspace/storage/{$analysis_id}/regions_prot_id.fasta";
    if (!file_exists($path)) {
        die ("File not found $path");
    }
    $file_handle = fopen($path, "r");
    $parser = FALSE;
    $text = "";
    while (!feof($file_handle)) {
        $line = fgets($file_handle);
        if (substr_count($line, ">") > 0) {
            if ($parser == TRUE) {
                break;
            }
            $region_id_tmp = ( int )substr($line, 1);
            if ($region_id_tmp == $relative_region_id) {
                $parser = TRUE;
                if ($name) {
                    $text .= ">$transcript_name dataset_$analysis_id region_$relative_region_id\n";
                }
            }
        } else if ($parser == TRUE) {
            $text .= $line;
        }
    }
    fclose($file_handle);
    return ($text);
}

function get_annotations($analysis_id, $transcript_name, $region_id, $connexion)
{
    $request = "SELECT * FROM annotation WHERE analysis_id =\"" . $analysis_id . "\" AND region_id =\"" . $region_id . "\"";
    $results = mysqli_query($connexion, $request) or die ("SQL Error:<br>$request<br>" . mysqli_error($connexion));
    $text = '';
    while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
        $text .= $transcript_name . "\t" . $region_id . "\t" . $row ['service'] . "\t" . $row ['name'] . "\t" . $row ['begin'] . "\t" . $row ['end'] . "\t" . $row ['description'] . "\n";
    }
    return ($text);
}
