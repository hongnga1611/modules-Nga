<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1598 p-5">
    <div class="container">
        <div class="title text-center">
            <h2>Welcome to The7 Company!</h2>
        </div>
        <hr class="separation mb-5">
        <div class="row content">
            <div class="col-lg-6 col-12">
                <h5 class="font-weight-bold">Lorem usce – volutpat lectus justo, ut suscipit felis congue ut. Vivamus ut ultricies ante dictum dolor ametis.</h5>
                <p>Curabitur et mattis ante. Maecenas sit amet commodo tellus. Phasellus fermentum pretium eros, ut faucibus velit auctor eget. Vestibulum semper sed magna pretium congue. Fusce eget arcu eget nisi mattis lacinia sit amet at sem. Quisque porttitor bibendum leo ornare pharetra.</p>
                <p>Curabitur cursus sapien sed porta dapibus. Quisque quis ex mattis, euismod mauris eget, scelerisque sapien.</p>
                <div class="row targets ">
                    <div class="col-md-6">
                        <i class="fas fa-hand-holding-heart mr-2"></i>
                        <span class="font-weight-bold">Sed molestie tempor</span>
                    </div>
                    <div class="col-md-6">
                    <i class="fas fa-video  mr-2"></i>
                        <span class="font-weight-bold">Ipsum malesuada ipsum</span>
                    </div>
                    <div class="col-md-6">
                        <i class="fas fa-id-card-alt  mr-2"></i>
                        <span class="font-weight-bold">Curabitur lorem ipsum dolor</span>
                    </div>
                    <div class="col-md-6">
                    <i class="fas fa-comments mr-2"></i>
                        <span class="font-weight-bold">Dolor sit amet tincidunt elit</span>
                    </div>
                    <div class="col-md-6">
                    <i class="fas fa-columns mr-2"></i>
                        <span class="font-weight-bold">Nulla from loremipsum</span>
                    </div>
                    <div class="col-md-6">
                    <i class="fas fa-heart mr-2"></i>
                        <span class="font-weight-bold">Sed molestie for tempor</span>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-12 mt-lg-0 mt-4">
                <div class="grid-container">
                    <div class="grid-item"><a href=#"><img src="images/woman-company.png" alt="" width="100%"></a></div>
                    <div class="grid-item"><a href=#"><img src="images/woman-company.png" alt="" width="100%"></a></div>
                    <div class="grid-item"><a href=#"><img src="images/woman-company.png" alt="" width="100%"></a></div>
                    <div class="grid-item"><a href=#"><img src="images/woman-company.png" alt="" width="100%"></a></div>
                    <div class="grid-item"><a href=#"><img src="images/woman-company.png" alt="" width="100%"></a></div>
                    <div class="grid-item"><a href=#"><img src="images/woman-company.png" alt="" width="100%"></a></div>
                </div>
                
            </div>
        </div>
    </div>
</div>