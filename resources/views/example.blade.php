@extends('layouts.backend')

@section('title','Example Backend')

@section('content')
<div class="row pt-4">
    <div class="col-sm-12">
        <!--START - Grid of tablo statistics-->
        <div class="element-wrapper">
            <h6 class="element-header">
                Dashboard Activity
            </h6>
            <div class="element-content">
                <div class="tablo-with-chart">
                    <div class="row">
                        <div class="col-sm-5 col-xxl-4">
                            <div class="tablos">
                                <div class="row mb-xl-2 mb-xxl-3">
                                    <div class="col-sm-6">
                                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                            <div class="value">
                                                24
                                            </div>
                                            <div class="label">
                                                New Order
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                            <div class="value">
                                                12
                                            </div>
                                            <div class="label">
                                                Closed Order Today
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                            <div class="value">
                                                1000
                                            </div>
                                            <div class="label">
                                                Total User
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                            <div class="value">
                                                7
                                            </div>
                                            <div class="label">
                                                Order On Going
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-xxl-8">
                            <!--START - Chart Box-->
                            <div class="element-box pl-xxl-5 pr-xxl-5">
                                <div class="el-tablo bigger highlight bold-label">
                                    <div class="label">
                                        Total Order of The Week
                                    </div>
                                </div>
                                <div class="el-chart-w">
                                    <canvas height="170px" id="lineChart" width="600px"></canvas>
                                </div>
                            </div>
                            <!--END - Chart Box-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END - Grid of tablo statistics-->
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-xxl-6">
        <div class="col-sm-12 d-xxxl-none">
            <!--START - Top Selling Chart-->
            <div class="element-wrapper">
                <h6 class="element-header">
                    Top Inspector Today
                </h6>
                <div class="element-box">
                    <div class="el-chart-w">
                        <canvas height="120" id="donutChart" width="120"></canvas>
                        <div class="inside-donut-chart-label">
                            <strong>142</strong><span>Total Orders</span>
                        </div>
                    </div>
                    <div class="el-legend condensed">
                        <div class="row">
                            <div class="col-auto col-xxxxl-6 ml-sm-auto mr-sm-auto col-6">
                                <div class="legend-value-w">
                                    <div class="legend-pin legend-pin-squared" style="background-color: #6896f9;"></div>
                                    <div class="legend-value">
                                        <span>Prada</span>
                                        <div class="legend-sub-value">
                                            14 Pairs
                                        </div>
                                    </div>
                                </div>
                                <div class="legend-value-w">
                                    <div class="legend-pin legend-pin-squared" style="background-color: #85c751;"></div>
                                    <div class="legend-value">
                                        <span>Maui Jim</span>
                                        <div class="legend-sub-value">
                                            26 Pairs
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 d-lg-none d-xxl-block">
                                <div class="legend-value-w">
                                    <div class="legend-pin legend-pin-squared" style="background-color: #806ef9;"></div>
                                    <div class="legend-value">
                                        <span>Gucci</span>
                                        <div class="legend-sub-value">
                                            17 Pairs
                                        </div>
                                    </div>
                                </div>
                                <div class="legend-value-w">
                                    <div class="legend-pin legend-pin-squared" style="background-color: #d97b70;"></div>
                                    <div class="legend-value">
                                        <span>Armani</span>
                                        <div class="legend-sub-value">
                                            12 Pairs
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END - Top Selling Chart-->
        </div>
        <!--START - Customers with most tickets--> 
        <br><br><br><br><br>
        <!--END - Customers with most tickets-->
    </div>
    <div class="col-sm-6 col-xxl-6">
        <div class="col-sm-12 d-xxxl-none">
            <!--START - Top Selling Chart-->
            <div class="element-wrapper">
                <h6 class="element-header">
                    Top Inspector Today
                </h6>
            </div>
            <!--END - Top Selling Chart-->
        </div>
        <!--START - Questions per Product-->  
        <!--END - Questions per product-->
    </div>
</div>

<div class="row pt-4">
    <div class="col-sm-12">
        <!--START - Recent Ticket Comments-->  
        <!--END - Recent Ticket Comments-->
    </div>
</div>

@endsection