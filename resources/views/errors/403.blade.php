@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Anda tidak diijinkan untuk mengakses halaman ini'))
