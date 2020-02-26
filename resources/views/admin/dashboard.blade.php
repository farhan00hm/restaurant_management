@extends('layouts.mainview')

@php
use App\User;

$users = User::all();

@endphp

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">overview</h2>
                <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#modalLoginForm">
                    <i class="zmdi zmdi-plus"></i>add User</button>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>{{ \App\User::count() }}</h2>
                            <span>Registerd User</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                        <div class="text">
                            <h2>388,688</h2>
                            <span>items solid</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                        <div class="text">
                            <h2>1,086</h2>
                            <span>this week</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c4">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                        <div class="text">
                            <h2>$1,060,386</h2>
                            <span>total earnings</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart4"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9">
            <h2 class="title-1 m-b-25"><strong>User's Information</strong></h2>
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                    <tr>
                        <th>Restaurant Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th class="text-right">Role</th>
                        {{--                                        <th class="text-right">quantity</th>--}}
                        {{--                                        <th class="text-right">total</th>--}}
                    </tr>
                    </thead>
                    <tbody>
{{--                    <tr>--}}
{{--                        <td>Sultan Dines</td>--}}
{{--                        <td>farhan96.hm@gmail.com</td>--}}
{{--                        <td>+8801515205881</td>--}}
{{--                        <td class="text-right">Admin</td>--}}
{{--                    </tr>--}}
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->role_id }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-3">
            <h2 class="title-1 m-b-25">Top countries</h2>
            <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                <div class="au-card-inner">
                    <div class="table-responsive">
                        <table class="table table-top-countries">
                            <tbody>
                            <tr>
                                <td>United States</td>
                                <td class="text-right">$119,366.96</td>
                            </tr>
                            <tr>
                                <td>Australia</td>
                                <td class="text-right">$70,261.65</td>
                            </tr>
                            <tr>
                                <td>United Kingdom</td>
                                <td class="text-right">$46,399.22</td>
                            </tr>
                            <tr>
                                <td>Turkey</td>
                                <td class="text-right">$35,364.90</td>
                            </tr>
                            <tr>
                                <td>Germany</td>
                                <td class="text-right">$20,366.96</td>
                            </tr>
                            <tr>
                                <td>France</td>
                                <td class="text-right">$10,366.96</td>
                            </tr>
                            <tr>
                                <td>Australia</td>
                                <td class="text-right">$5,366.96</td>
                            </tr>
                            <tr>
                                <td>Italy</td>
                                <td class="text-right">$1639.32</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                <div class="au-card-title" style="background-image:url('{{ asset('assets/dashboardview/images/bg-title-01.jpg') }}');">
                    <div class="bg-overlay bg-overlay--blue"></div>
                    <h3>
                        <i class="zmdi zmdi-account-calendar"></i>26 April, 2018</h3>
                    <button class="au-btn-plus">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                </div>
                <div class="au-task js-list-load">
                    <div class="au-task__title">
                        <p>Tasks for John Doe</p>
                    </div>
                    <div class="au-task-list js-scrollbar3">
                        <div class="au-task__item au-task__item--danger">
                            <div class="au-task__item-inner">
                                <h5 class="task">
                                    <a href="#">Meeting about plan for Admin Template 2018</a>
                                </h5>
                                <span class="time">10:00 AM</span>
                            </div>
                        </div>
                        <div class="au-task__item au-task__item--warning">
                            <div class="au-task__item-inner">
                                <h5 class="task">
                                    <a href="#">Create new task for dashboardview</a>
                                </h5>
                                <span class="time">11:00 AM</span>
                            </div>
                        </div>
                        <div class="au-task__item au-task__item--primary">
                            <div class="au-task__item-inner">
                                <h5 class="task">
                                    <a href="#">Meeting about plan for Admin Template 2018</a>
                                </h5>
                                <span class="time">02:00 PM</span>
                            </div>
                        </div>
                        <div class="au-task__item au-task__item--success">
                            <div class="au-task__item-inner">
                                <h5 class="task">
                                    <a href="#">Create new task for dashboardview</a>
                                </h5>
                                <span class="time">03:30 PM</span>
                            </div>
                        </div>
                        <div class="au-task__item au-task__item--danger js-load-item">
                            <div class="au-task__item-inner">
                                <h5 class="task">
                                    <a href="#">Meeting about plan for Admin Template 2018</a>
                                </h5>
                                <span class="time">10:00 AM</span>
                            </div>
                        </div>
                        <div class="au-task__item au-task__item--warning js-load-item">
                            <div class="au-task__item-inner">
                                <h5 class="task">
                                    <a href="#">Create new task for dashboardview</a>
                                </h5>
                                <span class="time">11:00 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="au-task__footer">
                        <button class="au-btn au-btn-load js-load-btn">load more</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                <div class="au-card-title" style="background-image:url('{{ asset('assets/dashboardview/images/bg-title-02.jpg') }}');">
                    <div class="bg-overlay bg-overlay--blue"></div>
                    <h3>
                        <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
                    <button class="au-btn-plus">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                </div>
                <div class="au-inbox-wrap js-inbox-wrap">
                    <div class="au-message js-list-load">
                        <div class="au-message__noti">
                            <p>You Have
                                <span>2</span>

                                new messages
                            </p>
                        </div>
                        <div class="au-message-list">
                            <div class="au-message__item unread">
                                <div class="au-message__item-inner">
                                    <div class="au-message__item-text">
                                        <div class="avatar-wrap">
                                            <div class="avatar">
                                                <img src="{{ asset('assets/dashboardview/images/icon/avatar-02.jpg') }}" alt="John Smith">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h5 class="name">John Smith</h5>
                                            <p>Have sent a photo</p>
                                        </div>
                                    </div>
                                    <div class="au-message__item-time">
                                        <span>12 Min ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-message__item unread">
                                <div class="au-message__item-inner">
                                    <div class="au-message__item-text">
                                        <div class="avatar-wrap online">
                                            <div class="avatar">
                                                <img src="{{ asset('assets/dashboardview/images/icon/avatar-03.jpg') }}" alt="Nicholas Martinez">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h5 class="name">Nicholas Martinez</h5>
                                            <p>You are now connected on message</p>
                                        </div>
                                    </div>
                                    <div class="au-message__item-time">
                                        <span>11:00 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-message__item">
                                <div class="au-message__item-inner">
                                    <div class="au-message__item-text">
                                        <div class="avatar-wrap online">
                                            <div class="avatar">
                                                <img src="{{ asset('assets/dashboardview/images/icon/avatar-04.jpg') }}" alt="Michelle Sims">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h5 class="name">Michelle Sims</h5>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <div class="au-message__item-time">
                                        <span>Yesterday</span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-message__item">
                                <div class="au-message__item-inner">
                                    <div class="au-message__item-text">
                                        <div class="avatar-wrap">
                                            <div class="avatar">
                                                <img src="{{ asset('assets/dashboardview/images/icon/avatar-05.jpg') }}" alt="Michelle Sims">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h5 class="name">Michelle Sims</h5>
                                            <p>Purus feugiat finibus</p>
                                        </div>
                                    </div>
                                    <div class="au-message__item-time">
                                        <span>Sunday</span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-message__item js-load-item">
                                <div class="au-message__item-inner">
                                    <div class="au-message__item-text">
                                        <div class="avatar-wrap online">
                                            <div class="avatar">
                                                <img src="{{ asset('assets/dashboardview/images/icon/avatar-04.jpg') }}" alt="Michelle Sims">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h5 class="name">Michelle Sims</h5>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <div class="au-message__item-time">
                                        <span>Yesterday</span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-message__item js-load-item">
                                <div class="au-message__item-inner">
                                    <div class="au-message__item-text">
                                        <div class="avatar-wrap">
                                            <div class="avatar">
                                                <img src="{{ asset('assets/dashboardview/images/icon/avatar-05.jpg') }}" alt="Michelle Sims">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h5 class="name">Michelle Sims</h5>
                                            <p>Purus feugiat finibus</p>
                                        </div>
                                    </div>
                                    <div class="au-message__item-time">
                                        <span>Sunday</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="au-message__footer">
                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                        </div>
                    </div>
                    <div class="au-chat">
                        <div class="au-chat__title">
                            <div class="au-chat-info">
                                <div class="avatar-wrap online">
                                    <div class="avatar avatar--small">
                                        <img src="{{ asset('assets/dashboardview/images/icon/avatar-02.jpg') }}" alt="John Smith">
                                    </div>
                                </div>
                                <span class="nick">
                                                        <a href="#">John Smith</a>
                                                    </span>
                            </div>
                        </div>
                        <div class="au-chat__content">
                            <div class="recei-mess-wrap">
                                <span class="mess-time">12 Min ago</span>
                                <div class="recei-mess__inner">
                                    <div class="avatar avatar--tiny">
                                        <img src="{{ asset('assets/dashboardview/images/icon/avatar-02.jpg') }}" alt="John Smith">
                                    </div>
                                    <div class="recei-mess-list">
                                        <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                        <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                    </div>
                                </div>
                            </div>
                            <div class="send-mess-wrap">
                                <span class="mess-time">30 Sec ago</span>
                                <div class="send-mess__inner">
                                    <div class="send-mess-list">
                                        <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="au-chat-textfield">
                            <form class="au-form-icon">
                                <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                <button class="au-input-icon">
                                    <i class="zmdi zmdi-camera"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('Add_User_Model')
    {{--    Modal start--}}

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="false">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div style="margin: 10px;">
                    <form action="/admin/adduser" method="POST" novalidate="novalidate">

                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1"><strong>Resturant Name</strong></label>
                            <input  name="name" type="text" class="form-control @error('name') is-invalid @enderror" aria-required="true" aria-invalid="false" value="">
                        </div>


                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1"><strong>Email</strong></label>
                            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" aria-required="true" aria-invalid="false" value="">
                        </div>

                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1"><strong>Phone</strong></label>
                            <input name="phone" type="text" class="form-control @error('email') is-invalid @enderror" aria-required="true" aria-invalid="false" value="">
                        </div>


                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1"><strong>Role</strong></label><br>
                            <label class="radio-inline" style="color:blue; padding: 5px;">
                                <input type="radio" name="role" value=1> <strong>Admin</strong>
                            </label>
                            <label class="radio-inline" style="color:blue; padding: 5px;">
                                <input type="radio" name="role" style="color:blue; padding: 5px;" value=2 checked> <strong>User</strong>
                            </label>
                            <label class="radio-inline" style="color:blue; padding: 5px;">
                                <input type="radio" name="role" value=3><strong> Manager</strong>
                            </label>
                        </div>

{{--                        <label class="@error('email') is-invalid @enderror "></label>--}}

{{--                        @error('name')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                        @enderror--}}

{{--                        @error('email','name')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}

{{--                        @error('phone')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                        @enderror--}}


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Submit</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>

                            {{ csrf_field() }}
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    {{--    Modal End--}}
@endsection
