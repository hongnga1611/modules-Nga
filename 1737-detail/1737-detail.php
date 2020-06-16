<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1737">
    <div class="container">
        <div class="top-1737 text-center">
            <h2>
                What we can offer
            </h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-6 col-ms-12">
                <div class="content d-flex">
                    <span>
                        <i class="fas fa-comments-dollar ml-2 p-3"></i>
                    </span>
                    <div class="box-content pl-4">
                        <h3>
                            Nec ullamcorper mattis
                        </h3>
                        <p>
                            Ut elit tellus - luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem dolor sit amet, consectetur.
                        </p>
                    </div>
                </div>
                <div class="content d-flex">
                    <span>
                        <i class="fas fa-comments-dollar ml-2 p-3"></i>
                    </span>
                    <div class="box-content pl-4">
                        <h3>
                            Consectetur elit
                        </h3>
                        <p>
                            Ipsum dolor sit amet. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo nulla.
                        </p>
                    </div>
                </div>
                <div class="content d-flex">
                    <span>
                        <i class="fas fa-comments-dollar ml-2 p-3"></i>
                    </span>
                    <div class="box-content pl-4">
                        <h3>
                            Lorem dolor amet
                        </h3>
                        <p>
                            Lorem ipsum dolor sit elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-ms-12">
                <div class="content d-flex">
                    <span>
                        <span>
                            <i class="fas fa-comments-dollar ml-2 p-3"></i>
                        </span>
                    </span>
                    <div class="box-content pl-4">
                        <h3>
                            Consectetur elit
                        </h3>
                        <p>
                            Ipsum dolor sit amet. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo nulla.
                        </p>
                    </div>
                </div>
                <div class="content d-flex">
                    <span>
                        <i class="fas fa-comments-dollar ml-2 p-3"></i>
                    </span>
                    <div class="box-content pl-4">
                        <h3>
                            Lorem dolor amet
                        </h3>
                        <p>
                            Lorem ipsum dolor sit elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. </p>
                    </div>
                </div>
                <div class="content d-flex">
                    <span>
                        <i class="fas fa-comments-dollar ml-2 p-3"></i>
                    </span>
                    <div class="box-content pl-4">
                        <h3>
                            Nec ullamcorper mattis
                        </h3>
                        <p>
                            Ut elit tellus - luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem dolor sit amet, consectetur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>