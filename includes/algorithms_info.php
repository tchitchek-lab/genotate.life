<?php

function get_algorithms_info()
{
    $services_info_services = array();
    $services_info_service = array();

    $services_info_service ['color'] = "#6cd975";
    $services_info_service ['name'] = "blast";
    $services_info_service ['score'] = 0;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 1;
    $services_info_service ['type'] = "other";
    $services_info_service ['description'] = "nucleic similarity annotation from transcript region aligned against nucleid references";
    $services_info_services ['BLASTN'] = $services_info_service;

    $services_info_service = array();
    $services_info_service ['color'] = "#c3eb4c";
    $services_info_service ['name'] = "blast";
    $services_info_service ['score'] = 0;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 1;
    $services_info_service ['type'] = "other";
    $services_info_service ['description'] = "protein similarity annotation from encoded protein aligned against protein references";
    $services_info_services ['BLASTP'] = $services_info_service;

    $services_info_service = array();
    $services_info_service ['color'] = "#d13a3a";
    $services_info_service ['name'] = "threshold";
    $services_info_service ['score'] = 0;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 1;
    $services_info_service ['type'] = "coding";
    $services_info_service ['description'] = "TMHMM predicts of transmembrane domains, which fundamentally rule all the membrane biochemical processes, with the hidden Markov models";
    $services_info_services ['TMHMM'] = $services_info_service;

    $services_info_service = array();
    $services_info_service ['color'] = "#d13a3a";
    $services_info_service ['name'] = "threshold";
    $services_info_service ['score'] = 0.5;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 1;
    $services_info_service ['type'] = "noncoding";
    $services_info_service ['description'] = "TRNASCANSE predict tRNA";
    $services_info_services ['TRNASCANSE'] = $services_info_service;

    $services_info_service = array();
    $services_info_service ['color'] = "#d13a3a";
    $services_info_service ['name'] = "threshold";
    $services_info_service ['score'] = 0.5;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 1;
    $services_info_service ['type'] = "noncoding";
    $services_info_service ['description'] = "RNAMMER predict rRNA";
    $services_info_services ['RNAMMER'] = $services_info_service;

    $services_info_service = array();
    $services_info_service ['color'] = "#b8f00e";
    $services_info_service ['name'] = "threshold";
    $services_info_service ['score'] = 0.45;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 1;
    $services_info_service ['type'] = "coding";
    $services_info_service ['description'] = "Predict the secretory signal peptide based on neural networks";
    $services_info_services ['SIGNALP'] = $services_info_service;

    $services_info_service = array();
    $services_info_service ['color'] = "#ebeb1e";
    $services_info_service ['name'] = "threshold";
    $services_info_service ['score'] = 0.2;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 1;
    $services_info_service ['type'] = "coding";
    $services_info_service ['description'] = "Predict arginine and lysine propeptide, which characterize inactive peptides precursors which undergo post translational processing to become biologically active polypeptides";
    $services_info_services ['PROP'] = $services_info_service;

    $services_info_service = array();
    $services_info_service ['color'] = "#ebba1a";
    $services_info_service ['name'] = "threshold";
    $services_info_service ['score'] = 0.5;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 1;
    $services_info_service ['type'] = "coding";
    $services_info_service ['description'] = "Predict C mannosylation sites in mammalian proteins using neural networks";
    $services_info_services ['NETCGLYC'] = $services_info_service;

    $services_info_service = array();
    $services_info_service ['color'] = "#a21be0";
    $services_info_service ['name'] = "threshold";
    $services_info_service ['score'] = 0.5;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 1;
    $services_info_service ['type'] = "coding";
    $services_info_service ['description'] = "Predicts N Glycosylation sites in human proteins using artificial neural networks";
    $services_info_services ['NETNGLYC'] = $services_info_service;

    $services_info_service = array();
    $services_info_service ['color'] = "#f0ab18";
    $services_info_service ['name'] = "threshold";
    $services_info_service ['score'] = 1;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 2;
    $services_info_service ['type'] = "coding";
    $services_info_service ['description'] = "Determine binding site to a specific MHC class I molecule";
    $services_info_services ['MHCI'] = $services_info_service;

    $services_info_service = array();
    $services_info_service ['color'] = "#7d15eb";
    $services_info_service ['name'] = "threshold";
    $services_info_service ['score'] = 1;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 2;
    $services_info_service ['type'] = "coding";
    $services_info_service ['description'] = "Determine binding site to a specific MHC class II molecule";
    $services_info_services ['MHCII'] = $services_info_service;

    $services_info_service = array();
    $services_info_service ['color'] = "#db7b0d";
    $services_info_service ['name'] = "threshold";
    $services_info_service ['score'] = 0.5;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 1;
    $services_info_service ['type'] = "coding";
    $services_info_service ['description'] = "Predict the location of linear B cell epitopes";
    $services_info_services ['BEPIPRED'] = $services_info_service;

    $services_info_service = array();
    $services_info_service ['name'] = "evalue";
    $services_info_service ['score'] = 0.05;
    $services_info_service ['min'] = 0;
    $services_info_service ['max'] = 1;
    $services_info_service ['type'] = "coding";
    $services_info_service ['color'] = "#2917eb";
    $services_info_service ['description'] = "Search annotation based on the Conserved Domain Database";
    $services_info_services ['CDD'] = $services_info_service;

    $services_info_service ['color'] = "#f04116";
    $services_info_service ['description'] = "Predicts coiled coil conformation";
    $services_info_services ['COILS'] = $services_info_service;

    $services_info_service ['color'] = "#2050d6";
    $services_info_service ['description'] = "Search CATH domain families from PDB structures";
    $services_info_services ['GENE3D'] = $services_info_service;

    $services_info_service ['color'] = "#db8fb0";
    $services_info_service ['description'] = "classification and annotation system of protein sequences";
    $services_info_services ['HAMAP'] = $services_info_service;

    $services_info_service ['color'] = "#1c9ce6";
    $services_info_service ['description'] = "Predict long intrinsically disordered regions";
    $services_info_services ['MOBIDBLITE'] = $services_info_service;

    $services_info_service ['color'] = "#ba87d6";
    $services_info_service ['description'] = "Gene ontology classification system, identify the matching family";
    $services_info_services ['PANTHER'] = $services_info_service;

    $services_info_service ['color'] = "#1dc6cf";
    $services_info_service ['description'] = "Search protein families from Pfam database";
    $services_info_services ['PFAM'] = $services_info_service;

    $services_info_service ['color'] = "#a0bdde";
    $services_info_service ['description'] = "Search against fully curated PIRSF families with HMM models";
    $services_info_services ['PIRSF'] = $services_info_service;

    $services_info_service ['color'] = "#1ce3c5";
    $services_info_service ['description'] = "Search for a functional protein fingerprints and identify the matching family";
    $services_info_services ['PRINTS'] = $services_info_service;

    $services_info_service ['color'] = "#7fdbcd";
    $services_info_service ['description'] = "Search for a functional protein domain and identify the matching family";
    $services_info_services ['PRODOM'] = $services_info_service;

    $services_info_service ['color'] = "#11db94";
    $services_info_service ['description'] = "Search protein families and domains based of protein family pattern";
    $services_info_services ['PROSITEPATTERNS'] = $services_info_service;

    $services_info_service ['color'] = "#7ad6a6";
    $services_info_service ['description'] = "Search protein families and domains based of protein family profile";
    $services_info_services ['PROSITEPROFILES'] = $services_info_service;

    $services_info_service ['color'] = "#0ee839";
    $services_info_service ['description'] = "Search enzymes classification in the Structure Function Linkage Database";
    $services_info_services ['SFLD'] = $services_info_service;

    $services_info_service ['color'] = "#82d67c";
    $services_info_service ['description'] = "Simple Modular Architecture Research Tool";
    $services_info_services ['SMART'] = $services_info_service;

    $services_info_service ['color'] = "#67e324";
    $services_info_service ['description'] = "structural and functional annotation for proteins and genomes";
    $services_info_services ['SUPERFAMILY'] = $services_info_service;

    $services_info_service ['color'] = "#bdc46e";
    $services_info_service ['description'] = "identify functionally related proteins based on sequence homology";
    $services_info_services ['TIGRFAM'] = $services_info_service;

    ksort($services_info_services);

    return $services_info_services;
}
