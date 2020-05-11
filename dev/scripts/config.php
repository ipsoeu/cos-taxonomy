<?php

  define("ABS_PATH","/cos-taxonomy/");
  define("ROOT","../../");
//  define("BASE_URI","http://localhost/cos-taxonomy/");
//  define("BASE_URI","https://ipsoeu.github.io/cos-taxonomy/");
  define("BASE_URI","https://w3id.org/ipsoeu/cos-taxonomy/");
  define("TOOL_ACRONYM","CoS Taxonomy");
  define("TOOL_NAME","European Taxonomy for Public Services");
  define("ABOUT_URL","https://github.com/ipsoeu/cos-taxonomy");
  define("ABOUT_TEXT","CoS Taxonomy is an experimental Linked Data implementation of the taxonomy for public services developed in the framework of the Catalogue of Services Action of the EU ISA² Programme.");
  define("PUBLISHER_NAME","European Commission");
  define("PUBLISHER_URL","http://publications.europa.eu/resource/authority/corporate-body/COM");
  define("LICENCE_NAME","CC-BY 4.0");
  define("LICENCE_URL","http://creativecommons.org/licenses/by/4.0/");
  define("SKOS_TO_HTML","../xslt/skos2html.xsl");

//  $abs_path = parse_url(BASE_URI, PHP_URL_PATH);

  $formats["html"]["code"] = "format_html";
  $formats["html"]["label"] = "HTML";
  $formats["html"]["mdr"] = "HTML";
  $formats["html"]["iana"] = "text/html";

  $formats["rdf"]["code"] = "format_rdf";
  $formats["rdf"]["label"] = "RDF/XML";
  $formats["rdf"]["mdr"] = "RDF_XML";
  $formats["rdf"]["iana"] = "application/rdf+xml";
  
//  formats["ttl"]["code"] = "format_ttl";
//  formats["ttl"]["label"] = "Turtle";
//  formats["ttl"]["mdr"] = "RDF_TURTLE";
//  formats["ttl"]["iana"] = "text/turtle";

//  formats["jsonld"]["code"] = "format_jsonld";
//  formats["jsonld"]["label"] = "JSON-LD";
//  formats["jsonld"]["mdr"] = "JSON_LD";
//  formats["jsonld"]["iana"] = "application/ld+json";

//  formats["nt"]["code"] = "format_nt";
//  formats["nt"]["label"] = "N-Triples";
//  formats["nt"]["mdr"] = "RDF_N_TRIPLES";
//  formats["nt"]["iana"] = "application/n-triples";

//  formats["n3"]["code"] = "format_n3";
//  formats["n3"]["label"] = "N3";
//  formats["n3"]["mdr"] = "N3";
//  formats["n3"]["iana"] = "text/n3";

//  formats[""]["code"] = "";
//  formats[""]["label"] = "";
//  formats[""]["mdr"] = "";
//  formats[""]["iana"] = "";

  foreach ($formats as $k => $v) {
    $formats[$k]["title"] = $formats[$k]["label"] . " representation";
    $formats[$k]["description"] = $formats[$k]["label"] . " representation";
  }

  $claset  = "pattern";
  $version = "2019";
//  $claset  = "theme";
//  $version = "2019";
  $claset  = "life-event";
  $version = "2019";
//  $claset  = "business-event";
//  $version = "2019";

  $dataset["pattern"]["id"] = "pattern";
//  $dataset["pattern"]["isdefinedby"] = "https://joinup.ec.europa.eu/sites/default/files/news/2019-09/ISA2_European%20taxonomy%20for%20public%20services.pdf";
  $dataset["pattern"]["name"] = "Public services patterns";
  $dataset["pattern"]["description"] = "Public services patterns";
  $dataset["pattern"]["versions"] = array("2019");
/*
  $dataset["pattern"]["2019"]["issued"] = "2019-09-04";
  $dataset["pattern"]["2019"]["validfrom"] = "2019-09-04";
  $dataset["pattern"]["2019"]["validuntil"] = "";
*/
  $dataset["theme"]["id"] = "theme";
//  $dataset["theme"]["isdefinedby"] = "https://joinup.ec.europa.eu/sites/default/files/news/2019-09/ISA2_European%20taxonomy%20for%20public%20services.pdf";
  $dataset["theme"]["name"] = "Public services themes";
  $dataset["theme"]["description"] = "Public services themes";
  $dataset["theme"]["versions"] = array("2019");
/*
  $dataset["theme"]["2019"]["issued"] = "2019-09-04";
  $dataset["theme"]["2019"]["validfrom"] = "2019-09-04";
  $dataset["theme"]["2019"]["validuntil"] = "";
*/
  $dataset["life-event"]["id"] = "life-event";
//  $dataset["life-event"]["isdefinedby"] = "https://joinup.ec.europa.eu/sites/default/files/news/2019-09/ISA2_European%20taxonomy%20for%20public%20services.pdf";
  $dataset["life-event"]["name"] = "Life events";
  $dataset["life-event"]["description"] = "Life events";
  $dataset["life-event"]["versions"] = array("2019");
  
  $dataset["business-event"]["id"] = "business-event";
//  $dataset["business-event"]["isdefinedby"] = "https://joinup.ec.europa.eu/sites/default/files/news/2019-09/ISA2_European%20taxonomy%20for%20public%20services.pdf";
  $dataset["business-event"]["name"] = "Business events";
  $dataset["business-event"]["description"] = "Business events";
  $dataset["business-event"]["versions"] = array("2019");
  
  $xsluri["rdf2html"] = SKOS_TO_HTML;

  $src_uri["pattern"]["2019"]["csv"] = '../src/pattern-2019.csv';
  $src_uri["theme"]["2019"]["csv"] = '../src/theme-2019.csv';
  $src_uri["life-event"]["2019"]["csv"] = '../src/life-event-2019.csv';
  $src_uri["business-event"]["2019"]["csv"] = '../src/business-event-2019.csv';

?>
