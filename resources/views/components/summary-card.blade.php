@props(['title', 'value', 'icon', 'color' => 'primary'])

<div class="card border-0 shadow-sm h-100">
    <div class="card-body d-flex justify-content-between align-items-center">
        <div>
            <div class="text-muted small">{{ $title }}</div>
            <div class="fs-4 fw-bold">{{ $value }}</div>
        </div>
        <i class="bi bi-{{ $icon }} fs-2 text-{{ $color }}"></i>
    </div>
</div>