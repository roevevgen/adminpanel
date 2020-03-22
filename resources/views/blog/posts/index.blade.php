@extends('layouts.app', ['title' => __('BlogPost')])

@section('content')

    <div class="container-fluid mt--50">
        <div class="row">
{{--            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">--}}
{{--                <div class="card card-profile shadow">--}}
{{--                    <div class="row justify-content-center">--}}
{{--                        <div class="col-lg-3 order-lg-2">--}}
{{--                            <div class="card-profile-image">--}}
{{--                                <a href="#">--}}
{{--                                    <img src="{{ asset('argon') }}/img/theme/team-5-800x800.jpg" class="rounded-circle">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">--}}
{{--                        <div class="d-flex justify-content-between">--}}
{{--                            <a href="#" class="btn btn-sm btn-info mr-4">{{ __('Connect') }}</a>--}}
{{--                            <a href="#" class="btn btn-sm btn-default float-right">{{ __('Message') }}</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body pt-0 pt-md-4">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">--}}
{{--                                    <div>--}}
{{--                                        <span class="heading">22</span>--}}
{{--                                        <span class="description">{{ __('Friends') }}</span>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <span class="heading">10</span>--}}
{{--                                        <span class="description">{{ __('Photos') }}</span>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <span class="heading">89</span>--}}
{{--                                        <span class="description">{{ __('Comments') }}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center">--}}
{{--                            <h3>--}}
{{--                                {{ auth()->user()->name }}<span class="font-weight-light">, 37</span>--}}
{{--                            </h3>--}}
{{--                            <div class="h5 font-weight-300">--}}
{{--                                <i class="ni location_pin mr-2"></i>{{ __('Kiev, Irpen') }}--}}
{{--                            </div>--}}
{{--                            <div class="h5 mt-4">--}}
{{--                                <i class="ni business_briefcase-24 mr-2"></i>{{ __('Full stack web developer') }}--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <i class="ni education_hat mr-2"></i>{{ __('Web Frontend Developer, CyberBionic Systematics') }}--}}
{{--                            </div>--}}
{{--                            <hr class="my-4"/>--}}
{{--                            <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,--}}
{{--                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.') }}</p>--}}
{{--                            <a href="#">{{ __('Show more') }}</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-xl-10 order-xl-6">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <table>
                                @foreach($items ?? '' as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->created_at }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth')
@endsection
