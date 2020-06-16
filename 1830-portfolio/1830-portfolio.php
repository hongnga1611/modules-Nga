<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1830">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light my-4">
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav menu-portfolio nav_menu">
                    <span id="item1" onclick="changesClass('item1')" class="nav-item font-weight-bold active_nav">View all</span>
                    <span id="item2" onclick="changesClass('item2')" class="nav-item font-weight-bold">Branding</span>
                    <span id="item3" onclick="changesClass('item3')" class="nav-item font-weight-bold">Design</span>
                    <span id="item4" onclick="changesClass('item4')" class="nav-item font-weight-bold">Maketing</span>
                    <span id="item5" onclick="changesClass('item5')" class="nav-item font-weight-bold">Photography</span>
                    <span id="item6" class="d-none d-lg-flex nav-item sort_by_date align-items-center">
                        <i data-toggle="tooltip" data-placement="top" title="Sort by date" class="far fa-calendar-alt"></i>
                        <label class="switch m-0 mx-2">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                        <i data-toggle="tooltip" data-placement="top" title="Sort by name" class="far sort_name"></i>
                    </span>
                    <span id="item7" class="d-none d-lg-flex nav-item  filter-sorting align-items-center">
                        <i data-toggle="tooltip" data-placement="top" title="Descending" class="fas fa-sort-amount-down"></i>
                        <label class="switch m-0 mx-2">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                        <i data-toggle="tooltip" data-placement="top" title="Ascending" class="fas fa-sort-amount-up"></i>
                    </span>
                </div>
            </div>
        </nav>
        <div class="logo-link">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/woman-company.png" alt="" width="100%">
                    </div>
                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/woman-company.png" alt="" width="100%">
                    </div>

                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/woman-company.png" alt="" width="100%">
                    </div>

                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/woman-company.png" alt="" width="100%">
                    </div>

                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/woman-company.png" alt="" width="100%">
                    </div>

                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/woman-company.png" alt="" width="100%">
                    </div>

                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/woman-company.png" alt="" width="100%">
                    </div>

                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/woman-company.png" alt="" width="100%">
                    </div>

                </div>
            </div>
            <div id="load-more" class="load-more text-center font-weight-bold m-5">
                <button onclick="ShowMore()" class="px-5 py-3">
                    <i class="fas fa-chevron-circle-down"></i>
                    <span>Load more</span>
                </button>
            </div>
            <div id="show-more" class="show-more grid-container">
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/woman-company.png" alt="" width="100%">
                    </div>

                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/woman-company.png" alt="" width="100%">
                    </div>

                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/woman-company.png" alt="" width="100%">
                    </div>

                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/woman-company.png" alt="" width="100%">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>