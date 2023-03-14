@extends('dashboard-layout.base-template')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">February - 2023</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="customer-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Gender</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="gender-chart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#430eef;"></i> Male
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#e754a5;"></i> Female
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Age Group</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="age_group"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#0220b7;"></i> Kids
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#169a5b;"></i> Teenagers
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#b2bc24;"></i> Adults
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#c25012;"></i> Elders
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Emotion</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="emotion"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#0220b7;"></i> Natural
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#169a5b;"></i> Happy
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#030400;"></i> Sad
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#ee1616;"></i> Angery
                        </span>

                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#386772;"></i> Surprise
                        </span>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Mask</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="mask"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#0220b7;"></i> Mask
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle" style="color:#f51c0c;"></i> Non-Mask
                        </span>
                    </div>
                </div>
            </div>
        </div>


        
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Race</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="race"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle" style="color:#0220b7;"></i> Asian
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle" style="color:#f6e8c3;"></i> White
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle" style="color:#030001;"></i> Black
                    </span>
                </div>
            </div>
        </div>
    </div>
                            
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Sentiment Analysis</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="sentiment_analysis"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle" style="color:#0220b7;"></i> Positive
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle" style="color:#fe3737;"></i> Negative
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection