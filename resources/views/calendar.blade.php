@extends('layouts.app')
@php
$html_tag_data = ["override"=>'{ "attributes" : { "placement" : "vertical", "layout":"boxed", "color" : "light-green" },
"storagePrefix" : "starter-project", "showSettings" : true }'];
$title = 'Calendario';
$description= 'Calendar';
$breadcrumbs = ["/"=>"Cuenta","/calendar"=>"calendario"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="/css/vendor/fullcalendar.min.css" />
@endsection

@section('js_vendor')
<script src="/js/vendor/Chart.bundle.min.js"></script>
<script src="/js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
<script src="/js/vendor/chartjs-plugin-crosshair.js"></script>
<script src="/js/vendor/fullcalendar/main.min.js"></script>
@endsection

@section('js_page')
<script src="/js/cs/charts.extend.js"></script>
<script src="/js/pages/dashboards.doctor.js"></script>
@endsection

@section('content')
<div class="container">
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row g-0">
            <div class="col-auto mb-2 mb-md-0 me-auto">
                <div class="col-12 col-md-7">
                    <a href="Dashboards" class="muted-link pb-1 d-inline-block breadcrumb-back">
                        <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                        <span class="text-small align-middle">Inicio</span>
                    </a>
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    
                </div>
                @include('_layout.breadcrumb', ['breadcrumbs' => $breadcrumbs])
            </div>
            <div class="w-100 d-md-none"></div>
            <div class="col-auto d-flex align-items-start justify-content-end">
                <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only ms-1" id="goPrev">
                    <i data-acorn-icon="chevron-left"></i>
                </button>
                <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only ms-1" id="goNext">
                    <i data-acorn-icon="chevron-right"></i>
                </button>
            </div>
            <div class="col col-md-auto d-flex align-items-start justify-content-end">
                <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start ms-1 w-100 w-md-auto"
                    id="addNewEvent">
                    <i data-acorn-icon="plus"></i>
                    <span>Add Event</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Calendar Title Start -->
    <div class="d-flex justify-content-between">
        <h2 class="small-title" id="calendarTitle">Title</h2>
        <button class="btn btn-sm btn-icon btn-icon-only btn-foreground shadow align-top mt-n2" type="button"
            data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
            <i data-acorn-icon="more-horizontal" data-acorn-size="15"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow">
            <a class="dropdown-item" href="#" id="monthView">Month</a>
            <a class="dropdown-item" href="#" id="weekView">Week</a>
            <a class="dropdown-item" href="#" id="dayView">Day</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" id="goToday">Today</a>
        </div>
    </div>
    <!-- Calendar Title End -->

    <!-- Calendar Content Start -->
    <div class="card">
        <div class="card-body">
            <div id="calendar"></div>
        </div>
    </div>
    <!-- Calendar Content End -->

    <!-- New Task Start -->
    <div class="modal modal-right fade" id="newEventModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column">
                    <div class="mb-3 top-label">
                        <input class="form-control" id="eventTitle" />
                        <span>TITLE</span>
                    </div>
                    <div class="mb-3 top-label">
                        <select id="eventCategory">
                            <option label="&nbsp;"></option>
                            <option data-class="border-primary" value="Work">Work</option>
                            <option data-class="border-tertiary" value="Personal">Personal</option>
                            <option data-class="border-secondary" value="Education">Education</option>
                        </select>
                        <span>CATEGORY</span>
                    </div>
                    <div class="row g-0">
                        <div class="col pe-2">
                            <div class="mb-3 top-label">
                                <input type="text" data-provide="datepicker" class="form-control"
                                    data-date-autoclose="true" id="eventStartDate" />
                                <span>START DATE</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="mb-3 top-label custom-control-container time-picker-container">
                                <input class="form-control time-picker" id="eventStartTime" />
                                <span>START TIME</span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col pe-2">
                            <div class="mb-3 top-label">
                                <input type="text" data-provide="datepicker" class="form-control"
                                    data-date-autoclose="true" id="eventEndDate" />
                                <span>END DATE</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="mb-3 top-label custom-control-container time-picker-container">
                                <input class="form-control time-picker" id="eventEndTime" />
                                <span>END TIME</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button"
                        data-delay='{"show":"500", "hide":"0"}' data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Delete" id="deleteEvent">
                        <i data-acorn-icon="bin"></i>
                    </button>
                    <button class="btn btn-icon btn-icon-end btn-primary" type="button" id="saveEvent">
                        <span>Save</span>
                        <i data-acorn-icon="check"></i>
                    </button>
                    <button class="btn btn-icon btn-icon-start btn-primary" type="button" id="addEvent">
                        <i data-acorn-icon="plus"></i>
                        <span>Add</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- New Task End -->

    <!-- Delete Confirm Modal Start -->
    <div class="modal fade modal-close-out" id="deleteConfirmModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteConfirmModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="verticallyCenteredLabel">Are you sure?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="deleteConfirmDetail" class="fw-bold"></span>
                    <span>will be deleted. Are you sure?</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    <button type="button" id="deleteConfirmButton" class="btn btn-outline-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Confirm Modal End -->
</div>
@endsection