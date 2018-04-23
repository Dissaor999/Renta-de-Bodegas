@extends('layouts.app')

@section('content')
@if (Auth::user()->tipo == 'sadmin')
@include('layouts.sadmin')
@endif
@if (Auth::user()->tipo == 'admin')
@include('layouts.admin')
@endif
@if (Auth::user()->tipo == 'user')
@include('layouts.user')
@endif
@if (Auth::user()->tipo == 'reportes')
@include('layouts.reportes')
@endif
@endsection






