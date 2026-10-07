@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4">Dashboard</h1>

    <!-- Welcome message -->
    <div class="alert alert-primary">
        Welcome to the Student Management System.
    </div>

    <!-- Summary cards -->
    <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-3">
            <x-summary-card title="Total Students" :value="$totalStudents" icon="people" color="primary" />
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <x-summary-card title="Total Courses" :value="$totalCourses" icon="book" color="success" />
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <x-summary-card title="Fees Collected" :value="$feesCollected" icon="cash-stack" color="success" />
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <x-summary-card title="Outstanding Fees" :value="$outstandingFees" icon="credit-card" color="danger" />
        </div>
    </div>
@endsection