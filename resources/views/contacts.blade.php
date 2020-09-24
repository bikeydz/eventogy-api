@extends('layout.main')

@section('content')

    <div class="container">
        <!-- contacts card -->
        <div class="card card-default" id="card_contacts">
            <div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
                <ul class="list-group pull-down" id="contact-list">
                   @foreach($data as $contact)
                    <li class="list-group-item">
                        <div class="row w-100">
                            <div class="col-12 col-sm-6 col-md-2 px-0">
                                <img class="lozad" data-src="https://api.adorable.io/avatars/{{ $contact['id'] }}" style="width:128px; height: 128px;" alt="{{ $contact['title'] }} {{$contact['firstName']}} {{$contact['lastName']}}" class="rounded-circle mx-auto d-block img-fluid">
                            </div>
                            <div class="col-12 col-sm-6 col-md-9 text-left text-sm-left" data-toggle="modal" data-target="#exampleModalPopovers">
                                <label class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-{{ $contact['id'] }}">{{ $contact['title'] }} {{$contact['firstName']}} {{$contact['lastName']}}</label>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modal-{{ $contact['id'] }}" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="col-lg-12 col-sm-6">

                                            <div class="card hovercard">
                                                <div class="cardheader">

                                                </div>
                                                <div class="avatar">
                                                    <img class="lozad" alt="" data-src="https://api.adorable.io/avatars/{{ $contact['id'] }}">
                                                </div>
                                                <div class="info">
                                                    <div class="title">
                                                        <a target="_blank" href="#">{!! $contact['title'] !!} {{$contact['firstName']}} {{$contact['lastName']}}</a>
                                                    </div>
                                                    <div class="desc">
                                                        <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="{{ $contact['address'] }}"></span>
                                                        <span class="text-muted">{{ $contact['address'] }}</span>

                                                    </div>
                                                    @isset($contact['phoneNumber'])
                                                        <div class="desc">
                                                            <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="{{ $contact['phoneNumber'] }}"></span>
                                                            <span class="text-muted">{{ $contact['phoneNumber'] }}</span>
                                                        </div>
                                                    @endisset

                                                    <div class="desc">
                                                        <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" data-original-title="" title="{{ $contact['email'] }}"></span>
                                                        <a href="mailto:{{ $contact['email'] }}">
                                                            <span class="text-muted text-truncate">{{ $contact['email'] }}</span>
                                                        </a>

                                                    </div>

                                                    <div class="desc">
                                                    <span class="fa fa-newspaper-o fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
                                                    <span class="text-muted">
                                                        Marketing Opted In:
                                                        @if ($contact['marketing'] === 1) Yes
                                                        @else No
                                                        @endif
                                                    </span>
                                                    </div>

                                                    @isset($contact['createdAt'])
                                                        <div class="desc">
                                                            <span class="fa fa-calendar-o fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
                                                            <span class="text-muted">
                                                            Created: {{ date('d/m/Y', $contact['createdAt']) }}
                                                        </div>
                                                    @endisset
                                                    @isset($contact['createdAt'])
                                                        <div class="desc">
                                                            <span class="fa fa-calendar fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
                                                            <span class="text-muted">
                                                            Updated: {{ date('d/m/Y', $contact['createdAt']) }}
                                                        </div>
                                                    @endisset
                                                </div>
                                                <div class="bottom">
                                                    <a class="btn btn-primary btn-twitter btn-sm" href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a class="btn btn-danger btn-sm" rel="publisher"
                                                       href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class="btn btn-primary btn-sm" rel="publisher"
                                                       href="#">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a class="btn btn-warning btn-sm" rel="publisher" href="#">
                                                        <i class="fa fa-behance"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <!--/contacts list
                -->
            </div>

        </div>

    </div>
<script>
    const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();
</script>


@endsection


