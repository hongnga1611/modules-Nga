<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1812">
    <div class="container">
        <div class="row pt-2 text-center">
            <div class="col-md-4 col-sm-6 col-12">
                <h2>
                    Get in touch - we are open for new projects!
                </h2>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="content">
                    <p>
                        Curabitur et mattis ante. Maecenas sit amet commodo tellus. Phasellus fermentum pretium eros, ut faucibus velit auctor eget!
                    </p>
                </div>

            </div>

            <div class="col-md-4 col-sm-12 col-12">
                <a class="d-flex font-weight-bold justify-content-center mess py-2" href="#">
                    <span class="">Get a quote online</span>
                    <i class="fas fa-comments-dollar ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>