<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3034">


    <div class="container mt-5">

        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-dark text-decoration-none">Home</a></li>
                <li class="breadcrumb-item-active" aria-current="page">Pricing Plans</li>
            </ul>
        </nav>


        <h2 class="text-center mb-4">Pricing Plan 01</h2>


        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Phone & Tablet
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-bordered text-start mb-0">
                            <thead>
                                <tr>
                                    <th>Services</th>
                                    <th>Phone</th>
                                    <th>Tablet</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Screen Replacement</td>
                                    <td>$44</td>
                                    <td>$62</td>
                                </tr>
                                <tr>
                                    <td>Battery Replacement</td>
                                    <td>$26</td>
                                    <td>$34</td>
                                </tr>
                                <tr>
                                    <td>Phone Unlocking</td>
                                    <td>$29</td>
                                    <td>$38</td>
                                </tr>
                                <tr>
                                    <td>Water Damage Repair</td>
                                    <td>$56</td>
                                    <td>$72</td>
                                </tr>
                                <tr>
                                    <td>Frame Replacement</td>
                                    <td>$60</td>
                                    <td>$85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Desktop & Laptop
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-bordered text-start mb-0">
                            <thead>
                                <tr>
                                    <th>Services</th>
                                    <th>Desktop</th>
                                    <th>Laptop</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>OS Installation</td>
                                    <td>$15</td>
                                    <td>$20</td>
                                </tr>
                                <tr>
                                    <td>Hard Disk Replacement</td>
                                    <td>$55</td>
                                    <td>$50</td>
                                </tr>
                                <tr>
                                    <td>Screen Replacement</td>
                                    <td>$45</td>
                                    <td>$42</td>
                                </tr>
                                <tr>
                                    <td>Water Damage Repair</td>
                                    <td>$56</td>
                                    <td>$72</td>
                                </tr>
                                <tr>
                                    <td>Frame Replacement</td>
                                    <td>$60</td>
                                    <td>$85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>