@extends('master::layouts.master')

@section('title')
    User Dashboard
@endsection
@section('content')
    <div class="container-fluid">
        <h2>Batch Analytics</h2>
        <div class="row">
            @foreach($adminInfo as $info)
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-{{ $info['color'] }}"><i class="fas fa-info"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text text-{{ $info['color'] }}">{{ $info['title'] }}</span>
                            <span class="info-box-number">{{ $info['count'] }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            @endforeach

        </div>
    </div>

    <div class="container-fluid">
        <h2>Institute Management</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <a href="{{ route('admin.institutes.index') }}" class="info-box">
                    <span class="info-box-icon bg-primary"><i class="fas fa-university"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-primary">Total Institutes</span>
                        <span class="info-box-number">{{ $dashboardStats['totalInstitutesCount'] }}</span>
                    </div>
                </a>
            </div>
    
            <div class="col-md-3 col-sm-6 col-12">
                <a href="{{ route('admin.branches.index') }}" class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-code-branch"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-success">Total Branches</span>
                        <span class="info-box-number">{{ $dashboardStats['totalBranchesCount'] }}</span>
                    </div>
                </a>
            </div>
    
            <div class="col-md-3 col-sm-6 col-12">
                <a href="{{ route('admin.training-centers.index') }}" class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-school"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-warning">Total Training Centers</span>
                        <span class="info-box-number">{{ $dashboardStats['totalTrainingCentersCount'] }}</span>
                    </div>
                </a>
            </div>
            
            <div class="col-md-3 col-sm-6 col-12">
                <a href="{{ route('admin.courses.index') }}" class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fas fa-book"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-danger">Total Courses</span>
                        <span class="info-box-number">{{ $dashboardStats['totalCoursesCount'] }}</span>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
    
    <!-- Events Section -->
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Events Overview') }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                @if($events->isEmpty())
                                    <p>{{ __('No events available.') }}</p>
                                @else
                                    <ul class="list-group">
                                        @foreach($events as $event)
                                            <li class="list-group-item">
                                                <strong>{{ $event->caption }}</strong> <br>
                                                <span>{{ \Carbon\Carbon::parse($event->date)->format('d M, Y h:i A') }}</span> <br>
                                                <p>{{ $event->details }}</p>
                                                <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-primary mt-2">
                                                    View Details
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <div id='events-calender'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    @if(\App\Helpers\Classes\AuthHelper::getAuthUser()->isTrainer())
        <section class="routine-calendar mt-5">
            <div class="container pb-3">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-heading">{{__('generic.routines')}}</h2>
                    </div>
                </div>
            </div>
            <div class="container p-5 card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="accordion-heading"
                                    id="eventDateTime"></h3>
                                <!-- Accordion -->
                                <div id="eventArea" class="accordion">

                                </div>
                                <!-- End -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 rounded">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection

@push('css')
    <link rel="stylesheet" href="{{asset('/css/datatable-bundle.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.7.0/main.min.css"
          type="text/css">
    <style>
        /* Event */
        .accordion-heading {
            background: #671688;
            color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            font-size: 20px;
            text-align: center;
        }

        .collapsible-link {
            width: 100%;
            position: relative;
            text-align: left;
        }

        .collapsible-link::before {
            content: '\f107';
            position: absolute;
            top: 50%;
            right: 0.8rem;
            transform: translateY(-50%);
            display: block;
            font-family: 'Font Awesome 5 Free';
            font-size: 1.1rem;
        }

        .collapsible-link[aria-expanded='true']::before {
            content: '\f106';
        }

        .accordion-date {
            font-size: 12px;
            padding-left: 5px;
            color: darkgray;
        }

        #calendar {
            background-color: #fff;
            border-radius: 5px;
        }

        .fc .fc-col-header-cell-cushion {
            display: inline-block;
            padding: 2px 4px;
            color: #2c3e50;
        }

        .fc-theme-standard td, .fc-theme-standard th {
            border: none !important;
            cursor: pointer;
        }

        .fc-theme-standard .fc-scrollgrid {
            border: none !important;
        }

        .fc .fc-daygrid-day-number {
            position: relative;
            z-index: 4;
            padding: 4px;
            color: #000 !important;
        }

        .fc .fc-day-other .fc-daygrid-day-top {
            opacity: 1 !important;
        }

        .fc .fc-day-past:not(.fc-day-other) .fc-scrollgrid-sync-inner, .fc-day-future:not(.fc-day-other) .fc-scrollgrid-sync-inner {
            background: #c7c7c7;
            border: 1px solid #c7c7c7;
            margin: 3px;
            border-radius: 5px;
        }


        .fc-day-today a {
            color: #fff !important;
        }

        .fc .fc-button-primary {
            color: #000 !important;
            background: none !important;
            border: none !important;
        }

        .fc .fc-toolbar {
            justify-content: center !important;
        }

        .fc .fc-button:focus {
            outline: none;
            box-shadow: none !important;
        }

        .fc .fc-daygrid-day-top {
            display: flex;
            flex-direction: row-reverse;
            padding: 10px;
            margin-bottom: 5px;
        }


        .fc .fc-scroller-liquid-absolute {
            /*overflow: hidden !important;*/
        }

        .fc .fc-scroller {
            overflow: hidden !important;
        }

        .fc .fc-highlight {
            background: #3788d8;
        }

        .fc .fc-daygrid-body-unbalanced .fc-daygrid-day-events {
            position: absolute;
            min-height: 1em !important;
            left: 0;
            bottom: 0;
            width: 25px;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .carousel-item {
            transition-duration: 3s;
        }
    </style>
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/locales-all.js"></script>

    <script>
        $(function () {
            let eventDateTime = new Date();
            eventDateTime = new Intl.DateTimeFormat('{{ config('settings.locale') }}', {
                weekday: 'long',
                day: '2-digit',
                month: 'long',
                year: 'numeric',
            }).format(eventDateTime);

            $('#eventDateTime').html(eventDateTime);
            let today = formatDate();
            eventsOfSpecificDate(today);
        })


        function todayEvent() {
            let today = new Date();
            today = new Intl.DateTimeFormat('{{ config('settings.locale') }}').format(today);
            return today;
        }

        function eventDate(date) {
            let eventDate = new Date(date);
            eventDate = new Intl.DateTimeFormat('{{ config('settings.locale') }}').format(eventDate);
            return eventDate;
        }

        function eventTime(date) {
            let time = new Date(date);
            time = time.toLocaleTimeString(['{{ config('settings.locale') }}'], {hour: '2-digit', minute: '2-digit'});
            return time;
        }

        function formatTime(time) {
            time = time.split(':');
            let hour = parseInt(time[0]);
            let minutes = time[1];
            let ampm = hour > 12 ? 'pm' : 'am';
            hour = hour % 12;
            hour = hour == 0 ? 12 : hour;

            return hour + ':' + minutes + ' ' + ampm;
        }

        function formatDate(date) {
            let d = new Date();

            if (date) {
                d = new Date(date);
            }
            let month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();

            if (month.length < 2)
                month = '0' + month;
            if (day.length < 2)
                day = '0' + day;

            return [year, month, day].join('-');
        }

        function eventsTemplate(key) {
            let eventClass = '';
            if (todayEvent() == eventDate(this.date)) {
                eventClass = 'today-event';
            } else {
                eventClass = '';
            }

            return '<div class="card shadow-none mb-0">' +
                '<div id="heading' + key + '" class="card-header bg-white shadow-sm border-0">' +
                '<h2 class="mb-0">' +
                '<button type="button" data-toggle="collapse" data-target="#collapse' + key + '"' +
                'aria-expanded="true" aria-controls="collapseOne"' +
                'class="btn btn-link text-dark font-weight-bold text-uppercase collapsible-link">' + this.batch_title + ' ' +
                this.class +
                '<p class="mb-0 mt-1">' +
                '<i class="far fa-calendar-minus gray-color"></i>' +
                '<span class="accordion-date ' + eventClass + ' ml-1">' + formatTime(this?.start_time) + ' - ' + formatTime(this?.end_time) + '</span>' +
                '</p> </button> </h2>' +
                '</div>' +
                '<div id="collapse' + key + '" aria-labelledby="heading' + key + '"' +
                'data-parent="#eventArea" class="collapse">' +
                '<div class="card-body p-5">' +
                '<p class="font-weight-light m-0">Trainer: ' + this?.trainer_name + '</p>' +
                '<p class="font-weight-light m-0">Institute: ' + this?.institute_title + '</p>' +
                '<p class="font-weight-light m-0">Training Center: ' + this?.training_center_title + '</p>' +
                '</div>' +
                '</div>' +
                '</div>';
        }

        let events = '';
        @if(isset($currentInstituteEvents))
            @foreach($currentInstituteEvents as $key => $currentInstituteEvent)
            events += eventsTemplate.call(@json($currentInstituteEvent), '{{$key}}');
        @endforeach
        @endif

        $("#eventArea").html(events);

        function eventsOfSpecificDate(date) {
            /*fetch class routines*/
            $.ajax({
                url: '{{route('admin.specific-date-routines')}}',
                type: "POST",
                data: {date: date},
            }).done(function (response) {
                $("#eventArea").hide().empty();
                let events = '';
                $.each(response?.data, function (key, value) {
                    events += eventsTemplate.call(value, key)
                })

                if (response?.data?.length <= 0) {
                    events += '<p class="text-center">' + response?.msg + '</p>';
                }
                $("#eventArea").delay(100).fadeIn(800).html(events);
            }).fail(function (xhr) {
                failureCallback([]);
            });
        }

        $(function () {
            let calendarEl = document.getElementById('calendar');
            let initialDate = '{{date('Y-m-d')}}';
            let initialLocaleCode = '{{ config('settings.locale_code') }}';

            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                initialDate,
                height: 500,
                aspectRatio: 1,
                displayEventTime: true,
                selectable: true,
                customButtons: {
                    myCustomButton: {
                        text: '{{__('generic.year')}}',
                        click: function () {
                            window.location = '{{ route('frontend.fiscal-year') }}';
                        }
                    }
                },
                headerToolbar: {
                    // left: 'prev,next today',
                    left: 'prev',
                    center: 'title',
                    //right: 'timeGridDay,timeGridWeek,dayGridMonth,myCustomButton'
                    right: 'next'
                },
                locale: initialLocaleCode,
                events: function (fetchInfo, successCallback, failureCallback) {
                    $.ajax({
                        url: '{{route('admin.routine.events')}}',
                        type: "POST",
                    }).done(function (response) {
                        successCallback(response);
                    }).fail(function (xhr) {
                        failureCallback([]);
                    });
                },
                dateClick: function (info) {
                    let eventDateTime = new Date(info.dateStr);
                    eventDateTime = new Intl.DateTimeFormat('{{ config('settings.locale') }}', {
                        weekday: 'long',
                        day: '2-digit',
                        month: 'long',
                        year: 'numeric',
                    }).format(eventDateTime)
                    $('#eventDateTime').html(eventDateTime);
                    const start = info.dateStr;
                    eventsOfSpecificDate(start);
                },
            });
            calendar.render();

        });
    </script>
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/locales-all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <script id="event-data" type="application/json">
        {!! $events->map(function($event) {
            return [
                'title' => $event->caption,
                'start' => $event->date,
                'details' => $event->details,
                'url' => route('admin.events.show', $event->id),
            ];
        })->toJson() !!}
    </script>

    <script>
        $(function () {
            let calendarEl = document.getElementById('events-calender');
            let initialDate = '{{ date('Y-m-d') }}';
            let initialLocaleCode = '{{ config('settings.locale_code') }}';

            let events = JSON.parse(document.getElementById('event-data').textContent);

            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                initialDate: initialDate,
                height: 500,
                aspectRatio: 1,
                displayEventTime: false,
                selectable: true,
                events: events,
                eventContent: function(info) {
                    let dot = document.createElement('div');
                    dot.style.width = '8px';
                    dot.style.height = '8px';
                    dot.style.backgroundColor = '#007bff';
                    dot.style.borderRadius = '50%';
                    dot.style.margin = 'auto';
                    dot.style.marginTop = '5px';

                    let container = document.createElement('div');
                    container.style.display = 'flex';
                    container.style.justifyContent = 'center';
                    container.style.alignItems = 'center';
                    container.style.height = '100%';
                    container.appendChild(dot);

                    return { domNodes: [container] };
                },
                eventDidMount: function (info) {
                    let tooltipContent = `
                        <div>
                            <strong>${info.event.title}</strong><br>
                            <p>${info.event.extendedProps.details}</p>
                        </div>
                    `;
                    let tooltip = new bootstrap.Tooltip(info.el, {
                        title: tooltipContent,
                        html: true,
                        placement: 'top',
                        trigger: 'hover focus',
                        container: 'body'
                    });

                    $(info.el).on('mouseenter', function() {
                        tooltip.show();
                    }).on('mouseleave', function() {
                        setTimeout(() => {
                            if (!$('.tooltip:hover').length) {
                                tooltip.hide();
                            }
                        }, 300);
                    });

                    $(document).on('mouseleave', '.tooltip', function() {
                        tooltip.hide();
                    });
                    
                    $(info.el).on('click', function() {
                        window.location.href = info.event.extendedProps.url;
                    });
                },
                dateClick: function (info) {
                    let eventDateTime = new Date(info.dateStr);
                    eventDateTime = new Intl.DateTimeFormat('{{ config('settings.locale_code') }}', {
                        weekday: 'long',
                        day: '2-digit',
                        month: 'long',
                        year: 'numeric',
                    }).format(eventDateTime);
                    $('#eventDateTime').html(eventDateTime);
                    const start = info.dateStr;
                    eventsOfSpecificDate(start);
                }
            });

            calendar.render();
        });
    </script>
@endpush
