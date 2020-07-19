<div class="editor-js-block">
    <div class="editor-js-image {{ $classes }}">
        <img
            src="{{ $file['url'] }}"
            alt="{{ $caption }}"
            style="width: {{ !empty($width) ? $width.'px' : 'auto'}}; height: {{ !empty($height) ? $height.'px' : 'auto'}};">
        @if (!empty($caption))
            <div class="caption">{{ $caption }}</div>
        @endif
    </div>
</div>
