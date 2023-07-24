<div class="row" style="margin-left:3px; margin-right:1px;">
    <div class="col-12 col-xl-12">
        @unless ($breadcrumbs->isEmpty())
            <ol class="breadcrumb me-1">
                @foreach ($breadcrumbs as $breadcrumb)
                    @if (!is_null($breadcrumb->url) && !$loop->last)
                        <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb->title }}</li>
                    @endif
                @endforeach
            </ol>
        @endunless
    </div>
</div>
