<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Demo1 - Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0px
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-full {
            width: 100%
        }

        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-sm {
            border-radius: 0.125rem
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1)
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #FF2D20
        }

        .object-cover {
            object-fit: cover
        }

        .object-top {
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .pt-3 {
            padding-top: 0.75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: 0.875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-semibold {
            font-weight: 600
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7)
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2)
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0px
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5)
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:hover\:text-white\/70:hover {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:hover\:text-white\/80:hover {
                color: rgb(255 255 255 / 0.8)
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
            }
        }
    </style>

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

        <img id="background" class="absolute -left-20 top-0 max-w-[877px]"
            src="https://laravel.com/assets/img/welcome/background.svg" />

        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                {{-- <header class="grid grid-cols-1 items-center gap-2 py-10 lg:grid-cols-3">

                </header> --}}

                <header class="mt-4">

                    <div class="flex lg:justify-center lg:col-start-2">

                        {{-- <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg> --}}

                        <img style="width: 100px;"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWAAAAGpCAYAAACzhuwwAAAAwXpUWHRSYXcgcHJvZmlsZSB0eXBl
                            IGV4aWYAAHjabVBRDsMgCP33FDuCAlo4Dl27ZDfY8YeCSd36Et97hfiKpPPzfqVHBxRKVDdu0lo2
                            kJCAmuHs0MEl0+CBNl1Z60klLJiiKXqDm2uZ9bgwtai5egniZzT2tSHkCvwTBC7YJ+r+iCCJIARv
                            lAhQjacIb9cn7GdewX5SJ+J17L/vzbZ3VPsPApxYMBsjkg+A/VBCHUatbeswruZhVIwjzBZyt6eJ
                            9AUug1lAEi65wwAAAYRpQ0NQSUNDIHByb2ZpbGUAAHicfZE9SMNAHMVfU6WiFQeLiChkqE52URHH
                            WoUiVAi1QqsOJpd+CE0akhQXR8G14ODHYtXBxVlXB1dBEPwAcXZwUnSREv+XFFrEeHDcj3f3Hnfv
                            AKFeZprVEQc03TbTyYSYza2IoVcI6MEARhCSmWXMSlIKvuPrHgG+3sV4lv+5P0evmrcYEBCJ48ww
                            beJ14ulN2+C8TxxhJVklPiceN+mCxI9cVzx+41x0WeCZETOTniOOEIvFNlbamJVMjXiKOKpqOuUL
                            WY9VzluctXKVNe/JXxjO68tLXKc5jCQWsAgJIhRUsYEybMRo1UmxkKb9hI9/yPVL5FLItQFGjnlU
                            oEF2/eB/8LtbqzA54SWFE0Dni+N8jAKhXaBRc5zvY8dpnADBZ+BKb/krdWDmk/RaS4seAX3bwMV1
                            S1P2gMsdYPDJkE3ZlYI0hUIBeD+jb8oB/bdA96rXW3Mfpw9AhrpK3QAHh8BYkbLXfN7d1d7bv2ea
                            /f0ATzpymAnnJmkAAA14aVRYdFhNTDpjb20uYWRvYmUueG1wAAAAAAA8P3hwYWNrZXQgYmVnaW49
                            Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/Pgo8eDp4bXBtZXRhIHhtbG5zOng9
                            ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJYTVAgQ29yZSA0LjQuMC1FeGl2MiI+CiA8cmRmOlJE
                            RiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMi
                            PgogIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiCiAgICB4bWxuczp4bXBNTT0iaHR0cDov
                            L25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIKICAgIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRv
                            YmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiCiAgICB4bWxuczpkYz0iaHR0cDov
                            L3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iCiAgICB4bWxuczpHSU1QPSJodHRwOi8vd3d3Lmdp
                            bXAub3JnL3htcC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4w
                            LyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgeG1wTU06
                            RG9jdW1lbnRJRD0iZ2ltcDpkb2NpZDpnaW1wOjZlN2UxZWE0LTE2ZTYtNDQwYS1hODRlLWE5MmUw
                            YWJlMjJkYyIKICAgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpjOTdkMTZjMi01MzZhLTQ2ZDAt
                            OThlZi0yNjA1OTQxZDBiZjEiCiAgIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo5
                            M2MxY2RlMC1iZTgzLTQ3OTItOTY1Yi1jOWYzNzA4MDlmZjIiCiAgIGRjOkZvcm1hdD0iaW1hZ2Uv
                            cG5nIgogICBHSU1QOkFQST0iMi4wIgogICBHSU1QOlBsYXRmb3JtPSJMaW51eCIKICAgR0lNUDpU
                            aW1lU3RhbXA9IjE3MDc2OTM3NDM4MDQyNDAiCiAgIEdJTVA6VmVyc2lvbj0iMi4xMC4zNCIKICAg
                            dGlmZjpPcmllbnRhdGlvbj0iMSIKICAgeG1wOkNyZWF0b3JUb29sPSJHSU1QIDIuMTAiCiAgIHht
                            cDpNZXRhZGF0YURhdGU9IjIwMjQ6MDI6MTFUMTU6MjI6MjItMDg6MDAiCiAgIHhtcDpNb2RpZnlE
                            YXRlPSIyMDI0OjAyOjExVDE1OjIyOjIyLTA4OjAwIj4KICAgPHhtcE1NOkhpc3Rvcnk+CiAgICA8
                            cmRmOlNlcT4KICAgICA8cmRmOmxpCiAgICAgIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiCiAgICAgIHN0
                            RXZ0OmNoYW5nZWQ9Ii8iCiAgICAgIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6YTQxZTg1YzIt
                            YzE3Yi00Y2U4LThiM2EtYjJhYjIyYzBjMWYzIgogICAgICBzdEV2dDpzb2Z0d2FyZUFnZW50PSJH
                            aW1wIDIuMTAgKExpbnV4KSIKICAgICAgc3RFdnQ6d2hlbj0iMjAyNC0wMi0xMVQxNToyMjoyMy0w
                            ODowMCIvPgogICAgPC9yZGY6U2VxPgogICA8L3htcE1NOkhpc3Rvcnk+CiAgPC9yZGY6RGVzY3Jp
                            cHRpb24+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgogICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAK
                            ICAgICAgICAgICAgICAgICAgICAgICAgICAgCjw/eHBhY2tldCBlbmQ9InciPz7WRwqGAAAABmJL
                            R0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH6AILFxYXHSBiywAAIABJ
                            REFUeNrsvXe4XUd19/9da2b23uecW9UsN2xcMO7dlnsBY7AxBmJKCL3z0gIhCUnILyTvm7whQAol
                            AYJD8hICmGIbGyNjGzckW7ZsCdtylSsustrVvfeUvffMrPX740q2JFOMrXtV7nyeR4+u7tGZ2XvN
                            mu9eM3tmDZBIJBKJRCKRSCQSiUQikUgkEolEIpFIJBKJRCKRSCQSiUQikUgkEolEIpFIJBKJRCKR
                            SCQSz4CSCRIbc8Ld40dn6JMnYpg9I+PDV9Z6+55WfsmG9af72Numky3OWBr3V9T5E51stnU6p/Ky
                            dt8+dz+i4pIj+N7kLYkkwInnzTF3+/1XSrV7behyW+eotYeMGE4b8KwQRBSe1Dr262o68YUtGrth
                            P7pnR7TFEbfVB3Wi7yMU18QaeR0jrDWIEsBkYKJHIItBMfdKNlqQa57zi8Py25IXJZIAJ34nDrkz
                            7AT1V6yk/OAhD4ypgDJAgsApQa0BR8AFIOaKUoEmgK4fxx62dYnjsT+8/sCZD+wItjh8iRRmXN6w
                            sjD/SVIiU4MIQmYZUQNUFOIJhg2MMehmClcHBLbYmeXSOo6+49ZjZ65OXpVIApz47eJ774o/fdIP
                            /b2rATIMwwzJDfKeomRAFLBQkABEjIwUHABVYCwjuKCImUJ8952PH9r/je3ZFvvdqB9VlJ8LWWFl
                            vAvbaIIDUDkP5y0AglINCgSTAVYmxLkbCc4KCIrKGAxW7Y/ccWL/F5N3JZIAJ379lMOdve+viPnv
                            bewGQ16wOlMYUpAS2CjIG0QCYqxgbA4TAYqApwAYA0GEUYs9rHz++gPtJ7ZHWxx6W/zISCn/lEXD
                            G//eCRAyoI41HFlECuiLGcZNgBWHrAR6JoKtAUsNaAQZU/Yp3XHr8dnRycsSSYATz2DfO8ONNfyx
                            GvNNfu+MwgcBGQZUoF5hcobGHiIx+nyGUeMBQyh8gQgPy4ygAZnkiFnv3x44sPm/tidbHLZUPzZe
                            tv8R6AOpbvJZNEDhFYoeVIo2MYxkaHhfAWTg4ZGhCRsZRAKQwIuBsRU05vcvP4H3Sd6WSAKceIpZ
                            d41/oSWND6oqQ80mnykCbGR0tMQeRX7pKOt/xV6IrSYdlXl78i8lnujUwqmiZiBTi5oCXAwQYhiw
                            sLOfuv8A+r/bgy32X9z7Ky/ZX0EimfXzvRszbnvar4ohai0mW36zXftHau7j2ajf3fVm3zFj9i1q
                            grcVhAAjGVg9Ils4CT0vuP3+k/Jjk9clkgAnAAB73FVFFWGCgYoD8HTURxw6hddPHjCUffXCPclv
                            /t33P7KudWPPvXttu/nP5DxctBCOEAgYANQhasDxA2Hfb+/dXL4t2+EjDwtduCo82hfiLiUKOAkQ
                            2vSBZEk/eVjB//ydw6ja/PtveWDU3bqmfLuPw38fxM7INcDDwBAQFDCIUCYpgv3z20+izyTPSyQB
                            nsacfV80y3vdFaVpzSINCGrBXIMJ8NFgyFb3HTewet7Xd91z7W8ra78lmhnnl5SiB0AzRCiMCmoG
                            LACicO+DBxf7bcv22G+RPCxKL9D10w6igLEBqoTc6d2ntrqHfXm/oerZlHXUjeVX1wV5r4FBsAau
                            JlS5wEYDFj96z4n5UPLAxK+Dkwl2fB7X+No27CwPgjLBiCCLBlwbzBVcvGz/vhc9G/EFgHsOp/rO
                            g7IDB4guKjXA2YAeAbkQSIBa6EWvWT6697ZsDxWdpRvN+WZQBCbYmm5fdkS2/7MVXwBYPK94n23l
                            nwnMYO0gOIILQIiAgxs89uejZyYPTCQBns4CXNEFTS5gRaEREAMEBqKjxw/baew9z6XMpQdnrxmS
                            uLYbFC1RRFVEVMhEcHPbLthWbbHr0sdOFVDzqSEgEdQQWHz39Bf4ec+lzLsPN5/MSG8WLWACrV/C
                            50FB8Rial73vztE00kwkAZ6W0w/LY6NfCAECGAEpAUQgMoj16FfPnztz1XMtu1ms+uJgtKicgCNg
                            IiGoAXPRevldss351hm3P8mmN/iTjee+VRUUA0yw//6vezS6z7Xsu47LjhESBZUgZSgzSo7I2fLC
                            dZiTPDGRBHgacn/o7VlTiagERIYygVQxU+N/Pnr4zL95PmUvPmD3Tz8GfMN6B2aFcg6jDFvGvrt6
                            us351n3lwLAYUxAAVVrv/Yousdx7fPaHz7f8Uot/UHUQ62FEwMToARjM+76aPDGRBHgakmm41NnW
                            079QApTxcBjfIisVdkWvqhFRE4NVoRShhjDHlldta7Zo1lYHqOgIAWQAjQoQ4GL81y1R/gFWF8Gp
                            xmigDGiMGKoxNjZepY0ZiSTA05GmG3jQ13Gj3xBUCUe3Bq/ZEuUfOaP1f50CrIQohGAqsKmxRhsn
                            b2u2GCjGvqZe2CpBKcISQTVgt5a7aUuUv6+Ti9VHdcbCKwG5VVKJPs9nJE9MJAGehhiv7cxOzHkS
                            Pf0uqCbt3xLl92k9RmIAEhADFg4SFcMky7Y5W9ihomI0DAhCAgKgEMzK6L4tUf5XDrcylLmbECtY
                            sYgxUmVluOxK/spb1sxM3phIAjzNUHDW5omXb6R46o8Dl1ui/MgoVQJqFhAEeWAYaqBXh923NVt0
                            PL9YlCASACEEAqyi6pIMb6k6quhnqwAOAiMEZobLIb2+wSp5YyIJ8DSjl9W7F95M7LiZmPIEARjx
                            tNuWKH9ZSWdyZtEfFEYATwaeobGZF9uaLXY1vbeQEsQwjBqIKpSsfXhUjt8S5b/1nu6u3Uh7OzNh
                            h5wBiOqsiKuu2s+2kzcmkgBPtwau2pfQZs1MBDxRdbfIZolHxuK5QQiBCGpkYgmWemqVo1/b1mxx
                            T5ndA1IIJjaNGGUIW+NFdtkS5d876o8VYsBnIPboUifkwivbme6fPDGRBHgassYX/wXETaclFOgz
                            /MYTl4/t+XzKPvuR8d0abPbPoPBsERUwCrRYdI3Xj21rtpjdoJKIAhFBgPUrFRRisne+6Rdh8HmP
                            Nnzzz/uUIdyDRobRXNsadmqrSUl5EkmApyOHuOaKMtP1Ww8EEztwFb1YvPj+duMfnldEubb4XmQ3
                            D6TIvCBXi2gFHfErHz52OGxrtrjhMNMVLUOMCoVCdMO8tcfSNi15PmUfuaj35a7UR4wZArEFmIFY
                            uKZU6/JYx+SJiSTA05AfHUCjw4EfhFRgrRAkTGRVh8La+Lqz7vWvfS7l7ntrNUvEzFMRKBhqDQIr
                            etHj4Fbr77ZVexwxZN7pNE4kUF+/K7CnAMAvPHpx5zlNm+x+rczo1Pm7GQ3kEarqFEroSITvN7jr
                            pMbK5ImJJMDTFAIOEepojDnyQmGEUFONrHK404fvP6cynVsFEIgYqoAIEEXRbzP8+EX2C9uqLX64
                            f/ZtJVrDbAGNMIHhjMBTwJjy255Lma2I1QG1e3qKh4hV/IyMnzywZdIa4EQS4OnMsoNt2/HguHUV
                            TJcRuUYeGd4oNOS0561Vdegt7UufTVmHL+tcvfci7+tyYoZhw9JiIkCgmFHV52/r9nhBK/xLjIjO
                            1PAs8GQQFch9nu1yQy3H3xC++Y67Ova3lfP22/WgAxaWq9RWYikLG8QXAETZdanMLzwg1+SBid8Q
                            HCWmA++9eyy/JjQfHdd6VhEdFAZKHgoBB4eQGwz06kdf0Cr/av4Bg/+x+fd3u2PtEa168DIlv1MI
                            DiABeEKjRBREhFzj+N1H2YHtwR573qALmhqOr8lAEZFHRccy+gUojQJV+VhD/dLbT5nxys2/e/qi
                            0UNX9Pr/pczjyTaouoiVlaW5LHYiuQ8RHHTV3oMjB//o0JlPJu9LJAFO4Pfv87NvHOeVYmsQ7MR5
                            bpohkIJ1Yq3whjy53tANxstj/Q4vGPX1MTnl0M3cJWoJSwYRAR4Z5hpz+C2H0tLtwRZ/sESHF1e6
                            WAP2UqMgBUQJQhFQhotRiZ1UqMxcDhesQsE500517ec54m4EDzy9qhqQWFK0OZq+RGmKaicX37Hg
                            uOzbyesSSYATT7HLUn1NBv/DTICuATIKgC+ghiAiYGaoKoQ9bFQoGJEMrPAzvCUioukF4w7YK4vv
                            vu6gxvnbky1et6ze5a51dn4FOZjIQ6KBhYNHjYxcFTW62oInEtijo8QKMiawNkzcsK0FUAUpBVgf
                            IVmGuQbvufY48/XkbYkkwIlnsNOSzutbNj9fhfskCmAVFCwUsj5fxMRyNQOeyJ7GMjG0xtPnpqkC
                            IIGVMDIjt+9cdLC5aHu0xTm3l3vfN5Z9vxYcRhQxcZcMUYVj1KogjWyiC2QEQgArYiTNzAbxBQig
                            EAzLSKfH73nkpe7i5GWJZ0N6CTcNefLw1gWn5e1dg5ZXMk/kLJgYTE9Ev2ACcUTgABgFC8PwZuIL
                            oBfGrnhha/zo7VV8AeCSg4v77z6BD989938RyKAVIiIBDIFXZFAiNuptAAFkVMnb6MoJOyhtiGGa
                            Kg/Mzaozk/gmUgSceNa8ZFm9z8MVf7NNOq9PLFgD2q5G02eoDZAHi9oGkBCAgKy2alh/NtzsvXnh
                            wQMrdiRbnPLzNbs/YWf8TyjrE9kAGcxYAAYINRQOsAD5ALEONnKXQt2MJHfuXHS/dc28WX+XvCmR
                            BDjxnHnFsu7HF8f4/gEp9qEa5B2BI0E5YkjCjcbG2285rP+908UeB101cpN3jaMFGXIQuqxgBlir
                            kYxoyR3HFy9JXpNIApzYosxd2tFWzBEUYFaIAg8f6aalr+z9s65qViHTfgipUBTKOPz89pNaJydP
                            STxf0hxw4lfQgAjATCAogpppawnvGmhIExEEgrAw0Zi44eQjiS2BTSZIbE4uCjKAKIMUMDR9B0pO
                            awTYAFUjMARhwEgaOSZSBJyYHDbZO0s0reepFAApKwMgYjAoskpykkSKgBOTJDqqSAkMnmkWApQI
                            MYW/iSTAicmO+5IZNh0IBCgRFJxMk9hSpCmIxK/W343+MZ3j4fXT3woFKdRMGCd1m0QS4MSkOcXE
                            6ocJBZo4NWJ6R7+6Puu8kkImzjJKJJIAJyZdfNJkMJDmYxJJgBNbS3h1GouwqkI1hbyJySG9hEv8
                            RhFOM56JRIqAE1P5VI4GQgQigVWGwExjaxBUyYImMnKqklFNMxKJJMCJqRiC4+lTMqa1HZLqJpIA
                            JxJb60GUHkKJJMCJrRL9JRtAwckOiSTAicmHFAyFCjZswJ32Dx8lpoldGUxGQ/KRRBLgxGQGfIlN
                            nklP/yhpbXRiS5GWoSV+bdSX2ESAdcM5yMk8iRQBJ1IIPLWkLGiJJMCJqVFfUZ6Y/lWFmcZjblaA
                            FTVUGSQAJC3LSyQBTiQSie2dNAec+JXQRCCcSCRSBJzYWiKcXjolEkmAE1MpvAqABFCCEMDTeB0w
                            TXQRIYVAIKxUU0qOlkgCnJhM2VEoeP3JRNPZSYhISVUBEhISAoXUbRJJgBNTIMOJRCIJcGLrim+a
                            BE4kkgAnphBNr+AAgBSqm76PTAODRBLgxOQ6BT11+roCFKevLZRrJXYKJmJEVeGkwYkkwInJD4I3
                            /J2mIDYYhAjT/IjoxBYlbcRI/GbN0TTqnoiEEaGqiml9PlMiCXBi6oR36/DhpRUvHuV/GmW7PzOq
                            Ta6LlA1p1YPMnBPW/fuCk2b/91SZhACBgji9lkwkAU5M4lD7qTdODEC2gNy8dln5kiEf733Au9Me
                            qOgVkAgixw3Cq2vRDEwTGz4ImN8GmKGAIorg6XdggAiIiEFgrMKsk/e7Nn6DNXajcbZB1eMdaS8W
                            GQQzI4hg38JfuHNeXPf/DucVz+W6I6qCDIKpcwEQAVihNCRIJAFOTDIbjqX/XZKhvfyOzuC9nfpT
                            Q3FolZD8QTBhqK7tzsvWsQtaR2KrOcgyCUoLxAAYY6AiMECQZ/jk0+KrCqL1SSqIJqJQZbK1YsCJ
                            1LVmu1ia8YpgdMBEEau2ur/CGx/tVeMvvM7ns1lu9V67JeHmQWQP3ngqf/W33Y/AhEZNIwI0k0ck
                            kgAnpiwK3lgCfxXvuKc9tLp2+ywZjSfNNPaYMeY3PjBCXcoazfHYhZgG2FsIC0ARVmECAkAEkEEe
                            ACF6WllFDYE22/j8tPgCBFJVIsT1p2QSC6IR9sFpCyLWAM5GqryRwoVKHTh4K7aIlK2KPK+f9QlT
                            9vZbkWW7vuiqNV+CtkJ/Uf3purI/HDZUX7ka63a79qi5P9tQexC1QjEHjGx4ICUSWyzISSZIbM6+
                            N4gKC1gNlDwQGcuPt/S+u5QWrK7O1SIHR/l85WVXMWoksgUrDAgOjAoRDANoALMFKCJoBMHBREBB
                            6yNrgRBtCGsBCFj5GRo3cST8xIIdhgZsCMxVjUJJVdWyqQRwtXjJyDIpxUiakXBUVIYtlaxdL5Q1
                            hTPlSmoiy8pqSQSs3KlRDTIXISdZ0yS9ZV3lvpFz77MCkwtcH6mKQp0n8+B9L6GDkqckkgAntjh7
                            LxQF6/pENAqjUjecebxbY8+gCmMIsmGKQif+pvVzFhkUpQY4ZXhmICrYGSDGifw+EJAyIghgAZOB
                            0YnQUpSg7AF1YMBHRKey2SCNg5IykZAyRQFFheZmQqQ3BO8eJEbBOvGzyaITbnejDjUsdXysG0w2
                            EligmIi8icPTgg8m3XS5GalEsrEjHn0e4YHlL2senDwlkQQ4scXZ64ZKxRm4QAARNEQwswp40x3K
                            62PVDTGrIkLIoFEC0lTUQZAxo/ZtwBUQtWASKPWUTUa+ZAWbh41G0PppiKDA/n36sZ8ckV30m67x
                            /XfHxuLVvW8+4vMjW5tNUrN1O2nsNDI2bYjLVNhFCBqg1eNKs1ukq73IQGbMmETNAqQwZOXXiS8A
                            KEW1SmWgui/G/IGdM5x43am8OnlLIglwYouw/+1d11/qhaOanV0JYJQmdsQxTYitbiq8T0W+6/Ec
                            0Ff71e0Cs9g0IHWpJCYKO2qpPF40eHVR9767cF7zM1NxP2+4cd3+t0v/ghZ695ZlMbftZLc+0pWl
                            cXPhA4pan4ygvpqpcLBRFfSrxBcAhL0z3nW87eSMpmmWnQfH2O57yAx655pQ/7/rThiIyYMSSYAT
                            vzNn3FZ9cGXXva2dV0e5ceeD04zVQJmgItiw5IAwIcREE+mCN3ekTKrVHVPO2innC58cab5/pwL1
                            Xi3tltGaHx5Fva15j2+4TWi8puYMD3/LaHtwPG/SLjLyiTYaH7CxMeYNzfiNb9goQISNtTQepBwK
                            1nLmDUpfySCHh/ozvvT60/o+mrwpkQQ48ayYd7P/x5HavAkcd2JYBPUg66AxIihATAikyJXhAuAh
                            iJHABogWCBQx5O3yvqJ8ZG3d+ETMx8eXHzmwfHuywWtuldayMew7RN0Dmmid8UDp3zoktMJbmunI
                            rCKI1FrOYCqisDoRFEIEF6kH9QpDILUiHJ2NtCYqP3TMjOr3//PoxqPJwxJJgBPP4LAbxz/X0+Z7
                            Vak/Gg8hA1IGKWDX73sIEGRCUAKqiXdxaqGBHdiX9Zusoc5JM/Nrz38Rt3ck27z3zm7eXpf1Lxwr
                            57WM/m1lsoMc2S6EmEhCDL4VleE48woxhtBVJVMDmaVQM4yEwHmLccPxM/CKLx9FZfK4RBLgac67
                            lo7MvbqbfyqDvCGY5qzIXXBsQkiRoUKgBlwAAgDY9asVIkEFaHJcXiD+jIELFx1XzJ9Odnv9grGd
                            76xaZ/STvHakqs+EzawjWh0iD4JBqrAMlLnS4yXCbkJkraAXjLcixlky61jid06a0/34Vw4fSvPE
                            iSTA04l9bh2blcfG37SDfICthYrCaIQVC7UECgohgYLhhFE7gGIdDbgW6I/7Mzf/1iPp/GRJ4EN3
                            Kf/80fjhCP9Ro6yBeDjCNAnwqmQAjY7imKjkIlwAJBYYVyYXA/Muee/0K1/SvC1ZMpEEeAfnFbf3
                            Zj5U2feipk8FQ4aM5FQBTB6eCzAESgISi0gT8w4UgTyXRX2g+bs1zZd+cAClZVa/hpferG9eMxb2
                            J/CJZdQjQeoB4wKkYEhkcVUQ33JWxlWsIfZeo0OfwQJn8bkFp9lrkxUTSYB3QA5bosebOv7pajWv
                            asBXpbG58QAZgCCQoIAxsEERnCITtAPjiv0HzO/9aH9Ku21/R165QE6/p9avoZYX2GgiCGqML03E
                            eDS2GZQHLMVxEeSkiArwcMbv2tn6n33/lHxNsmAS4MQOwCE3yq7tGD8bMvP7GUUQK4I3yIQgXCOQ
                            BUXA2xJFnYOMtnNxl99+PJ2XrPf8OfcGPeLOdvy2Vb+rICugFKFKDjomMBkjemE4Q6GSmFkC6tmt
                            +PWrT3J/kayXBDixnfKmZeKWj/S+trrZfLsTQQwBygYcJzLXdl2JLGawUgJoAVHDYO6/s/iY/C3J
                            epPDKVf6rzwRzFvZks18uVIobypFsmLbQeJAZDSdmjWQAHXRNUkOmIHGyvkvSyOQJMCJ7YZ9FkcS
                            5Z6LktXEZHliyxoFwFMNhUef9KOGR6UOe2b1v5YufHzRYa0qWW9yOevKylVkvvS457dMrOJTtVyP
                            1+T6G7U+Ubow18W8rUaseqKaYZafZfuS5ZIAJ7Zx3ra8bF63urrNIN+bbYYQFQwCgcACqJRwRBh3
                            Brk1Ucr2EXu5fNkVR+VpKdQUc/I1YU6o8X9Waf26BrinsFRHmVOQezQCTagSAdFKXFeKzOnPq/fe
                            dObA95LlkgAntkGOXDp+/mjZeKtHsICCOUMGgq7fOKEhQAygbLCXjX82lo/Nv/nAmUuT5bYuL56/
                            +sB+DPxbh+ggG7gbLA9xRM8QyiDSz4aqWuo+F2y7aaufD6Dz5SvPmvOzZLkkwIlthENuqb8da/vG
                            nvFwyoAA0RpwAIIlRHg4XyN3xZKuhD9+8NjiqmS1bYuTri4/PFLav1ap2XDRjRFNMoiefH8R5Ina
                            mdkxkDbAy4cb8slrTnc/SVZLApzYipyyZPT41dL/Ve/jfp7JWQhEGTAKgYH1QDCCptaP72ztp688
                            Mvv3ZLVtlwOuax8wO9g/Wt2N5yFvCiolYh+U1EogGOuCSjABZIaI/mTRWfYryWpJgBNbgaNvWfea
                            ce37Si9ijuUIRECYkUMgalGxoFlRJ+Z8+XCj+ptFBzV+kay2fXDoxWtmx8bw3RTEs6LT47hnEfFE
                            TXbYiPjouNGssXzcyk73neVmJYslAU5MISfeWn/s0cp+3lkliR6gHKolHDl4RBgARrPlu2ThbT87
                            wi1MFttORzjX6IdWjoe/yQy1o0rDcxhsBvdwZexOVurximXQaE7Wdd9928v6vp0slgQ4MZlD1CXB
                            rAphvFXZhmY1AIYaQlEzEAykqEDRSJ9zP9jJtt8x/9D+TrLa9s+LftS5P7PNfqiAEAGhqNZY68O4
                            EepoRoYRPj+nRf9z2Sl5L1ksCXBiC3PYLe3jxqNbQGRRo01N3wcBAQr4PEIkgKLr7WnLz19zdN9f
                            JovtWJxx2bo/XUH88Sj9DZgOmbrZDpkOkDBYpAtlbtm4uDDypmtflqWtzEmAE1uCM28S8gX97WMl
                            PhmePucSTVRYRxky9EBqOzVx9fAxbub2dn+n3bCGRmmIDmz643yUmYVkDyMzkRQR6w88CooZG3+H
                            Fb9ywwgR/PrjlZVE640/qwg7Z1W4+Z7SdW84jWR79IXjftx5Vzvm/7vOZW5WhSfVkrWSj4siBwCB
                            5gqye/TT6y87lX6aek8S4MTz5Khbw09XeH5pASKl9WeuKQB0UGsDhhUmmP/Ye2jFh+YfuPN2Nfw8
                            5eaR168bzf+iLBr726iO6hKlbYB4o30hCjBENxVgrp9RmEIIkIlj6cHCyDb+2MOiGavRrmaNOVR9
                            YtFLG1/cHv3hBZdqs1/LRy1Mp2TemQm1izyy4XMB5RI1vGhY33DRKSZlV0sCnHiuHLo0XNOt9RSv
                            NQw1sXFGAIcSHTjsYfSc649yl25v97bfVZ0vkdN3EAr14pvKljKmbvSUERNvHAELbSqm0E1PapuY
                            iAFBJw4HJUU0wCYPI+ZY1YJZhqgHJmjtR+5+WbHr9ugXr7imLsbr+Pk1lXt7M8qD3thhIoqqaia6
                            b0ks2fieLX3/RS+1V6eelAQ48buK75KxK7t16yUV1WhqMXEqxXoiKYY5XBd7+s5fnJTfv73d20EL
                            /Lcq5TfBezAAlgwEQjACMiGKWrNBYgkAR/jf4rCRgKgKXi/GiIxik/8TtVQjZCPXwpSLSuGVnnjg
                            pXaX7dVHTrxUXrqGw0VWbJd0wkaqMDBR2aMmQ9WL+83rv3MqpR2PSYATz5YDFuutVYyHEMOwMqJG
                            QA1gPUKwGGYsbbp4xsLDs+0uOfoRC/WjZa1/HeH7QZlE9KwlwEcDMhCnqBFYNhZXMdzYxEGVwmYR
                            MaCq631XCQibn2ZM8BohTdhc1Jdg2JoMS38sf7rojP7Xba++ctxP5VXjnep8NhJAucbIDacyIoZz
                            KMQCo7sOjX30klOG0u7HJMCJ3xr53ty7poPsBFW2E2IDCBQZY6RCbM4BbhKjr7r5iGzd9nh/B1+v
                            d1dRXwSaONeeFRCtYK2B9xKJwMRuk+RADGwquKKb+KgqeBPBnUh/sUkZFcesGbCmZh22UUvAQpkt
                            1JcSx3e55+WzttuDMk+8Wn9vtF1/gSGegkbhxibRf1Rt7DrLv+mnJ+bzUw9LApz4FcxbItRVXdwN
                            fISSAOtPJN6gMOQEjaj39Rt/4IIjm357vMf3/eLJ5tXrZrehIAIBqlCN0DyiWdsLZuXxJxVlQ0Fk
                            k4jXBn3eLxdrCgOd2r5Tgx9WMmzJjJa23tl6roYb9ocLTzZv3p795/QfjZ7TRf7mMXIvs8LdTR5g
                            LBWil9l95gNXvNRdkXpbEuDERpxwa5UFMZc/IeZUybooquZm/0O0GfGd2443b9qe7/ONS+SEW8bp
                            56wARAECrMooIdx2x2nFyZNd/0sWdF/6eFcuJmZRcQwbqFnTA17zgb7+NfsuPGHWdp8P+eALqyXE
                            2ZxNon/S2c7Fdn9Xb11r5fJ7zi0+m3rdtgsnE0wdL1msWZvdPb+UeGqBGkWtbX5mAAAgAElEQVTV
                            gNDEAgBaH/6S8vnbu/gCwC2r9WqKUFVdP2ULeOLBwb5V/zUV9V91QvPKJjcvMWLaRCRaGy6Jdq1Z
                            55owc8aO4E+3vyY/HNDVE4GUKqDUzyPLrLfr2tw9yKr91BE/8u9JPS8J8LTn8Jvatq3lj8Y87dlA
                            hogMAEFZIKIQ67WR6Wfvm0c7RIfpGibl9fMqTE9N2y44evcpO+LeksZIpg/Katl1ImXNTMMq3YHG
                            fbedy4cCdc+yH5dY2ToMzxHRnGggGnBbBZ941TVxXuqBSYCnNZULT6yieOYGTdow50s1g2zAcC0f
                            v/1w86c70j1vvJaZFLr5mt7ElqHmuF8VdRc2+oz3BYaot3wEl77p2tUHJEslAZ6WHHFT+IOebw1L
                            NBvtbpsgMqNg/Mni44p/3lHvn5LwTip3n9MMZHSukMs3/6yM2J1IzN2rZn49WSoJ8LTjwMXl29ca
                            +e9CxLAxz/g84/ipZUfm6UVJ4nlxxzmNXlPK3Z7RwW0sjcRuZeMBx14YLk6WSgI8rfCS/4eNDjVn
                            4Ohg2UMpQOAxzPGa2Q37tR3yxuWpXBZPRb809dfALOQBaFRtmYgykA4YgeyIJr/p1f1l0615gSW/
                            Mies8KhmqlgGZWSVx2viAw+/KP4g9cptB5tMMHnsdVP1CwFIdMMqB4LGGiW3MMf4Wwcsvfqqg2l0
                            Kq7l9Ns6546OF3uW1D2vEVu1WJlhvC4eA1bdc7L786m4hq0xD6EAkUB1/XtAUsSnmmMLcszl/p09
                            0M5FDC8jm6mKPJgFXB9oPFt09vCUHSd049mz49E/bn92LNT/kkljLREiQEyMIFGcqhw772J9y43n
                            0jdTD936pHXAk8SLb/ILa9LjSN3E5or1phYSDFBYNmyzo68+nCY9o9luV3SGX9DX+PQK1O/sr8zq
                            8Ux3yzX2otg+A+3VJjZZuZRx+uj9L8+2WDS+65Xq+4yazQX43tN4ykZdx14Zv90WvEKViCY2LgtQ
                            06ws2+/a0+jJLVHHnj9a8+ZB0/9JoTg7RBpgZ0uJMYdKGU3eV/TiGikk9Bv7kRvONBdO1b2ffKn8
                            XtmrP9HNsn1IEAgUJ3YZqsRQ9/Vb+76Fr7EXpp6apiB2OI5f6t9TK45z6jZ56SYEDJLctvTo/KCp
                            EN9Tbqh2oyJbu1rlI0Glr2P9nkbJRrUFuCJP1Myig1NXUB9/9YQbyv86Y3HldqjG2CjaNYoeEQXa
                            QmHHAfP1rH7u/6xqNRAlz4zJOkaodGrXWs1CC/KgNpkzsZ010v3veVeNvHeqbvu6V/IPsj7+AkPq
                            iaEXWAUGAvLMg+MmfuUll/lm6q1JgHcoXvuL+txVQb8WDSEigqiEGCBDRKSqu+Rod+hUXMeLFqyZ
                            dT/TL1sIUCJk0QBkwQKQEadowAhjon8qTADWenrreMSFL180mj3f+gsBWFGzUrXRnzjFAzyBqkwk
                            bhd4i2EWqQL0efv9GVesO0bq0YuEXKHcVzB6QggeRFE0FGQR6qhzJMIJvMulNTba7vuHEy+Pb5+q
                            u//5K7Jva4vONxJ7RqsOwfvIaLjMjrZKe+9jNa05dX67SL02CfAOwXnLqsFflHQBB4siMIQAiIWR
                            DkpjdN6wO2MqrmPOzWV/lGzVcGngKYMXgTQySAhQ8hCxYJ7YBOLFwAdFoBI+y9Du8Nlrg5l/+pLw
                            vERYzFOzDlsVAgkxlJjCRMoewvOdeTtkfjjhlz1aKI2WixIbRjFeUjFAiogQOIgboIBSLTnDKAPn
                            gwjCsBVGS3xm3mXtj0zV/d/+UvP/NUz38pqymcQhZurXIEA8xyFC0Cd6xehbro1JB5IAb/8sGDfr
                            SgqZsEAMwJ4AMIItwGX1g+/uYyb91OL331U1B2q7Mkdj7ZgDGG30BQvujqHIgBAaMBJLiQRQBVIF
                            KMBpBh1X9BpAm4rTynHzvF7STOw2o63/joGgupGfE8zzWgFx4KX16ZHCZUwDPVeb0aYxD1Ux7FyQ
                            jDKkrsXMYKWqAD+W1bRSlYxXDJOTaENehiwUvbr4+HGXrZuyTTc3vHrw/TCRytLuqpkz1uuYN25G
                            o+aHhiu66fY1fGbqvUmAt2tOvbnzucHMoI8ZGgmiAdYKggGGNdy5/MRi0vPQ/q+7ffOqdfYhlpCL
                            0nCmFZj60NZxqOuH7xTYteH3261R77w7jw3P4NZHgjEwlpEbRl4opKuwnvGEdF5/9IL6sud6LU3F
                            OHQrB8AEECGQIpKoJyDUojNmFjj1uRR32GWdV9aQy8lnlTHoGUG7jHF35+wIqYQ+666aUeiue88I
                            Ozey6veGbe/KOtLMPgl3wlvNjT6SeRkLGQ226+KjJ167+k+myhQvKuK+LRfvC7UOxKzXskHHvDWz
                            Ok16UYXwjQ9dPpJWRG0dF008X1559/iuvxhvPEREloIgV4vSlSiCBRtt94Ic+PBxxSOTfR173BxW
                            uV5vWPKmoTqAYNEKAeNNRVUBQ+oby07p3yQX7rHX996wCtm3jSE0fZfa3ICJE98lqtGk/LJbT+az
                            n039Z9+q7/rlaPiDnvJpxNzLBF2vfhjMIJjg1bv7T8+m7KF//M/q/1hV2/NykBepMnZZ5b0M5xwf
                            EzWlY7P0xJnxjV88yv7WqPign+j1qnKQggxEQEpBMjRMjD0rZm1gfPOOs8xfb/ydV18+bp5EPr/0
                            vGdl651tbUYBo6SqAs6IfTknx/++8mXFlOxS2/+C6iNF5j5EdVs8NQaZUBmEUkExs9ldi17N56Xe
                            nCLg7Y5b19EF/apVFhgZEYi7cNEgAL2M8NGpEN+9F/TW5p3Qctzskg/ImOHgsa6hMO28FzS6zcUX
                            ABad1PjucGi/3cc6lDHTXHUdWVagApPDmFRnHn6Nv/zX1XvOgt6R+11bf/+Aq/2K+0Z7XyyBU4zh
                            mkWsj2FGZJFC9XHEEkMxLpzKdumV4YbchFpMNydrg1ZkBplv7pLbWRFndyWee+WT5omD5uvlJ16y
                            6rW/rpzDr/A/E+BwBWWkECIW70J/U/x9JLbKTO+CzcUXAC46sz/ecGZ2hiU8aErb9RSG1KitQHOY
                            fUli6Yke/f1JF418fCrscdfr8y8U0d+DoqnIrMkQ1paUzQE4L70/at4PwstTb04R8HbFvMWjr19X
                            93+3yjzIO3jTRSZNIFPJY/mPdx7d+uPJrP/9d4a+S9p4or+nUjszwNSDrQtEF2BiBoTw5N2nubm/
                            rZwjro3vGyX9JwNxFJmjFeZgYKyijhX6qfGTpafwWU9Fztf6D3Sin9dj8+ZMUINYhE3GQp4UKqQZ
                            K/UC+4bx1vdct7EHNV937Sn8/alsn0Ou8PdGoRk2cKfb0N3zSkaIOESRZmR2rOozDSOezCCzWVZU
                            7YsWv2rgH576/k+qhTXiYSxF3HDyBimEXF2rd64o/KVHFfrOr5zY+I0rPI79afWdMtI8KjUqORMN
                            +iTCGap6Ea45x/mPX3NWY9Ij4RN/2BksKbtafSf31BoUYxoksWcJbShjyXnmxalXJwHeLjj75rUv
                            uF9bt3sTByQ4EBEyqcAxW8c2LD90kE7/1ouL8cmq/+W3+J3urmiF8z0lbnq1VcbegUggDFCUh+45
                            ufHCZ1vewdfGPwfqD9ecz8piaWtyEGEwA4LKDzNfucLbn7dM9ScBjUyjz5qKlT1Ds4mMd4G8EpGq
                            ZjCkMWruyI8jxigGV9x1evMNU91Gp17R22s1qkugfbOyOo50GPtYysYJItAoBERltogiRCZGoj6m
                            qmso/5xD/bJOpJNc1NWRs76nxJcoqASbZ/ylY5r1p//tpMazerF3zMVj/zbGfW/JtRwRkAPIc0SM
                            GTeLgEddUX7thjMHJn3X3NHfGRvu5P0POV+NGKayIjsjQ70uBO1vufz7N77WfDj17iTA2zwvvDl8
                            xyreoMJwRKiphNgcUlV+jxz7XXdE48HJqnvOzeWsoco+JogZOQcJAucJoABYRunp/odOtfv8ruUe
                            cZ3+WRv1pwO5rBF6Y6XJBoyWUOmDMVIhwLBqLzI1yaAS9dZoJhrBSqJqTUZexBGtqzUO5ipPaJFd
                            cseJ9MGt1U4vv+axnR8Kg9+TunUE2VBkIa4SyjJmrSGKENHHRj1EhLJMudKqgh/O4UYqg5ksogSu
                            iARQikapWyl+es85/M7fecR0cf2fXeKXKYFZUYlSQRSjKJyQwZDxf7Lw7OIbk22TMy4ee8tqbXxK
                            ghaOZG2pbg8iqm2o243cfGThq91lqYcnAd5m2e8OfbF0/W2qbpOdYz0TsJOEb916TGPSzh3b+7qV
                            s61t/dJIXqpSo0d11icWlRWAGFLpQ/efmr3wuZZ/zPyxT6zO7N9mriAJ3hA51tiJxK1N3hkIUBHU
                            OlTjKtZ5E3PnfZk1+54Ybcsvj5rFf/y9I3nJttJm51y/KntkpPjPYJunCGNGJrRKoHkEFZlgbWV0
                            bl7Fx32GWQQXVJU39JFIvshjeFKoKIhHf3TbWTOec+L8eRf3vuVhD+0S75Vluqr2PJtiO1ppjVsT
                            RzKNX7jx1Y2vTvr0zMVyB1dln3LOAIMUgaDRkr/v5vPys1IvTwK8zXLQzfG+2mMvMU/nNlBV5ILO
                            8TvVw1/fu5iUwzSPvt7PeMLE1cMhozGnyGOtiDmxrUGSI4b2k/ee1j/3+dZz7KL6D8fH6a9rlgHH
                            DA8Ds1leX9XK55KvjSb2B4q5+uyxRkZ33XYKvWJbb78zftx+68qs8T4O9WwNlkuinTMTRzyVMyz6
                            2hLpqY0oRBRIK4nkCjX1ZXed2Xjj861/3iWd71ViD0P0sLY1VjJ2k1pytrHyaoZmovvhBef2T3qm
                            vMN+EB4koThxZjUAKCAKV+jSm861r0s9PQnwNscuS3o/7quK0yurhYv0lPgqgHnDus//7Gfun4x6
                            z13iB37RptUNhNADFzlXBGqh8AHrXERR2d49p7kttr//iIXtT7Tr5l+S9/2FM4+Wypvkm80IK0to
                            ExrHTx4wR55/pFmxPbbngZf5XxrSWIudGyNsK+8+7ENz5nrxjQBU1OdNa7+2+Ez+oy1V74nz/Tce
                            re2bh3374SrL5lgxHfLeU2ZC0NA/1xYfvfJs/p/JvPcjLqj+R9kdCSVWhSHSyIxKpFc0subBC8+d
                            /Jwl05m0DO135PW3jr6k6NGZNSPPNxLf9T+MTJb4AsB9Y/yQYXHeuoZhho0t1HUH4y6AegW8HRvY
                            kvXdenzf5+b2d98TCittmN03/7yfw7UzDM2977Rs1+1VfAFg2Vlu9yHu7LtbXn/AExRt3SjKV6Oq
                            tiv2y1tSfAFgKKx+155Wvk22UUMykFaVGMu18OxMspUrvHzm9CtWTmoCn93tmrdZprH1KzyUiEIV
                            ZY6JaI9V5X2px6cIeJvihYuqWzOYw4Mx0BhRqMIzV6rUPrJv7Qu/e+CsSVn1sO/17XUZN6VCHIwI
                            POAtxhoK8oo6CgJpc8XJzUmJVt60pLY3rTX7KjFqA/i6wiF9bs1PjzMrd7T2fcMi5XtWtPfqZn2u
                            joDTqPsU9SM/OaPZnYz6Xn51ZUfHuj/1oX+obfjAgurHK5Pv5KrxdWpb5EhHhtD94s9eNfBvk3XP
                            Z/6oetOKWv++0nynGeJ/5knm1MbNEl83cqP7LH5dcyz1/CTA24YA3xKVI0CiyIQRXARX0c8p6DPX
                            HZX/5Zau74PLtJg/0n0si80ZvSwg94hQMtEFuJCNalw32A3DxSNnUJVaZ/vk5O+tM2jZb47G4iSu
                            Oz0x/U4JuURxsCD1SrNN/PQ1ry6+OFnXcML35D+64k8EAZFMX7M299bZ+E7eZv23v6bYLbVSEuCt
                            ztE39364MthzC8MMDahBIBUQZbfdfyxPSprJfRaVo3nMBroUYX0JMgVYBBUh5N6M3H2anZNaZsdg
                            3iXlBSOSvTyPVYfYeCHOnQ8jtTUzoaS7OfOh+a+kCyaj7lMu9PusrfDznOlJIVOIlJZsEcl3Q8iK
                            V9/2WnNvaqEtT5oDfpYcdkMw42LOUissHqgBZMGCyCLTlf9nS9d33tKV5qAbO4/ZMgz0NCDzBDYF
                            ECIUhFzM3Ul8dyxuPKd4/bBW34qGc1UQRcRgsxZFEQNfPVLqPx554UjfZNR97Wvc8syECyE1BMEY
                            2I6qN0xF2Yz6pdQ6SYC3Kn1Z9cOaTZ57B3EMoxZEADEW3DVv7ve2dH13dgaa3vOc2rQEYIBD20cD
                            5Qiv+sDdJ9uDU6vsgCL86sYHBo3/nifttxrXkZASnIcW6hjitPmTSQsyWp1PqLVklLpK1mmwBkRU
                            B3nBKT/sHpJaJwnwVuGEJTr7yWjOVmUwK6ABRSCUDpijPClHyu/haC5MZkmFGQaqsA2Nox7ZsgdO
                            zvdOrbLjsvCVfe8bNvaCmrI5AEBEAkCIENrkDjjvsk42GfWef9asjiO7qFbeSURzxzoaRfphnNQe
                            n08tkwR4q2BUPxlAxgQARhAAVJmij+sFC4/hiyejzod8b3ElAY2oyEOAwBXBSHOXRvnXqUWmgQif
                            Y97rJK5Z/08lUgEADWA12eBk1dvQ8EUDbRvWNlSFmbsxhFZkM3D8d9opW1oS4KnlnFu6Oz8Q9eNN
                            n8EZIIggV0YIbdnbxo9OVr1tuIEs1qgdIRDDkodX4xYe1f+91CrTA2Hzd+vFNwKAqlqmUD/R8TtN
                            Vp1Xn5fdNujqBRq988IzLVHHshn1wkPWZe9IrZIEeEoZsfazzVqgGdDJI7KaQEKY3RiYf/GhrVsm
                            q14KhCL2QWqBibT+cB9NDTKNGMjkpUqwABGEQMohB54cdNXoZNarveozxmSdnP2KAPQb1a6qdSO1
                            PS21ShLgKeM1d+geK8bxRrWK8VhjoEPwuUVtKri6+8XJrHvvgfCFdl7DsAWMoiRGUyx2Xbjis6ll
                            dnzedn1nl16NQ3hiwc1TT96e1nuYbEAms+7r/mBoGUGFrAuh7PXXxHMyCqsK9o8c/M3yY6l1kgBP
                            CSu78YPIyQRlOM0w7mpQVJCKLji2NX8y63680/eXhTfjwiWiEnJP6HKFIT/04eOvie9OrbPj8q5r
                            O7NvX2V/UBPPUgVBnl6vX5jWI7uYsccn+xooVq/tgvayWT7mOK4J0fdXcHPJmk+kFtqCdt6alb97
                            eXvwp+N8/gyTz+z48GLrHERhjPeoxS2trV93lKs/9sOD+x/bGte396KgKorMGUilQAZQJFga+bNl
                            x878+8ms+9hfjLbWjfWts4i2hgVrhAogCB1HpLFRfvneY4Y+mVx4B4t8r5XdblkVr2hwbFdq5zLM
                            Jln1Gjr+FzecN/DtqbiWU747/u/r0Doj03ptMHkfYgRrrCO5i5a+kT81ZQ+ki0f67xxv/VGGqJWX
                            E2zeHEdUYQ7aFW4j1COHzcKnv35Oc3x7a+8pF+AP3e/dlR37mdr7D0a2mYEAUQFjoFFhGPj/2Xvz
                            OLuO4l78W9Xd55x779xZtHmRZcsL8r5vsi284xVsbBZjFkPYf4Qk771AHkke/AJJeISQkEAIa8CA
                            AYOxMTa2sfG+Iu/7buNFkq1lpFnuvWfp7qr3x4xsSbHBlmdGM2Lq8+mPtlF3nT5V31NdVV0VIYAo
                            1BhEJdSAB+uWvnH3XvTVieJz0T3Fqc/lfCGpBWsA2CBEgOGxezPt+eVeNO7344+4Zuiby1zzwzYU
                            KE2CRLmtCImaQM5ng6krP3vnYdlXp2Fr86DTbtD9n17e/nJIajtyGQpmKgtyc+uxfMqbdIYT7c/J
                            H/bAW9L2RPBz/C+q+vLK3kuAxIh6grgykOlxJEtue4c9fDzX/uhVrfoTA/UT1gyXbw02OziV+Lyo
                            pmCrUbTJhFwUGSOWTJyrIhXVZ2uMc248y06ZQPWEAvCC++InY2h/XrVuBQRiBhSgl4gtrdfRXAWO
                            FWroqfk2nvmb3ZPfjjev+yz2X2spfwxKL2xT1BwLauZvL983/fxE7dk+N1bn51GOVTLdFn5NhKsZ
                            NSGKT4NjbO30HTccnFwwDV9Tmz50g/bcsbL4jZLtjbB1Eo2kGhIO/ZXqLC9Jz269eux5bzATVuD+
                            TT9dwUtC3z1kbaLygrtSWGPYcYY54Wcn0LPjse5BP8pPQ6XvgeGthFydiAOiAjSCFKpqR1nBOl5U
                            hQg7qysrto2U8MWb30m/mOzvfUJ8wLve056xy13yiQLxiy40rRCDiEGiI3v4+8AXAJjhKYCizn+i
                            sDcuvCv+zXjzvILWB9+Rz1WKlcXEfl3vXpS8xUKeEEisqNZFGjPPatU601MZ95QP5x94XXj7NIRN
                            XXrXlb538YrqnmjSrQQmNREdQ5RHQqMU2pKhObnw7YkEXwC4+Iw50pvolSKwL4IvKgXz06urz4z1
                            enue7ZOFP9E/9RV/oWPTw5UTB2LVCEuEMKqM/BLwpaQUidlTrGISqnZVVp8+8Pty6h+9Bbzgdp3F
                            rvVoFet9DorcVuBYA+nI4kQvAq6+TJaVQkAKWPIQqaC2jjkG794ryX/8rV2aY56btcctnU97xeci
                            1db7+4yqJ+5fmO400S/pz+4ZNFcONJ5RhC1VLBMDQohRPDUoeT4E7aka+SceX9j8xjScTS06/fJq
                            9hNt3E5qJRIyo5QzIQ9RehIT+8tYzc6M+cptp9e+sKl43O/H8X4lTlhRrsU7Yom3v8OOWQGqQ3+s
                            NQr5BRV0TuS0VvPhqdImWxEokkJUxCiReSl4IKWRbtWEWInMSlhXCSNJq2pZtOS4aJ1+80dmt/4o
                            LeCQtFZWsauvbSIsGEmZjYR1R9E2qEJEYaGrLWSVVVlFhBfbo5AipQihDipNoFSDDYLn8/KcB4vx
                            6bKbJOa4oA6E0R48o7x2xB26KV7SV/fuiQv68A4Ct+Naf00koybjUnRr78qGa9f+9YDr4nQLmSlE
                            b7k6bHt/2z6TaNWvGZk0hOWqkYPGXmuoFdVmbNLvbkrwHdXCp1TVACIj7QeIJUR74i/142O1RoOq
                            vypMbRvWtDIwnY5LXscqHioqEhIQqSqMIawyhJWGsMIQVpKqKJQBZahok/19LDHXQEZsmgXlLUKt
                            Z9EfpQU8/7Y1f5Emvf9WBICsgJRhAERWUOjAaVa1a4P/vGS3mS8ZUd39znB3pbpH6cTYyiBTg7aL
                            cEFRcgSixU5Jvvs1ezcfHCueT7q7bR/pWM/GAcGjYouGJfQXUXbvs71X70GbLNL6gTvi7GvaWJpp
                            dMwWhRAKP4xGrQnTKVtlql1zDb/x+sPSS6bhbZK7Ha7TWY+tKX5VitlayRmKGqOlrCblEolsjYmt
                            SuIld7+16x83Na9nXKnHPr5KvgwV1lBAknrGQb2Fv+3Wd9Xe81rnP/L7/Qe23IxvS0TCQEWKQIRo
                            qVqTh7hT3dmHK2+GbnufeedL/f+jvt3/peG071hUBTKDJUOc7VuP1eO5uO1rJL+LWnbVHf/lde+t
                            X/tHA8AHP9T/3uVl39lVbCExTVAUCBjCgGiOrVztjh3S1gk/W9Bc9fvmOfC+1Z8b8H1/lWtIrXqw
                            JPAgZMyoYgedGMuVh3ZnY8X3vJuGf1Dnxns8ARYEpQqlKBJ1/vFDTbKpX9jb7urseFcreVyqEn02
                            xRoxYImKJGoWLBccQp/Fx247LP32lDyS36TvhY+IxiRPrImfyp2ZsfYQogo0OH9u5277fzuq87dt
                            6n98c+9szVR7xj+7echcu7zxJBmwiVxSRFCGiSqNRGRFx8YdGp7+6ra3p5PCpfSBi5/ne1t9iyvj
                            ZidVe2WJdG7N8ZO+rGbeeVZ919e0F1cFvm6FWeK8X0XkhBThhdNzlfeGrNaso9px8bvT3+tCWHT2
                            YKMt3XeL0aSrGn6gSpqzM45LUQLDKe0ZS67f90He6o8GgPe531+zxvsjETOAFUwMUoFIRE9WnbA1
                            x2sv263nFXVx2Of2OBO2/JfhkL3Xo0IKizIKErawSlDkb37koPqYFMXZ9Rb/rCfdhoWhzAAiglp9
                            nba2vuLQ5qToe/bGW4d2vbPTfDANbTSzBioviBxBQrCiQ2ztM/cfwVOiXOVxN/i/WNaKbxdKd818
                            fK5wvA2r9zH6hk2zYQrkRwBYLcCAAULQHkYoicmTMeKLWLo0PLb/3NpxZ+9BYbI/8wEX+A+UFD4P
                            ScmA2gZoB5EespUXT5lhfPaut2bfnEw87/8z+b56fyBZE6NSl1SVTaxbldp45U1vTz+5sfMeck7n
                            5Ha03+pC535PPTNfcHuoWi/lf+46szr73FN6qlcy18cu93TL0nhGYsyfCnHmlWZpEFuT/MloXD0L
                            /B83fDj5/mYPwIseHDhtadk8T1SN0QCBhVoD9hXm1N2Ni3fj17/qY8oDwzOerfg5VLVEJECNA2xE
                            FEJ3CMsfWJhuORa8L7ghauUqWHIgAVQJRih/ZBHXJ9OLO/m3Q7s8UGQP1aHwhuE8BqLhOkX4wLHR
                            xeYjdx9uvjXZwOddt6yc8XRo/o+hdnlk1MbeQIwCTh38YAXXC0BZKVrS1aJoAGY9GVVSx0AhSkmU
                            WDMsLTY2ShmNQOvGhHv60vTSvmrwRxedNPPJyQjA+/y8vNGRpKJpFkmbCrBRannBzNS0P3X7W5rf
                            m2w8H/7tp3Zo1be6RAkmobCqTbUFDZFHGZ3hvq7aiZee4jbqevRBPyhuBVgimy4WLkbB16iqOXRu
                            2Purb0hfdZD94O/F6w20EvU2aNprKR8MVO/lWHVu/WB6yGTa13EJwq0pG8cq1AAeggTEgI0R5AoM
                            dMJGlbS7dvfm6q3YnBFIoHa0GHo0sMromGSLQ++R/V8r3zvfFK6LTpFEM+IuEYWAEG21fLIpxCUL
                            ux/epxF3jiYHByORTA+EnBLVndpON2I62Xhe9JvWFx4cqC/uL5K/DNTcz0IGGLYEGBWSWQwWA3hm
                            8SpUA4OFNRkdmbBkpOolSAYIjNFcFal6MmxctCYZhtYWrM71Lx+PPffs+6v8vHde356E/cx4bolk
                            K2+0DwhiGK0Y211JIv9nMoIvAFz/oflPJvBPgjh6zfqyEJ/pCG8vVKRPI5EAACAASURBVOvqVBtn
                            yB36vfCewLahRo0R6oiUKVMsIkk9o84RGwO+ANBH+ds7JDsKp3UmKgX1jBUFOOGjv9N/4mYPwNHK
                            wRwFqVoYAgIBMSoWZtkOjxyQbPQtnhv3zi6cTeU1hgSsWG8824mv+WYOEddYAbEABcAQISuBg/vS
                            IyajUlx4YO3RXWvpx3WDk0xAqFlLncnA44duG+4+4NLw97tfHlf2a/rn3qS9JsaCoLGCnRXA3Za1
                            5VRWs2pJMXgoaWSqk2iwUYet6JCNGLDKA0ps1BATRBGILJIWEUVV5ZFIPZQY3lHo90gOv29Ndud+
                            FxfnnnidTBrLR6EMJlCshDWpKubZDS7v2861fjiZXSftEB+zKm0rcSgQ91qLlkp0W7lyu42a0MZT
                            UgnP++j6VMAZ8qXwgfuM/8xN721utG//1+/ren5rwx8stVqvZRcppOLakZNpT+2YHzEfenb2bR2z
                            lzpF8ApmgQEhYQyEkDz1Wud/jvkvu7zcGXj9lMDMVv9nt1viUFuCK1JBGhPoOonFvAFKKTByzwIA
                            ESHGiADZlxRQZbAShIEi1fJHO/Mzk1Ehjrm9Su9b4/7dWlGMFqwc+apa7bf5Hpuav/0u6Zx660r6
                            fOFoyyT4UtlpEPSkhpZHoQxAStDKR5rBxuWsqIJBakTEi3Q5Z/shQkQsUTWDgigEgbVVBeoxznvW
                            UEGy9d1pSiaw65NIiWFtVWqOeWqoOvGQSzs/NFny5zcebWVT7ksEZanEVcoJglbdXHBom57dB6k4
                            HMAVkxWAZ9ab97dCOFxIM2YqSTVE1ezZMv3ivt/Pz1/ft2nWs15VZD0joYZiKEqYG229kVR+ZSDT
                            UyGbGVzal0p59WvldcibWxKJK9aamKPBPRFj9t+sATiYLXaJDAdPgFVEIkgRkSb2qZ/tTq/50sTS
                            /Wt3zbvZI9nAdlcxM9pJ8Z3E18FSwq1zi02hL3lGolEEVgVABsqEGBUmMiJFJJErMuVjk1Uhfjfo
                            Z3FKgmjWe4+inu45qLHJygbuc0mRIA33BU3rkaiLy9KRdbkoRUNaBeFuEbFMWhiYTkWU2lgO1jS/
                            cqt6dv5g5V7X3Yg3//Jwt3jDuU+83h+OkG+vxtCKYTokUHJEFNmSiMLod5UAHxmmMtG0mNER5kzV
                            uCHFu8xQdfqp13YW/fLI+ibzD9cM/UtQ/nAUbVjlgYp5tmXNy2g/NpkBeDZ3bhj07pNkjLKEAiJK
                            NpOiDDs4m/6P9WQw0nqZSWRkvUBaDtNrSQY1VkZZbGTbcJwOBKDr+ndlK18rrze+nzp7fkdm1oBV
                            pIgAlAGvEWazBmALk5cKJAaIymAhGMq1Kd1j1tbabLCHI7CewoURq9ZoivW/twSBbHDtmdexGUd+
                            RiNAGLkFYmAgJLbL+Hsmq0I0ObmlFHYFKeoxtqLletRARpNNljv6+quK+W3PlxRVujWZUEXYhmE7
                            rDEwW0MqZBALVnZKlgNMdd8OFP/j0qPqF7+S+S873F0P4PrRP54NAAdfPDw7j/aHlXM7gHWuFeqY
                            yC2lKlG1iahtGGg7RjSUrHlkkO/c9xfVh+86LfnZptijpGYeCB0fASeRucsQOqKa9Jf2DSf/ym97
                            yRvdpDxxnfeWrkf2/1HwpKYi8EiRzKggMqq6oVKu3z1AlDIiElL4EZzgQSjAQKVQ5wQDLFIs6MZf
                            3zdWJ7Ct2mc89Fzja6OKTgKkGsW87QJddN7pdONm6QPWSjhRhg0EUkLUCGOb1Mr0dWO1RiehDcD3
                            JUh0vUFKIFo71gfftTmmL8rO6FGRlevafHQyKsNBt4TdPaPbRI9uKmHYtmJQrkVeccSM8KVNwdOx
                            Vw0dtDSmjw+nsmuW2WdiGZuWaJhjDIUzW1qhAQsd9plDb8Occ/8beNa9R6fHv1LwfTla/KbmyntP
                            rZ3w8El2wcMnuAb5sDJnnS/kEoU6q2GApSqc+NWiSBs2LlFLX9znIvngR+/UCa8IeNMJdAkxlQSI
                            itCIfEJSleVLO7zbZPYDOw03Q+Pv3TNVsi/99/r78EYiUUOiH7Pgcbvtdl7H4wgA8Oz6tFVMmtYy
                            Yw/AXczBKjwUpAALQQOQBBmzhPlM/O8H399L64D3BmK0NqD3gqUdpbzxYPrcZFSEHqa3RbLdISV4
                            b1BSZwvHNs+M3vStfZLBiebn0OtXnfxMbFxbo7DaVKn3eWsW1a1wCHnHYk4jD0/nLsydlfLn5sB3
                            //Zw+uh48XLfqV27LewzW6oRW1iaJdbWcnHbkTWRVcqi0m3KiC1Jq08ufqr10KZ4f6lWn1QVawzn
                            o+BkiBOJoLMnMwCXVfHAi9GT/waw9uXAl4gi0UjNhrVgPPLzL4KyKCdtT7uMFa8DhT3wv50+yPT/
                            /KzaTZstAGdFewn7EuSACIUFwbsOVhZ+TIrYHHlrsY36uB740gvFfBSqChGBEtYbG4IvsPZm+8vD
                            dJbopMwj/ej9Pn1mSP7WVHkrtA08ASRZKSTkqJhwBT708oF3DXR6v+6ISo4VGl4ebRnTY4NZA5Nz
                            Im7VEPuzZ8H0XH2U+eZNx9TGPQj2/UN51a49xVY7WTqgGQbudI4GKx9nOefW1FieMmyGIqEhaa2+
                            54XFAxO9Z/tsWb+CiIKIpgDAzJUVDLCR6pCL5A2TFYDven/vvwfR5kuB71o4Gc1GeUkLeBR07X/D
                            HhUSQX1V4cak8/KHLlVeE8vDNwR9IzKpiraPuQ/4e7t0L9npnmJN5X2f4ZHpBQlc5uYsuqfiG/dO
                            XpPyLROZbWwCDkC0LTC6EK0HefdVEM5dm/mgGyLrS3y01/6MIboGUiUgCwVGuk8Yh4FWct9kVILF
                            /YNHdJIadwWybI1EUkpRVFWs1faZnV1y8wTyctj1+o6hIn4xcNwaQVFL7DNt0gUN4mHVPMnhavN6
                            itOvOaz71xP9NTtvUbcHcO8xl/a/LS+r24ZsshOXw33MXSVxRxW1RFSYQbTzRfnfP3JK7dMTxdvX
                            DyFddH77E8NI/5nUeIlSG2Re0KV+Gfv4NgC/mawg3JWauwuvOzJzoapWBC4ozWhk+EhZ6jLoC2Ws
                            XgaHlYhImcM3vfAMp74/ctZlYtWiJIm7fWNgmwc/2rvktfD40FO+bhtZYSQOl9HPJZt5UkSDuGqz
                            BmAAqAV7r0Y6QiAIHOHUgKuY9UPPAfDOjZ33lAdXbfFgO7u6ToQYAOYEJSrUAiN1nXvuPaCxUdiz
                            9+LOsy12O3JUEBGUDGIUnDyH3v31SagAXpIvdWm9JeybEgMlEM+cdBrk//4/98omLMXqzdcOHfho
                            p/x3YkMcY5VQ6Nc8ATKQqagzDLvNgswf8OvDmnduyv266qSZnX0uLBduwfjIoOn6VGSpC+qpVRoi
                            bbM3jb6ahDN3uSSnh0+uTVirnYajO9eU1EwJy6DCfRKf8tHOGHDJ2wB8eLICMCl+Cej/GgFfTQAi
                            kML7sOSOs5J7X+k8C38SL7RF9RbPZpYLRT+xjb7yM/sa2dcBvOm18Fg13BUs0QdIN7GrXMwHhJK0
                            jPGOybSX43IRY9D434FppPIZGISAigkdk5y5z51D22/svI/kzW8oit5KSmgKSEzg1KBNBod1m426
                            4338nSuTImbb2IpBAEQVkRhGo//6Huwnm/CftjjsUVJ9VxKxZKxPmEsYg9zL7Hkz0p9MJC9PVunX
                            4Jzzok2rbDxlveK0bnw1lNq4bPs66r8+etOC71q6+83p8E0n85eY6ZMUqEq1WqbsHcVmSEWWAzAu
                            uA+ccVO160TxdPkp9cdqrI+qRpsZLGlp3DVmpu5iWHPQT6tJ231YmVcwoVRVR0RK0JCQf35OHa8q
                            gBgGBy4NZPsUbGEckUFQWPbqZh3/4+KtG8vfiT8Mr7exbNnYbjGrJ2IVUM0zZu42L5tURarGLQK8
                            y13FmpJcr42ASICBQwvDsKGOnWqm7+p9eODVzLf7LdV7S6azLRuothFRR2BF4hl1679694Hpn28M
                            n/vf3+4dXpP0l4knFxwxFNE49MLffcfCZN/x2p/9ry3OGEp0XndMzoSyW+efhIC47s8KJI2qDSM8
                            KFwZ8dxXJGErU7oKGQcJcD06dNutR/e9fqIEZ8Hl/nFi2o6D+BqqZ9tU3zqj0F+pzE7Y3t1L7UXX
                            vaFHJyOA7PSr+L+B8Hc9Ho/lxmzPWnWIiUxIh5jCmr23kJO/d0i2YiJ4WfjzYtuS3JUkEkhtVA1O
                            CSyISd3FRxiJX99VyusZTRRRsI2cE22rJX+l4jzbrRm/9dMTe8btJHTUeXpUpwz/GJUbACuphIJk
                            m3kN+tilp9tX1R7roLM7X1GyC6OapmOsDoLumhbPtDjbtQg48eEPmEdezXwHfiNuzVn18xhc3Rud
                            kQov0xiNOFe3YfiaxR/q/vgfBQAvuKv420LNP6SiSKPBYErIfESEQeBS51nzxpv2Ti59JXPtcbs/
                            o63mXBMDCAZMDHhFkVVgT3F2Gva5db/G/RvD5zF3truWlOlqW7GrbABIEYUx08RbbjskG/MC7Hv+
                            Vk/nIP+Wq59LMWFSIKxVqbVdQv7bS9JgRItofEKSaATIoKJM0mfXUDG/Gd1AmXVOeOz1PbdNhNAc
                            d73uvbyIF8Xo64Dlikwj1TgEMBUu4rFjk9mY5LTPpfIl7VSnq7EpQcQQDQdD3SFQl1c2O2TSd/lJ
                            ZkIqq+19njxLqAIoUYEkmWJJLmZ7S+UaYCTnkl5IpVpfOhRiOXKuEKeGOYn5ikGq7dOF+Kfz6vG8
                            X5ySjvmV9GPO012HC/+9ANujIGaNwVHZzyYdvvmd9uRXM9frz5WD8rzzDWhCzFxCAkdOMiM+J5IY
                            1Xz29vcnl7+SuQ7/brkoj+bLwUizIe5xz3FGCNKdUVhSkJ07v1a87fx3dT+82bsgAODRfbN/zGJ4
                            UoQwmAiSQIhUQWwJBejZCpcs+G3xr0fc3T/n5eY4+aGBOXvc6h/JoznXCAHkoMSIADo2Rz2YYp6L
                            /7yx4AsAYsw2VYAbtkMyYq07sCNp5fHqsdyPM+/pJItuyX8So34/DzqPxJGOmrtr09+MQlkhDPLr
                            DihTJFODZEbBlknEU+I6Mrx9w7i8ENNzaG96/0QIzNE3Ki8dHr5UNKSirhaZ0ozjKoA0spT7JXIC
                            pgDdfRJ/AmmyRuBTJcMBpgeRyRK1a4ShCnHCrnJvXa/+q0buKaiAlGIptFWNwu9YqYISQ4l1dECg
                            6w5SeCVYECsJJCDpcSKtyObTy9v8zeMuqMa8Bu5Vb6OHxNiEJZZWpQUyClgtcpr/aue64R18a4z8
                            HExgokorm87OpFhiiQdJuVLoP7/+B/kn3vRfy2a+3Bzv+2knO+S75U8Lcf/KbKpEXb8nzFAxhpzz
                            wSTdwZhVkw18x9UCBoDtbl/9Tubuc5IQqWKCgUPUCBaG4YiSI2JwaFj/zDxj3ubY95FxgId7wOP8
                            SjpJzUaY0Lv+ZWIVCBTR8sqnD+A5r4XHt97vj7i3P7821Gpw3oAQkUvA7Cz7xO0H0r+M2VHz5vi9
                            VdJ5j4l1FhF6qfZW9DKhY1Yq1/9zLFk1z4V761ysmd9Ve/9FC/nXEwLAVw19bVnR9WHH5XI1rgZR
                            CImDcbp7Jsedt8guxhSifS9q3x6ltjXWWpij2TISYm3b2TTn0iPH3wo+/qJO+mxulqRUDZiQDAfn
                            ejx0Rir8vAJm9CrtCHsbpHgxU6kKC4BUYSARag2nUi6PcA3DYdiUQyfefNbsMU2/2vsH8Zk6wqOG
                            tMjVzif4iiQNc5Jy0SXvrFWvZq4P/bqq3fY8319necoL9ShbjkGbSsRdVD2YB9kexogjea4T3EdS
                            jqHOkg76NCRc/qis/LYzbbi6Rb07E0FG9wMAkKG1tCC3xV5buOO/80Yz6frCjWtPuKcPmPFjo9Wb
                            WmwkYaDQEoQAMW2oYUAYlkpwYbZ9tKTFTxa1Xz+2hn79fGUu9i5P6lKDhl749W6tjZSItGqqQ9Ce
                            /1p5bFf20HaXhc0LlBRRBo+MDUwRxkzx9r2r9b5hX55MuTEAg9nqH/4urjs2sNptSAsOMynjrAm5
                            baLA95ir/RbPlY0/EWpbTVzmozQTwcoYE9us2n8/1cAXAPZu1k8NITTXBV8AkISTZ1eHvSeCh8tP
                            qZcPnpHO9kh7feZmGPHthvpHo8Y6RkqWmHUBd92xLtiMKLSWUGgL6R6k0VeUzMklfd9Y8zwrlS9F
                            xHqH7E5sYuGJZ2iiyfIhOvLVzvXtE5I8BY7LC7tNGmmFqk8a1Hkk02JZIWYekQlpaC2nEBO2fBU5
                            d37L8y+SWnWuVddxaWP1gE0PipDGhgqTu8Y8QvqxyQi+4w7AAPD4/vVLurk6shAHQgITHQRdiBWQ
                            VgYGKUpnQVYQEaAJY8hG1EIDYg3YEtwoFr6Qtwvt7N2U7nMPaL5m/9b9RfX5nlaKmNZh1SOjGgI0
                            zDRr/nPMNmFQ/yJSreGcG4px5Bqn6mjK2+jFkdFBIvrfRlDN1h1SJJxI2qZKZ950bHPCWm8r2b+t
                            Ym6cawxYj5Up21UVy2w4weKTml/CFKSzj6KlM2r2sg3zxJOIVWC6+IzLn99yonjZ3g1tU5PWgx0k
                            OxaetwnGNKNqLarWo2ojqja8St+6Q0RSEU1FNFFVUyRmbhrWrHAkq6BRjdeOyxrvPvGX1ZjWwV3a
                            tk8YkSrAdNmqGExZV5CnIEm6UZiy+H32id5MXj/MZg8LP5RTfdugtqHEzhB1Oq5vh9zW5nfF9oPR
                            a80kLk9Lv6IUbGE1DqbklotyumFNioa0zlj8AZq09VzsRCzy0H71GxbcOnxkS5Jrq9QixIDUEERz
                            pNJAbhQs9oVaOWk0KAkwkSAxgAwBlQc7g9IM9++byILz9phRjgVvHIFSGKbyIDYILGBKzKWHzhmT
                            FLQ/uyuYS4fyfdIAlMbHFBhEJKOgrhqXT1hjj9upWV9FQaBKIzavib/XQi5A7oJ97eqJFJS3LPaz
                            Hl81+CZX60EWwpIOmR1JqkhwsRbl7zCFqZvkfy5XfqzLxWdjsF2Ww2Co+puMmWFZ2TgTwJcngo+L
                            T5tVAjjpzKukrtHYJkke8furdxmNQmzw3FBeHwzJ9gN5cVFpe7awoMGS060z8c+EYHpXDGEfAJeN
                            Fa9NHRrqUHO+k7i6ct1zSCQSVdG7dKP7Jl5zll1x5gW6+0MDuEwp7yZTEyKN6sE1Ck9HUL3ibLaB
                            dCBAzvV5mYlL1SPx6vssMKhCNlrUC+XGwtnVjt89pdtPZtmb8EIkh90b/um5EP4XIlsGI5LCKGFd
                            76dEBlhAWsKqg6gidcXz3Ua+d/N+fX8zVryceEdrxiOdRn+mQITAo0DGNTD7J+8/NN1xLNbY+aqh
                            z4qtfwYCMEcB29KFIncGy+46vLHnVAGp113eOsIguZzURmtim4IJUaSmLMkBWTXzB0d1FVMZhHe7
                            KHwm8/4dOWXbGS0Ly3aAJCg7bt9xSrL3VHmON5033LNcar+RGBMhTiLQSImfI+3csPjM5ifHap33
                            X1Lae1a5u5m19MozWXxhqGgJGuaO95rXnL550o+q09aU4eOeqJciKTSqpdp6fmxv4kwSrayYIaGy
                            Fsk2OMTcJslf3fwn5vqp8L54ohe8aS/7v4/pGe61Su9n4GaGIKqBYHSoASFHIEUwDmzx5brjo+8/
                            sGersQRfAHi0NPOYALEKMYTE1ZBDMCw0Zu6HWEtqJlSwBMRgOKikuUlnDAb3hqkEUL3qvpSJW5pE
                            WSXKSVBtRkW9Yc2npjr4AsDWLvwniYmZhGWGknbFZjaRVFqS+cgNHTtVnoONDseyMGxdTiohhXku
                            F8yXOLadIL57chqiUgOiwoRCyDqII3JjEzq59F3JL255f/0YjfYfYfW3xiZt4ZCuO9Lon1exzhvM
                            EjG/lWg/u992csRUAd8Jc0FsSN/ecXYbwPcAfO/guzp7lpCjXjDJFVomaWOLsrXk5oW954wnH6IZ
                            0igQrgBJ4BGQiEPLjuHBoA1IlsKUCktckRYx2Mz70J4y4PSGq1s7LSvdTjBB1VhnPFrCoRaZ7AF9
                            /PXbMPXpyhOzVYdf2Ll+NeQMF5M1qY/PlZa2BpnWrSv0rQDOnQrP8cvTu+XQn5RPd6Lu7ZhW54L5
                            NQ3PBJLmWK/lRXpSG5dWEVsmhpYrG2u9Do3lGnd80F0A4AIAOPKHevq6/6bWUbPVXvPr93e9kDJ6
                            5xSTu03+ZV+8b/0+AJuk6A2ZCM8MowkYgBGDYCpwNXb9LClJgAhEKwAkYaTeeLIq9SkjJIXU9hGp
                            mMkpq1aR0QCItnLyX18/wAZsJjSE5L9U9d0qpTVJo0Ui3kpR9SR62FQBYACokMyxkCGIMYnoygjb
                            UNCYn3bn1OXnrYIPMGSGI6qGi3G1t645Xs917XvoAmxmxPgjJle21cZKVBgeDCEOTpOipr4cqzVG
                            S2XK+l7uqUUEPQbWOVU1SmSiaB1saHWQczYnebj7zfZOSBTllEQ1ZaHSUJYPlHzyGVdIcwo+kmIc
                            5a7G8qgxaLEGb1TanrOZGjV58wV+T0zTNAD/IWq4+laRHEsQMAQkAi9ltnALN6ataujFX+NU3Kfn
                            I30oDbqM2fgoWnOOB0linJsMP7O5ycTWDf4K1HCMoeGIBkJEM1JWXzYc3zRVnkEVTKpRVXk8P/zM
                            XBQB24IMhijdzUnoNxI75MwfNa5MA/ArpFL1XMOMxHBhSEQsGVVCV6iGpkVjhHa6TOuNEJ5oJeX8
                            EGKXsZTDV2gYffjyY2Y/tbk971PDxXdTS0sZrqhEZpEhnxD610S789Q5sUCgI23Yxxk8OmxthyXk
                            DYunhUyi5CznPkxrzjQA/0FKyKyQqFCFERhmUSGyUUwyhp1TZT07WOJIlXoRmRJ71Ox03p1bu33m
                            zSAlHAnwSuC2xg9ujjLxuhnNQZ+vmQWADHEHCgqijUZW7TZVnkFEElV1SmpBFAko173OPFYUg5ik
                            8ivVsjUdtKJ0GhXTFuySiGmaBuCNMh504nOjJzP5rnoKISV2ATEyFKTGJRLNZqlkg+12EtO+xoZ6
                            kqpfNTUFevxcEB7VfG/cTA6milR1W6q1akGeTKTIpzVnGoBfPalOg+8GNBRj3UA6MaLGKh0E5TKE
                            rCmx2Byfd4eaX0Ua4og4jPQwA4DBkJ04ZcR47e05Hd+YQ1HVz2aNRcmypYVZIyamSiF5vsh2nNac
                            aQDeGMGFYhqE16VZ6k+GeraWh41SS4lMaiTfaWb6zOb4vD98Q58kjOUb6kdUNKaW4fuC9Ttuvq5U
                            ObeMITCpZQxVUWYTc7Uqx/bTmjMNwK8Ycl/4vY64IHQM94WUlIBICk+qkYEAAERTY+vFptuwsWWI
                            2gSxYcRSfLA/PoTC5qsUtlxr+a4VDhvC8FThn4gCFKpKDAURkSjUjPU63qj1xH2Jp5WB0GvJDQIG
                            xmI6CDcNwK8GhMEAvVz1x9dsjJCSsMITdJ12Q1PD0CZARDgxQCGQRMkwbJ03f5FYfxuEXDpV2Ccg
                            jLYl5hdjGmMPwESqUCIGKg/b4yT0IypJKO00rrwy+iPfKILqSN7kWtUjkI5r+o6OD8yPG7uqoycC
                            GqmXqyCCTEe5p5I3QpUVOq4fTaMoSKEB1BC2Znrfpy3gVwIuvAEcC0jHFR4VYFWYtbWNp8BxVmkk
                            PMlK5IzEjiGdjnJPKTknhhKNsy4hsquz5Yqg0x/oaQB+xdbByO9Gom9K44uM9LKH3MmrvQMAhKBR
                            NSobLofV9px0lZ+1OUrEO69TgsqGDgnFlLtKvm4C2vhYv5YpWed2pwGxUtUJO/bKrdPQOg3Af1hE
                            FcIwIEUgAAKyAI/LDSJVkCoxAGVFxVNEnSvwOTFoHUwa1dY7Stt3WRl+rGO32BxlolOhS8W7tQEB
                            UgqsVM2wxdQpBKNEBIqjLjYzXt/81Og+JqIDUjjIahYpYepMyoJpmgbgSaMPI+bIlPSLFT4kzvJA
                            CGgqYKxBq6qKZp06m2WkOw+wHTHzRz/QnkbTuHJO506dQwvMhq15xoWi1gGAiNZpGgre0LU3TdMA
                            /NIWMCESjZgGOp6XMEbS26aW62GUdqiFxRLEgZSc4SEpJbXOFbOtvmVzlInCq0kMVrGiohdzaCWT
                            sGaKffZpgnQoxKi1ke+VTgffpgH41Rqn477BgVQjoPpybecnM/3m2Np1UBjVaCTGes3QE6rGLovZ
                            X3/0uuVucxOI7lQPEo21dWRDSCFDnN43xQSbMc7ZNqpwAEAgUVWz1sggomkXxDQAv5ITFJ0hIQBS
                            jYhOQBAtzO2rilPHTkiVoaQEDqpE412halyExEnOoMrCDHqiWU54gJXLe/KZ+2xuMvHEgPwkEV0R
                            CM2g0mPgO0QxNDB46ZR5XwYVE3sirhTCpAikPPbNKSk0CtK50UidxETm6EWKjC1NZ0FMA/Afplxy
                            ZhPVp8axMJSMtZphmbq506LxInURf9FYk6+1ClXVAOCEsd/m9Jyv/3m1U53xu0rTWQaSp5ClUbgZ
                            EbIbT+t9bAqZv6NJPWAiGr8MDmIOQDORcjkZRIkmFYbTjumf1pppAP6DFJIaebYIULBGWBVECyBO
                            u7LW07MEd8GHdcEXqoqOD2/dnJ5TKB4qIo4tlSKalMZsxRwLU/m/nVLPIbAE0vXcAuOQm7uig/ek
                            os91UFuQK21ruRzqQvrAz8+kldNaMw3Af5Ccj2qDRiuMQIQqKFRKuOkY7np089H2GktmaBR8Rwq9
                            EEmuZr9DL9HNIh/4I1evNMOKz5MhRIR6DcWTieoKUvI2TaYUoAi0RkyBoTkTylEEHnupZlYAlKJa
                            qlY5BOpSxHRaY6YB+BVKalGxsGgEaSSwq+DIYrb1+47VElHYOPjVEe0aE/sA4UI7bKnceSptVdP6
                            vwQqNepbBdDDpN5GDHSk2iyS7h8d6N3PkMtFOAUZbtvaLsG3ulU79qBtkuumynOc8ONO0mLawUjM
                            QQGV0KxU2ksd+6fGHDzyMi+Y5kUyjUTRbw0PVWxnTsPqNAC/LrETzAAAIABJREFUInrkiObDPvq0
                            txKoq6DEKK3FYLAnjdUa22TDtxSRthBtGqs65BRVw9NQ4MbVJ14/PGV8ze2QLGGRqiCzTV1pOWIu
                            RVLNFnLukCv9u6eyHBxz4aDLpfwnREJlzMxamT8jlaSpTZ9v1LsXf3Xh1IjqH/+TNfVWjOf1QR4S
                            +DRq0qxR/nSb0127dGw7th/zk2rPPHXzM8GzEjkNseoWStJeDl+ZhtVXTn/0VYty68AU4CJQmRS1
                            Egjse8dq/msWdf9ih2v8YE1hPKTplRtZ5qq0LAd/F7t+t+AqDbROiIQUwSg66xnqounosT8AQOlQ
                            f+JomtD6tHecTHfue6kM19CpuMrKytXnZCGs8Cozq6CfADBlOySv8vWzGGZeRJmlIVteOTezG+be
                            guzWPWXn3yaan4N/qhcPRiyqhfCsJVqvDOYGZTKRw84zoSrZoFwDOyDMNV90+lxqVlOQEIzpNmRb
                            ZaVLxnTPhtwcW9MW5WUwXRyhCfkCfQNlXIVpmraAX7GF6vyN6iJULFgEBIWPlb77t535Y7VGI+IL
                            omDVIqkrLfG57WZylS1aQ2nUISMIawcBpmLMWncEQ93RUncw6AsGfZnmxX6/7ty34Ir44ETu1RyU
                            x1Q+mR1S082ROl55pothoOVp96N/M3TalBUCj/8fDKlR8rRyYAm2VhjZqq6DD//mrY37J4qN/c7V
                            7xx4TnmbBr9FGuKwsSYQG7v+sOuNBKFdT81TrDGqUALfEZtmgxQ0RIuGi9JPVX7zNr3hO2PJa6Pu
                            21xq7tJsUDuJi5XWHPkBydLpCPY0AL9y6mJ+b1LSUHSCRIDAEdbW+N5K/2Ss1uhz1XeNiLfIBgrV
                            uYQOFRRnOHZrAmKTdCTZnxTCgiqNGEgChp1Hx3l0SCGJ6oCJ3ruoQ/A1KpHONYLt9r28enSv3+iM
                            idir7WpYlmhYLvBJVG0YMrmaxCZq+1e2uz47Fd//wl/47zNJgVBRqZibRVkqllwoQndvT/cZE8XH
                            QT/Vf4OvDlOYxJPtMYbbFFVFkYkii4LGyND6usMyhttidjE2KySKjcHUk1gsj+y6IDFUbGchS774
                            09Mb5VjyWwn/h4KsQRyqcflUpTQzstTyGO/ENE0D8CulniTOFMoyiiwlKQIxXJDh1NQGx2qN649o
                            rK5s3DdHOYspzyOllHnu75DOU4IVlnSDkSlLAiMGRkxKYbVCmIyNokgAGFWyDIRKzWwnnasnYq++
                            dVRNJc32FB9rlvwwKcJIwRpEIpq514X57VPp3R9wfvh2u/LHi+EEFBjMOuzCXqnqsjlN95lLj+MJ
                            6YJx+E9j91CMH1J2xKDCBt9y0H6CekAjoAKIACJEut6IQrVU4/OQqABTtEWjzbVdSELpogzOyMw/
                            3PZON+bto5KYr6lZfUYC1bya3oRpNcqC7v+Am84BngbgV04P5XgiQh2pal1oqRESGEUlMqZNGB89
                            Kn1265jNZsm+aLWzMpC3klhhoRIjNQcEI9deFQKFQggIBHhRygKoYRVDFmUbI9c9lYi9Klkpa7X9
                            Lvd7TojF2FPlNTU3AqQjhVdelCFm27vHJfGaqfDej7siPywIjq6R/I4VpXAjdSH0Z0ielQBblv57
                            E8VLKdWFDeKnmFGRUgQbqQRbRuY6QGbkyi+xKlmMFKx+cRDDMgZBzAC04ewjmYaljdQ90uDw3ive
                            zuNSxU3JjcQmmJmJfEZ4RmxXbRpSpwH41R2r2ZRM6pWiycFziaKPQvUkjn3k+4bj7OoHj7Ofm5/S
                            Bwtrvm/KuFxAKkpm7YhKJipcVLgglESlVKIxDhjWvGTPJsNILq6OVLwi5LU4P7HVQRNiBR+a6R2n
                            JscLjMcGtQYCaZ8tqnk7X6Qfmszv/IRfhAPWDLivWJLBnGrbM7QClyIc6gPe7Myp/8FNb80mpOvz
                            MT/u9LQ13T2L8RnyIQqQROKmMWGYoy9ENVGoEVW39td1h4raEGN3pZhlY2douMpusYk7e25d3nPN
                            e7seHg+eTzync5DXZFYE1QK0i0lL8ZrVU/ubaUh9dfRHnwWhGUMLMmSN2KiFRkGwSVpK3HK81rzs
                            iOavAPwKwCde7f9987Ur93wk7/0twwRRnzDZyvnOmpyyv/rIb9tnf3NhY0Lu4S+Yxe98cmX8YVDu
                            JpAQBzFih6PjrgT6Dwt/NfzEdtt2XffTvSZXXYBjLy72XV2Zv6s4zIHa2NDwcEG8HXuURnloTlqc
                            d/Np9S9PFD8xdX/d3a7uEatJVFdniGemMgv59Tee1fsXGzvvzePIc0W1zKofJjJBiGql1zlECBqr
                            H01D6rQF/Kroiv1tu5v8bUalFa3WhJIaR9JC7F6Tkd8Lj5x9n1oqRctUmZhEK0Vmc7LzbnquffxE
                            8XH+oXTrUOUvhQtKOuxLphmqkmhkaw0GO0U458FHy+OPukyzybJ3R13Q2WtFiy/2Me5swYMOOlDC
                            zGVFEa3psvDLbz6tftZE8fP2K9S1CpwYSeolsq1gGIbRkUip1/S2yaoznUpmK1kW5UQjQOyil2om
                            qR/GNE0D8KslY5KnhaTOyiUrlaMdK8KiW+MnJyO/M1V+CcuqYh1SQ0FNd0Kh3VebcepE8vHE22r/
                            U7z5ryhJvcvToyDAGMq911km6x1O0vQLK4pyyf4X+E3qGzz58pY99pfF3+RV8jVvbB8zFaSIUbXB
                            xJUymWYM19/8jtqbJ5Kv363wixCjVDbbAhLZKPIIahiW9uKzapM2r9qR7qwyUopSFZYIAibtUrSn
                            0WQagF81LT6C3uFjtOs0LlQihIFB7DIZ+e2uu3+WypqM/bIyVrNSKZ9HpTwMOf6UK1sTWiLygTeb
                            TzdqfM+gy/cm5iAqjkDee8xsF7JbQmYNG3vDwguLTZIfut/PSvKF+dSKjvk4DKKpU4cVlYBSZlNI
                            jEkM0jW/Rp+fcPcX8ZfhUuLgC6vVIKkGVuRp1f7CZNaXQTUfAUhEkBJBVGEcJwOXvb/r2Wk0mQbg
                            jaJgk6eBF/pWkCpssNVJk5HXyxbRg1t08Y9JQmjE5EmyFLzlnlwxsz/U3zvR/JRlcWrd158OQXuY
                            qYRGNSod52SViMkqhDltY5ftf2G8YiL5OvB8/QvP5rGVuZzlE9PtCTO7OsXDkSgTJScimYEMz2ma
                            T/zoTcm9E8nb6RcO7CjKmVFtO+PWeFvri4IGS1Ulvc2lk1VPTvup7uuCH3jB8h0l0s50EfZpAN54
                            asQ4jJFUMBqN7atRTNq0mjz47ziiFZFC03PSZ+CKVMJQS8PJE83L3ad1d2Z2F3tV8J9WFcNKlTNl
                            P5QZhqBqmAKHQNh55wulfdDPhv9mPPk581cr91h4Xn5xUPm4FdLIWaNbyntymO2CTZoMBImdNLF+
                            hWN+65Vv5B9P9J6tbrv3G2hLRNMoqJuADgxRaumiq9/MN09WuXtsNY63HAeJEEebRauqcI+jD0yj
                            yDQAbzTN5vR8IWQAREWJVUofbHL4jf7vJyO/21l7ayHp/EJtnxfuYvElM1cF2Xn7XSYfn2h+rj6m
                            PvzYadlXqmj+ryckJaVbgFRGe+0RQCCimEjeKtPkI7tfEB7Y5Vx/wTuu7Rw8Fuu/43qhQ38+9Jnd
                            L+pc82A+85I2pfsbhGFBSBzp6lKTrTIJy6xUQxLzJHPpkm5DJ9/ydvvkpnh/Q+pOW9t5WZUMAFgp
                            hwZhb5jMetJlyz083EyMFBx2zOSJWJfGWmsaRV490aZmYNGN8oHVoD0YsV4xnVHz8tiq1N6WVSW6
                            0+Jf7zq49/GJ4OPMW4eOvXO4+WsC4mgv77ZwkYGShx86yk7Kzg+HXeu/1ho2J6uRJBC6AGajRRtk
                            430nJltvKr7eeKUc9LthusyQFlAwMJJTrRINW/YCtRR8JDJRyLiEqn7DfBlC1X/r6V3/9IrXuaTc
                            6onCfmqGLXYa8O6AFLxaYpkQrCdrRWJ0CdOaINTNTGVQNCrlWQT9x9lp/p1rT21skkabi84Jbw+E
                            P41qGqPdiwkAAoWuu9/tdprMgLHwu/46jSYRUksKZUbpK993x/+X7TGe6x73neKUwZgsMFQhAfb+
                            f+y9d7SmRZE/XlXd/YQ33DiRIQgIKiBIlpyDJAlDMgCSBDO76G9dl3V13fBlVQwICC6gCCJIzhKF
                            AUSyiAiykiff+IYndFfV7487ozO4qyD3ztwZ3s85fThnZuiurur+vP1UV1cpOgT2jwV1ZR3h5VtP
                            Mdd3CPgNYrs5rSMzm+yeFXpMIEmsgigpoKAKARMHayAaDgBdAIyJMxfPsq3/umWb7mcnUq5N7pGB
                            ELSOQAwAoCTehmLxb/aurDcZjbfTrUVtPmMjRZqrRi14AbEmEi3tDKJd7t4nWWnv8o+6e/57nh2d
                            fm1g6F7iKxRANYAqEBhU1YrBKAY7VxFjlpCQYqGIRjikiaV7mqV9/PXfaL3W97QYji4Be2INixCc
                            KpBxBMMSJFZHCKqAIXggMixSIWtz9qGGxpZru+K46w+uzFmZdtvmUr5fWKuAy91LSm8kH779SPPM
                            ZCWLAy/L95iXm69btqMCEBnSTNhHaWJfuOcY89HxHm+f/852aHKyrQ/5UVajUUPa8sI9jFohMCWh
                            lgIQsYYkFpqvztyZ8qI5d35ijVUmR/UKfYjxzvuL4wjCNwcl7QEPAIRggRSIPYGCojrSyCg6CgB9
                            Y1WEjZQePvwHH31oy3taN20Yu0//ZLto/kTIx6EYJGNMYKw64GEGrYgxPZPVePftGzc3vjk8KEAb
                            ACMpqgEGAEgMRPmWALDSCPjy3WY8AwDvev8N7Y+2If4kssxUBKCSC++oO2IZYIUuAVriZzcEwIBq
                            1FDU8gJbx0a31de5ydrBeQIoE4CFY8tXUKFtCrHT0TgmxVxZLQGCAMSApCBUlgo/feZw8/knJoHd
                            AnO/ADlU0YTgxTbQhklY/HIE/rXJTBYDTd6co6hiRRsohShYShVfXLOLvzue43zy8sI+3oJLG2XU
                            BwBgMRlBAmGBVAktKjGoKAAKAeRGbVsRIgq6RwunHLzXBdmd63bB188/Mp30YXErzAf87vvasz3a
                            i6wkfxaOpEpxKS5mtATEqDoWjIAIjAgiGCyBS0dtPPuxNvx6+zm6+UTIqE5fEgmJA24HxATFSEDs
                            3v5uf+5kNeDaNbp+rGy8/lGvqCUbTMvJIN8vD6xc8usDzfursflHFF2kzpGWEhsT5wAW1KBjoaqK
                            GEBYroCkvqH1iQJsyIIbtQqjUAQkLQsy6JXV1dBf89jh+L5njo4nTUw3ieSGqI0APoj2EkBOJvFx
                            0uUm9ecymQ0jhcUAwhbdCCmGttH15w3Qo+M1xmbfGtzxiZHRn4XCrrM8R4BhgCoAKoHPHYYBBJVl
                            vuI1AFadwcXDbTngqXlw1ebn6C5vewLe8eFWuvG97WFF96NUsO34zxM2GyjzmLRthUoMmI8lmlla
                            gReMsLFWBDQASCRT5nt9bO+HWied8JQfVxfKlmn6OafJYAFatyBMqEEQsBH8dpPReBvcNLT774bD
                            f8Drq95ipG1fTKrSMA98gC598pBo84TDbbEJj44IvstaGTGhHHHKQzWSZ1QhHrO50usTj/+lNWxc
                            NMqqVUAVxOAFDDYz9tuv7d415/DK6ZPNbh5dDwkXqmCACAgg9+J6XhiOHtr78rJ3Mq61Y68u4gLc
                            NlKEiAgCEokKGnV29M4T7Lg8N9/u7GKTSr33Kxl0bRhrPg/+VIWbVJUIQo6CgawpvXVTFckiIsOS
                            6CUL3Cx9OcPESVuNSx2U/7nD2X7rtzUBLyzNB3MXugNommqolDb8WY6FkpJEmC1h3gxUvp5P0AHn
                            mTOAZQ5VASytQnMwPf/VbHBcw5ku3QZ/k0uWWIM5ogRS9a40uVFTP/jXo5Oq2OB7f57vBFC5JQ3c
                            UvgTWSGiRISLHtgn+eZkXHAPHRaf8vhhtV1/fygmURz9Qb0UZWT7ctBZIhi92XUpgC7z+A6jPHeK
                            ya5bp5Lt+MSR0bt/99Fkq3O3x2xSbjrFbwhSTASFAEbILGjigAphYWkePera1szJJvP/jLgvGeS2
                            IdsOKrVCdDpZKKjVGpcvrU3PzrdRoXOwbGmcuQUFxmssc7pFAAAlcgY1ozDcjPzwXOWAIhIvXS+i
                            kABEqjlaq9Q0SO3g/Ld3Ple2elsS8Lr35ycJ28sirWcCDhpjv/4VFRFCaABoUYjHTSLee6qDrs17
                            k2mbV203KtRM2XjUs9cIw4ICfOKwAKEK5BBBtxYwWAV4tpj61Z1+1RrX4pYW6QYhnwS2NQWkYCER
                            8mnWiL46WYy21+3DO5R5eXcMUcOkSdMItrzhLsCgRnyrIXAVrAL45T643+NHVbfsc7BWobRZheR6
                            r6GfbVYJnmukWgIGWLYpiVPKbYBQLwNPmVqD7/TF0PfYkfH7bzukfsY1H+wbnOzznh4P/SZH7ROC
                            NAaZyxZSLtoVH7nuhAdfeWqk8sRJt+eT6u4hZ93Lgh8xIJk3rh+xlMLrGjP66m+5EspHf5r1Vq39
                            f2AQA1a60CmjIe9D1uNN3meDjLDm1Sku7C+sh2ywVt/sd87sPYIA9u1ysm/G+g4k9EqBIjADzmaD
                            KohBih6Tp+3M4znHXJFPyurdExYFcepvNb1jMGs6da1CtB4ZAyAIKgjB5ZAEN9DbRZ+4b3O64v/q
                            46gnQ7qo4Y96vogvjGMPxAgFKJA4MK4NNksgScOdj+2Y7Dlecu9yX+tzQ2XyhcAykw2WEZtBMN4U
                            YitbdbV7L9u25lemwTa7vTi0zLNLJKkmlGGZWPNaE/N3VIVeDBh1JxDOf2Q/9yVYxbHHLc2pC0tX
                            T4MNy/1AQiYPHFZ7dVWf3y4/yQ8aLcyZaFljiOYxS0VJHRFkvij7yMCCLdaIDz5/LzuysmU96crG
                            zIcb1QcTlZdAWBWNiwXmijUy53h8S1VDTr1qMP7NYP17WcAtDFDbgLSsyGghYaZK7DAKPD2C064/
                            IX7oL/Vz0Plhh5fb8ONaZJ4uQfsjKBeLmtQwt4GMlgHcQ59zk+5l64QR8LYP5VcMejzYU+QS9gAo
                            4MGBAYAe4782zOE7z+1YW/RG+trql4OzWnn1NwTUA4qQMwKZHBhTsLYAk8lBz+xVvWG8ZN/0zuLV
                            Al2/YQ2qaoIt0pgrAznoRs/vRQtXlrE2uVOPkUK+h0CiKhADLcyFZ7lIh8tC++p1+uH7sPjkBbtW
                            A3Qw6bHTZfnB7cJ+RVQr1tGIcBkro4UkBsxz753Tbfsau11wQO9KPdXvcJ6e7W25pQMaCURdUKIg
                            eqHE/vaBY80pb0kHF+lhPvOfYnU1i6FJgLlX6kULEvl8sXXpx+7+OL6hKhv7/kDrzbx5CZiYgC2i
                            US5Ap8cB55emMb0eus+64zN45dvCBTFQmMMNgauEAIgIrAgACr3Uvm+rBP/5jZIvAMAj7+97bYqJ
                            NmpRgMwAmAjYQaUVwWgBPmKbuLPHU3YhvRuVRRWNWIyd2FFU73sxW2nG2+IOPkpKPoeEPaqWVrBZ
                            qkx1lkawVE4M/8eWzn+iQ76rDu77UHJtJaZ/iakxl4GqDmhAnI1tUY6AVYrF82MD9Rs+fk3WtTLl
                            ZBvWNYK5KMTAqEgsAak+DfQtJw0q8tbfJcLzDLUzS2a0FO1HoxKHgRc32yD94BslXwCAW0/ERmzp
                            OPKYlxSm2CKMJp7nFVLMsmX3aIvyUyfbGpgQAt5sTvMbBhQ8ApSGQVQhUgIoAdapxYecs3msb3qx
                            7oTzppH9x1TMMAIFUY2V6pFVzLIAax30cHvcXhBFHP0Ug5ZqVEmgNOLankzvAEU7bXeHrvDogl1u
                            Hdw7K8NFKFQKGicgSel8vxBEVmQ4Q3vJE/unXzlvx5Q7tLaqkTBd42o95zj1Q0XsZqYcXgyGuhUM
                            CllnlMyDg9H9K0u+k28quxlgmqKzAiZGRU/AeUS08Npj7Ytv6WT9zebmBuMio3htEsxRIbChLi2b
                            1Ju6z5+9D75pnrjzlOpwJdIvkKAvjJsRwNWtSUbUlkQS55t9Q/acTPafEAJuO9hDUCQOAOQRIjBQ
                            Coe6HfrKFZtGf3PRvnf0+nOQskcwFJkiGGAERqgasPDkEB04XvI/tifdaBz9jgQFFQMj1EjR1wvz
                            WuSKFRqS9u478g8PBvwRWCPAioSQAwkmgedahQZLe85zB9A/dqhsFSbh2fTTyA9/n7LS54bWRCSO
                            wAyYwC0U5iTm9s6Xh2+vaLmOu3QuPj3P/8CqaSKAR8USAKikaAoqvuXyQ1RNdzJB20JlQuCKvCxm
                            pUDP91TgrOuO7/mbH6Xcekr0Yq8b/LpX7UfEgIoBJWJQwL5EtpxMtp8QH/BGc/woqrYz1emxASgC
                            asWYVzZK4B1XbGX0rfS94Zx8MynME4Ze14/KDzT4m9lYQ1JqsPFyc1Mda8tOnF4nSV2ydqa11Grg
                            FOmLGeHGyy0YA0UcwquP7h2tkJy7770r2zdqm29k1q2tgU2MtKAE6Dda5ExRYhzc8dRe5tAOha0e
                            2P0K/VAza3/Wq+mx4BqsWksMvuwZe0RCpSeWa7pd/pWrj+xZIW6m3S/haMTTIy7oICIuqUEIoMBm
                            SoRfXZgFH8S5SLAQ62lsnykCAIy9Yl12/+ly+zEl3y41+bohaCqGCHy8pLyrQkrZ7LtOrb0lv/cO
                            Xx+uuGr1fB/s2BerjIlDlrP7PukmzZ4Z96fIRzyT7/bIgNaRsA5KIABQIUQtG40rduzRt9p/P44M
                            NKKp832A6ctNhPDwkpLjI+RSnHGVYP637EzLjk+KsNyrPK8VUmwZwcjnUVmCj8aoesnayTnvYjHv
                            3v/u1pSbdqsunkjDbHtrMFlhzmlTa4oNtomKwqhVQvRKiInKTx/by53Uoa3VB3cdgZftdrmaZp59
                            RkjihOmVdoANIuvnG+PamYdthejdAPCbFSFPosWHM44XiWIM8Kfcv0RULiyzrymyja02xDjnxLWW
                            VMgmgCV37ssfgJYj4ALjrggb83OqrRWVZpFYiAyXeRvd+g++RfIFALj/9J72lt+S9yQGFi4l37Hf
                            DsHJZPNxd0HEPhowarMK68KEaVRUoQSFalXGJVv+gztMfzX3MmMJmf6xqahJbDYQUCIKcQgEXf9L
                            617amKDy+r69xdSpK5Ccp9LxkqeOS62nqGQiMguHCU+baMNk5WiVSXsAKrak0B8sdgtRbFQbBcTX
                            PrZfh3xXR9x9FF5SjdPvaMm26Wij1PgXubRVKzJcGJzVyOVHK0KOQy8vKgtC+jlElSXJlPSPp5FQ
                            QkTx4ghqiz2a3ji05uvS8+uSV2tMWlm2KWm0bCPNMk9pvyvLQW+xV0NpgSyvWRs+f7zmsGYtu2AZ
                            8gVCDJ5pylEXDk2a13HjTsCm5FyxjHK00wLlCbABIALL9dHxE9ooKZbLtjxp14PaLmQFJm9JpVza
                            DGhGqAWhlksborKSOkGJGbjKwNWIZRTRKAmTAERtC11ssMIEVQBAU0IooOgfaEdf+NgvRyf0yei7
                            +7vWF8aUjHpQCLGB+RgynyFc//sPYId8V2PcczRe0h3FX7Y+jIjEkTXUYDVVF2BAMbYfuXJwwqMi
                            Qjb60VrIny3IrKESDJACkgSwqB5cbwimLoCxEzvkod4vDPFYw0gY4yjgoqUt9jjfMQ4u2wy4thbe
                            oYvYqOaAiB5GpjgLw+M1h0qcvaw49pWPiKwAZJ0ZLbSnb7UlYJ/aqgVsMwSwkpRKDJ6ZyUExbmNg
                            /md/Vm/XXhXxBODRKLJBbi9tBKFA9QrqcZkGqCGgshBISSAlW0mXbfWA88hrGLvsClW0jtVgZJDa
                            z5TuHybSMI8PwC8Tr6+IoovBDPks9BKBT6X8Uoei3gYn4WPwyu7YzPlzHxq7obS3PpFjH/7joSkv
                            hr4zUJkdw0AAqEvghAjzEKQbLbDF0DSwTENuGuSmJR61xCMlhameQn+g0OVN6GXDVTZcDRS6AoWu
                            IL7H2KipDBZBSzGaRNq7sNnoHbc6jM3h/g1RgZfki1BQBfZcwXa4Z7UlYICigODyyNusIKha8ZAY
                            NAsL3mE8et/t7pE1jP652EJt8kSRxWqmLEbUOlHrWGzCYlNQJ6iu/GMTF1QsgVhZ2gzbbNlWoPSV
                            iY9FIXZohijybeRICXzezOjE4570UyfOMhSVUEyLy3ye0ZAVlruZXfzkAWmn9PfbBM0S73j9n3Wh
                            Pv7CXJ7QXBGLsmQtWxTNEaxsFWmxyAEOGcAWl6EWqV8YqcwPSLVA1MVI1bEGXYxQZcQKI1YQSRCp
                            BCQda6gKSIAEgAREJmNnKoFCN0opDtygMptMs/XHax4DPttzGfJVVaXEwItXf9oVk8XG434Jd+nG
                            yW83muOLwDBFEZEwAi4REKP+w34T8KpN7Fu6iHtJkumpRg0hiJY7Fau5vgJ0Q9uoi4kkKC65U/0/
                            hsPX/RcAjLzuHzNhF0CLMPtKK0rfZ1s20xgAFYI3UeXphf40AJiYEDDJNMbKvDzys0wpzRijEaHS
                            ffiuYs1Ld49f7dDT6o9uq5s2XpfwryG46XpTzNzfTqT7geFLagEqwL/PhdcEE4HB0HKc3duG6I5I
                            xeMyyepwrDAcLfnUVwAAlLGYo6XREIrLX8JVIW+URfMfcupd1xjTKFWnJ1i+loOZtcNZxfT7T4sX
                            vJU57HSWVMsk9JCH4SXhT4SIwkC1yWTjiUnIzvwsgF0zFgUSArYBRKn7tcHWZwHgW3/zp9GcoZ7n
                            mH7GHNrGYxArkSdjrbIUjM/9bu/45omYzvZ3tKfkoXmeuFpkBdqMUdUIhFLdR49/YOGZF24/bXi8
                            x+xN449kvnlWxNHiDHRmqn5+bl3/H7IFXwCAz3ToafXG9v89ut1IKPc2GOUiHCEaVkQjIFEdm+2J
                            GneHi8pdg3fTYoCFDFAjsgWxFAGLLmvScx89MRq3H//dv1c+QNhc00PUb9WM5CZey4kuNhU/GwC+
                            91b6rsDA/hr6hyhAEVyrrlyxCIGJzJ2Tyc4T8hAjIXgEBX6FAAAgAElEQVSIFBqlCZCjgjCARYFX
                            pOusPR9sTftb+32qTP4rV5wlaCriJArG1kjbFsSGLWbEE1bZVim5nTyWuDQURwFAAEuVKU+0p0xI
                            lrSRQm9irFU1IFo0RbBxPSlx8QD2H7/dTcX5HYpafbHFf+tuhal+34Bpi0iMxgYGrHmBnjrQr39y
                            SM/whK11sV/4s48xk0cGqjfeN47kCwAAkbtTtBJFbBerUoTsfdBQH/LJ6Tt/v/ybfcF7n9ec0XBT
                            TgJpExPXDdSKWMr5iBS0HJ1URU8nhIAf2yn5UmF9PfFu2AUYJQMll05qLsBCTh476v7hN51bd6t7
                            eB2x9piYy8VMXFPHzngsSBN2Rl65alNcMFFKenB3GgBpXrHEYaFL/RpIkGeej/nUr9WM95ibdDVb
                            UaGvcgRdjuwgi1bY+WrNu9daigdsenNxT4eqVj+8/0LdGq1+yyqPAishGR9Yewg1d1CO9NT1rIka
                            e5eLyv1FoPpnH7TBVmoO/3u8x7vrJHzGUlhYIvWjBla0BomkJvK8L/G8j12j0Zvt8/grmm6kdFdH
                            RbEA1DAZygIXNe9wCgDxfX/f98hqT8AAAP2A/+YVezjxsShZR2GkQNUy12kvSvzTbR7WNxwKsuWc
                            cuu2hsesl5wpSpQpg1LFxxyBkKRGJ/6TPIbPqqoHWVJLHACMYoFA5u7XRm8a7+Gu2rk3TO2Hb1Gw
                            DVFxDmRI2MXBQk3BGPD8zq1vy+/oUNbqg01+qFsHzM/HoIoYghpjVcEgYEDfDj0VvvX62W5C8kJ8
                            6LKRKgh9SEX+zC05JXE/u/14nDsh24rjbwTHXc7gYkZbtSWPMlJVSfF/FhT/9L5vZbPeaF9bn61T
                            XxyIP2UCj3JsqqRxWXI51QqOMps0LRtnTjabTxgBP7Jj8k9kJCOOLWgAsZqk6jKI0I1I/MHhLMzb
                            9cGRv/gue7df5f07/KL19yMl3K8aVRSjiMV0kZJrkUur7eIVjPz8h3Z2d020op7acwZPS8J3QUWQ
                            QkkUylJ1CpIwYPL+w+8a2nC8x7x9JzrPdI/cQayeAStOs0EGrYmqQ0c8WkY7733bgn8/6OfzqUNf
                            qza2v7i1VkXgewaStiFqiaSxBiIxkigURrUabju6MmFFAV5s1T7eBN3UgLZVBS1lo47DkKhGC0P7
                            8oka9+5P4i84l4YH6SeRorR+KloMEYYFIcTbRXF8zd7fHTr6r/Wz39mj+5IW15Sl2YNMEpSNE4IE
                            DCMkIIkUv77j8z33TTa7T+izvE3v46OD6nmBqBIEbQIAmfEQeQQ1VtULJIYXblCjz/6mnd88FYGr
                            tip1n8/I0uRDLyzmf4aUNChbKzYAAOpYQIsakzeQbdh6il//wvdV2ytKYVvczk/nzLMQBWKheZnI
                            Oho5wpKeeWZ/nJBiodve1jozL9Mjvfg+Z2hIg7FkQx4xLh5G2XLNmH7QJH/qr/aqyETNe58bRhMj
                            kfpKhKGcj3fvv0a2upLh4Vc1XRMTUkMY5cNy/ZF9E1rgdKuLZZoS32nZjADgWPkdBUItGI1RMrb1
                            wEdx3wkb/6yXE1dd6yYjvlUYWcNi1CxEp0HI8T190R6XHuXmTuT83//tbGux0dmJzV9jriQ2GxjN
                            K/2zEpX5eVHMQpMGwZCsV2t/KYrc041murgkwAR9l0ntxq8t8v9gxY0ahNGSYLmSZ2XZmlKN4ud8
                            WZ4/5/O1OW8rAgYA2OHh9v9rtZIvjGgOXUrAGEFOCqglBBStQjygAtYiDedcrCkWJShF9RLnZg76
                            FDSuqXuxAFhjjHzHLsIc6UBBxZ7P7pr+bkUqbId7298batuPRoAL8wDT1dnUSJGzuHht0/zP2/ft
                            PmMixt3ptuz04dKeDkSIKiGIrQb0le5Mn5JInMQgj38gnZAkQbtfX3550BfHlGCmROQXW6k3ihRr
                            s0zY99Z93POrE/keerU/7IXC/huySBRGFmZR7zqEMPj40TghWbTee0H5zjiVK6IyHmDUKgCq6lh0
                            kho1QbDbluV7H/54nE/Ymv5vPiMg70MCPnioOWeGRSDxRrrW77FbX3EYTniF7Z3PCe8KQb8TLPU4
                            pSGGZmqk2jakzeDL3iSilxuabeYkHQqOqyHLu7pM/GQpNDU4060iJkKzANksdwhBAuaCv/bA6e7h
                            ybjeJpyAt3+QU4FFV5etaevMi4v3JKVCleIBEICMsC8RHPZRsw6hZqxqW7QADEgYW18i1I2QGIG2
                            AMZLyRdBeUYSPnDXjtFK+aTY+NbieixoO0k1Zm8qFeIXCtQ1glqaFUHX3XuYCSlbtNVtjTPyQJ8B
                            dpCKeaUNsp61NKKsznAxamr2pUf2jvcZr/E+8VAruX1+8myNQxHEdBnKW8hRCM70EIbMBNcKJZRr
                            duHJN++PD6+qpHvyLe3q84P6+RGN9nHCJZIoKHDOuDbZKLPKo20w6/Vaf/q9RyfjFm2zzYWN93qM
                            r66o+Z82levHmswThWjpvjRQNFuKH/n1CfG8iZr7sVe1NnhmkfsxRdoGb0ixMI7i4bzMZ61Vgc9f
                            c1xthd0z7PW9ct0Wm/Nt5EfL3E1FEAZnJYB0WcRRLEOwqM3CmOlOzAhgpigSSChXG5vA1E2oy/1Y
                            RD77/+46vfr0ZF17Kywz0Eb3jh5clLVrwHlw3oJYUCRRECUQWyJIAPXEGJsiQlcttLAowwGkFpAq
                            xpfemLRtVF5joJOf3hMfWFlK2+S+/H06CnewsVWjkKOQJ1dkXmyvze2TTx2MO03U2Nv8vP33eSM+
                            rYyLqTWOns5B1lE0FAMvyMFM7TXZeffvX3vLz5UPuU+3emlR8Z1A0domaAaIwKpVNOTRexZjUlBV
                            RPKoqoZwlDT8/OHDotNXFeLd/eL5BzRM38lCdl1UDQCIgKoimCgCMUM1troQuFSD0WgG+o7+qPz8
                            XUdWfvaW3XMX6i4R6HcMagMACIFKMu1CQiVh4jqwCKI77FfH40sTqYNtzytvRaQqqgawogxQdcEO
                            BkPmoZNw7xVtk13O0Y2bQS5LKXuxxGSaUxwlDpkQJFZoOFde06i0ARxYwiYjJR5CnwGTGZF2hLjA
                            o/SJ2ghV/nnO5+wjk3kNrtDUbDvM8XswyKkLynCYpVhRMEdkBwCKYJW1dNZgYQQbHqFXxapTGGHm
                            ukHbTkz2H5un/pwfbNfdWtmKe8912bWYuD0qXD7fsNHGNvgWYVwqAUWCWz72AXx5osbe8ZbWSUMc
                            n2k8NTUKzpQ2BxfYlNDKbZhVifC6h/dNj/+bT4RztPtXC8u7EKguYFNQFVItRDUFRY0sLPKBe5Xs
                            cjfmQcQRKPnE3LUVDR/74wP6ysm46Lf+iX4FVbYqBDdxIMOk3FZ0TnVpOCGhIpNVbqiwKSiaQYA+
                            Ul3EYKKp1fCPtxzmfv43+zwv1h1Eim8gxn+sYKIKFhW4NNmUyJtFQubYh0+wE+re2e68cLFaWRe0
                            VKGoQt7mEYYFTTGbRL598i8/U19pl1Y7fd+fCSVsWKJOs0rDpJh71D5gQUItwYgajVrC7SSiyoIy
                            hKnGuLxFvOGUCM+77eP2e7AKYKXkxjzwgcYmz+TJATHJ3xWq/VbRq1rjUEY8QKqkkVEuFCMUaZvI
                            Jl/Zqp/PuXjjZGSyKO6Tj2T2zoV2IEWYn5OuaYNrMZWpKlDVwtPvSKLdf7YzNids89zU+mwj2H9y
                            GA0jBt9G804QrwnjXFTwNqXHHv6APerN9nvKvVJ9aCDcr2i6RTAygm0k8KXwlMjCILOvMFDVCLQA
                            3fKLSUNADV4kpEJJ7FAHvC9+PKueXnjrgW7+yrTXftfpjouz8isB3BqWtaFAiKgiCg4BBBRwjIAJ
                            ECGgBkYAX4KZQcptFApgFRmhkgjMta48776jKj99s3Js9oNiL2ujb6GKN0CtpeQLAMAkaSSw2Auc
                            /MiJZsJ969ueX8wxwbQCYTcQqtG8HRC7Uyruu/fEntNW9h478sL2Gi8OuT2sLT+sCEgSlUBIQCgS
                            xKF6IZsUzFk9Ul3kwV+zVlp54PJTVp2n+is9OfHOv5R9fcg3HPK0Wd3GawpollH5svN2ZLprnv3z
                            HXoWTFblvf/nzb2HvLs+ATufEatq1VHBeTCcJoRnPr5v8m8TOf72N2anL5TwrxHYUOP4ty3SDSPU
                            xR6kD30oksQ+8PD+0ew32t+J92rPo4N8rzD2KqEhgZwIcw5SI4OlhjbFUTJ3lGlzp34QwS2XO4OA
                            Mzamgp4DoFhiyRAdOxMWTYfysOtndy1aKXa6tH1aBtFpMeFrqMrgPRprssDSxeQSUEQE8AC4NJwP
                            A5S12NHT4LlPASMWTRyYoYCmmzQrgsZdNZt9/t6P1G98w6e6Hwxv2TZdF1v0IxQgiIncUvIFAGAI
                            FRE86PET7QsTqY/DfhrsvEG5Ua04D1G/Ud+2rKPB2qoWIfzqU8luk22vHXJ+uVkOvE6bsV8F1g5e
                            TE+Cj5eYRXXEZ685ufcJWAWB0MFbwpa3tC8rJNobHTIGYiUgCIpB29X163bjG3dNJtSHt9etIyfP
                            L7q+JpA7Y6KmKbQdDPYABnClDqV1c+/9+7qT/1o/B/9C3vXbRfpEt5WnCrRrxnkxrzB2BioEMloA
                            W5lGw/9422G9VwMAbHG1XCaq26EIC5oIxAthFEiKtrc0BX0IYGJBRbbKo0TaEHTHPzIbV2jUxCaX
                            8pmWYHYEuBhYQTUQG1MFJSHVElQQAcMYAWLVgcwLYp/cZo38787dK9X3/8RfyEE2UwaLhnwpOs2g
                            aRqCFgeoVSP/d/d9KLnlr8rxQ90hlvJcR2YYA3GwWieRAsSiGHDEoQCyhzz0MZzQH6nZV2mUtfx+
                            C1ruy0AFJBq9JiKxOqFS7NSNupr7XXJ0VyfZU4eAVw3scdu8zebi1F+gFwSDxqhtedE+g75tpVw8
                            va+2+c+3x9GJlGGvmwdPfclXvp56N8hxqNjghoGY1IsNEdRnmvZ3fRF9+ReHVv/XOOHDbgtTX8nC
                            jaWYaQw2NQqZIMRk8tyUUTO3+UyrcP6Th1b/7HJvu2vKb2Rlex+Ja10YAI1SK2CoWeYRpcShAv9p
                            sem1jx5BX1xRttn78oHpi7nrXgBSAsyQVdBQ8Ai9qBJQkUmlYNKqBv/EBl181hWH1H/1+n52uTw/
                            u1mYXcRQ5AIPq1UqvZlmsRyJMFmUGP+vd38kvuf/dBddpO9kbVyCWJdlfb4C4jQSa1rSVut2ffgE
                            yidcJxcVWzQK+aZSRAAEqOoBFVlCpUpw890nx1/t7OoOAa9SmHGj7j4tyi/JQzLTgQ6jqDJhqhZN
                            j4ZbNkgbsy/ZuW9CCynueGPjX1oh/RAHqFqDjbaB9RzzYAS0sLBmZp/N76pac/Qte0XLkfBRt7f7
                            nx6On8EYvBHKwIOihcBFqEYWF3nI+5y4cx4+Iv6vvzT+4TcMr/u7vH6LxRYK1NMuzR5raroRwhgB
                            q4ItQXufPpKmrCi77PiT7LSWulOt0KiqWkQMghDFUszLlNYTE2Wp6hm//Ahd99f62vWy8szBwhxd
                            x8ZTBXXNEsQYgleNyDqGgZj1q/d9zP1ZNr7NL9AZ6PSuiHChMrhlfb7KuXEmWvTA8eYDK0IfB140
                            st7iEF+AGKuARqAgJFoKckwlth74lNuvs5tXLDpPWMcB8w/Au5I8esVpazQI9wCiRAwDUQ6Lmsw7
                            PdnoPWOiZZhzQP1fKjj648zx9JyKmbVSn2brahxBPQ75gkY7bNHMdLlLo489rFMeH3Hz4ohe1UBW
                            GQgRggikriJDI1BsXDGVf/tr5AsAcOWBPS88dbh597uM33ZaUlzTRLMxwXIxmRIBD61QwwjOSBBf
                            BtWxijcAQCKlpWbrPf106JMfxk3fCPkCANzzoegLXc7fOSRdOyoJIje4FsHTUBJi0dZhtBftdbnf
                            63Un36k2hRtThy+S92FZ8gUAYBdXVhT5AgA0ofrPrFgLQeoEWAADiVLiQjGAZfH9zk7unIBXWcy+
                            z6dPD5kBZ3GkBJ4CiGoVm4JIxnDeh40zfrFX7wUT7hK5aeSYhWX9TIRS2EGSFNHcpoP3pEX2cmnS
                            /sBcWpIBQICq8KKCknfYUDQQIx9QuwQ0jsgOYAnMcfuCxw+pnv1mZTj8hnn4bHvGSwY1Ax17OY6I
                            IsrRk0fZdVaUTXa/ovjmaEm7I5ighBZYwBENxQ6OuueIN58978DLC9fw+NWWMfv4Urud4RFkCQGT
                            ukFpgCh4r+V6/fzvLw+2P2cwr4CZAaRSZobWjQIuXKY7tdLc54ET6ysksme/i/OPLizltFjT+axa
                            JZAyCNYJqaxA9ru7Tq2c3NnFnRPwKouf7eQyMY0DU5TnI5VFRqCJwAWoEJYsg1llhSRRv3P/7h/1
                            mPwMNuJMadpsQxILLFRTIQc4nBqbOYzSCI3zJlkDAUVMEpeE0wxBOwB3IYV2O8kv/lvId+w0PFMV
                            wMBYVRJEREEFITArtBRMEWwGakkBHalmimRYikps/uSXfjO44ajYT6nrl2tc3lGx+DyDiRVi4zAf
                            BFYkNT62Fl8bib9kTU+KNE1EIBE0UcL6CkIR2ISagES9ku+/osh3z4vynQYyOCVGt4CV6+IkRuHA
                            ASsl61QD2ec6O7hDwKs8Nq3Q3eKVGDBR8FaFnJEy9+Tq4KR385vknhUhx30HVS6okvwHkIHgqTfi
                            bMEyXzuMqGGJ6XHpJRlqIYKUWoiaEvj83x6cvqW8s0vLlC91BsDSZPYrCzo+3fzs4LjsrcI/GQ0v
                            IyNbGBlWIANIy+0lAbQKZC3BiIqaEmiKoiEMHFDxsNtOTAdW1NQX+egiZ2RxQKhbghFqS8FKVaa8
                            tk4tHHH7qf3tzu7tEPAqjyt3q8vDB9kdqqQPITkh8TmC88iZUhmxqKy76XXZCnmq+6sDat9MsfgG
                            Wcoz88fPfkFUGatRiBYE/0hNEUYLfQh9loqvPjY7+cE4urdkaQ6Plca9CvRH36u+da/b1YemZTfJ
                            Kd1RuDXHrrULgWlGtfm6ySsgIovUiMQbKZuqHDGaIx4+gf6woua+3Tn+hzWE34tSHNR0qQ8GLECw
                            WJ8RuY9dc1z0VGfndgh4tcJW3Y1D0IdcbTR2w4xYitEUxWtp4n/f5JrGp1eEHA99MD2r6lrfjMJY
                            bOlS8gVQQIWwlHxJoWAIMNPysY8fmo7bE05U4D8lUIKAAGHlr/Pxufa48cMp3/Wh+As9hi9L2M5T
                            VPc6AmZhicAZ5FBW+yp8RUxwyOPHu2dX2Dr8vl7PTjeUIAmJ9YYlB2MQSWUq0WXr1Bv3dXZrh4BX
                            O5yzfX8+M1p8rGBRMSiZCFqj0PLG9lQ0e57jyn9ufkProytClgf3r39jZr/bSIuRa2KHvysVpgAL
                            EuSFR+lDyK/KVH76+GHx++44JL12HE+d9nUeACsK8Yq0g1fwYz80uowcPK7lo+7+SPTlfrP4iwXD
                            A2R5mMVXSH2RI89UklJLvXXNqvnYbUdXvj7nuOTlFTX3Lb7buj2BEg1wxlZSVYhIqF0iTAEIo7ec
                            RP/1/aP7pLNbVy5sRwUTg9v3nXXbO29snUvgTjHWlspMGIgzZ9czCi0v8Te3urlsPbJfdPVEy3Lz
                            bhgA4LMdq0yQfo+bfi8A3Pt//f2KztO53wV+5yFUKkWmJt6+ysZWAXJFigVFRh48tfrBjtU6J+DV
                            Hs8fUP2Kpfa5wFJ61X4yoSTv8hoXT4mh2OTh9HWuHq51NNXBeOD4a0dxt/Pz9y1E820t1ZFoEQx1
                            AXhkxKgE7P/VqfEeHU11CPhtg8f36/kqiR9wVgeCmAoSykKEHZyXoTzCtSJTG3z39cv7Dzvo4M3i
                            hOsa+OpgvEOG+F1lMDHlrxbBThfFxBKNIjP0R/k3O5rqEPDbDhkl27hAw45oGCRIbxQ/54n6iiDT
                            HOkQio585hFdrR7FWJCGoiznb1XwZkXKUKPgGEOqKsjQqqF6KUwy3ZV/WxzwZMZLg5WdFofivIzc
                            Wim1Xm5xvHHswkIj0AbPbFN39c+PT3/Y2Y0dAn7b4bkDsVhMuFMGod8BDOctnJli46XYRgsiDQ1D
                            3LzzRX7pU4+E1eYkLCKOdPlaYg7M8AoVAnGgVJwGUBJrtZYwvGwlbwi1Vqsfu70vzDcpSvi7GOJF
                            Xa3sSfAVIIwLEUrYlamSye87ITq7sxM7BPy2xYsH2NEulZktw+tEThbm0DULhFU0SkCR4iS07nqB
                            f/OZR3S1sEkBdoouqfALMBaHG4i6V6QMzZLWrVh5zoEbUEDjod0rFMdsK6vNuj/gB3zYQKDLg2gP
                            WJY8TdcsrM5Uzcg5WgRe/RQbju3swA4Bv+3xyIFJwwXfk3E5yykPGnEZoDcOdKAQN80mpnb7y/Db
                            1WGua1f4jKXrS3Us+BbF89ZX+n9fUTIo8HYSQspq0xh0HltbN3nRhOZQY3XQ8Y4X8EcWsH7RIo4Q
                            +oLbtoIFs8v9gE2SEZuHP/RWzZE3nJgMd3Zfh4A7AICnD663vIm6CsCUyaeoxjNozXDIouAXo5M1
                            N78u/9Um15Z/vyrPc4O+7ByEnAUgFSwSEBUAEBvgfUff7Nee6PG3vbS4UNDEbOIKkEfiVm5DNJRE
                            8MJtx/YXq/o62vWHfEQp+ikloljktZzdLBf7ESAGieIYyqw9rdd88ZZjo4HOrpu86GRDW4nY+uri
                            9syYzVUJAJFQJVjwDUGXRMqLGfGsxz/oLl5V57fFT+QZRl91QQbyOFm74svnGE1N1KTGtxaqNecm
                            5OpLTsnMCgFx+awNhJq+7lgrMPayAgGAQEFUIVvunwT8aEG0dqzZXFEbK2mkxhhVwLRoXzDnhO7v
                            rsrrZvcLGh9rQXyCCTYzkDVZXY2tqYAwBrLdNZs/ZRg/ftdJ6Uhnl3UIuIO/gM1u4BewbKmidWoS
                            Q+zbBeAaFrQhJoqcFJ9+4pDkx6vi3Ha4rPm5pkk/hwJjKerBKACIAcyMw5YP3E9gMgD449NoFYmW
                            I2CC5U+r8sdlu6SIJigALkfaSm2nkpADHC5AZjjhYTYUxywvrNuVH3TZIT2r7Auwnc9ZfFHLdW0d
                            s5knNiTC1imgM1I0CU3hvJ+bdkUn33qsKzu7q0PAHfwVvO96/RKz/4SQqTiVIQQrhvJmS927EjGv
                            FUZm2pCd8utDa5esivPb9HL/TMSUi/MpFKDGUtMijqqKUdSYJaoAgKLo/xoaRqjLEbAq2SWZ1lB1
                            LHQPUV93aqbSC/SgisQqcz1SfwgaPX6C22RVXSfbfLe04oqHjY3all2jlKw/1nheIN9NInmwSVfk
                            5Q9zPuk+3NlVHQLu4E3gk49oPOcV/4QhkkJwlkFsO/WLPelUUpuBBCD0pWPd/KHZXdmqNLcTb9ZZ
                            vxotfhEF2xIbImItxSaWBWpKYJzoIIguZVdDgNlfWqKiGL/+jwj0j4mFxv6Pgi3DcAl2GluuAZgy
                            8/a13x2He6+K62PHc9u93pY3SagmUWTmc9Aqic/bjjZIvHsZKXAZcvvoJ+u7dHbTqoXOJdwkwPe2
                            woKENxpVfo8DGDJYNoYZ35va+A8CFJVopgDHbJLk2uNvG1xjVZrbD/bD1/pCvoF1MI+Ei8jahUGh
                            12oY7ZLsMVBEQBprZESR7LLNKLZJsCDBAhnZCLQNL9fKsYSXCMjIJmBmfTEMEAHwiBqFpgR876pK
                            vvt/f/QDIaXrNHQT83BKZfCiZSouSqul+T2YNiW2uHJaFHbt7KTOCbiDt4B3XzZc7YkrHy4S8wX1
                            BQa23YIuIW5lNolGpKAYDMj6qR5zzb7uF6ucO+LH7VldUfy1tuB2AhAxazUBeWU5F4Ogfd0JwY8d
                            jnHJIVlf/5oOFcAsSXcJCOALLGYkUHlZBA5fv9YevHx2dZX0h+50XvuHpTXro4+CM6PDpdanheC7
                            KuSeE8LEG+nrUj7rjpOin3Z2T4eAOxgHnPqLBj4+YI8bjpJzk7ycRxByoqjMmWdiZNSyjKAgB4Tn
                            fn1YtMpmtdr5Sr9hCr4IJl3+uXJYfk0aXD6Z+xJv719ctzWC166djatsqNnsy0Y3e2E0/mHidD4H
                            VwkUalZt00DWQkhZ2EeFtTOmSPOA2z7e83Jn13QIuINxxjZXNo4pTPVfvUi/szgIzGpJRhhMjYVq
                            DtsDntPqU4fbtTvaWn2w8QX6rzXh3RTUIKhawhFhiQVsTIoebfBFCTMoG9n94dOnLuporEPAHUwQ
                            DrlNN362xT+PTWiy2KpjGWYwsSJFSMAgAg50GIxe/fDB7msdja3a2P2i8O12IZujcYFZU2Mll9JH
                            rFRxhodEIa7G5vpg+Pv3HlvpvG7rEHAHE/45emt74xdbcElA7GWgqgFsIlgvIjGRKYU5MepbzsJC
                            Y5MzHzgIb+pobdXBqbco/Wauzs45+wKJy4msHysepWiAs4x07UTgZfFaTRJ720ZTR/7tnIP7tKO5
                            DgF3sAKx3VXy1bbyMQBCiDYAAKkiKQKx1Tgt+DWxmiDw7dv0paeduyuGjtYmN/a73L9/sMT/su3W
                            SIbVdzgwiwEBQYQIMVcQC9LSQJVk7Zj//qrjkgc7WusQcAcrCTtfOXevedr17dRUuhHQgyoqqAMT
                            2KgdRV9QGcdT08K/0EL93G+PSO/vaG3y4ajrtPK7eeFTEMNJlQJeQENqjQxkntYjxdIgtFihpqBU
                            wfDY3R+PP93RWoeAO5gk2OQn/LixzV421RpwCwBTiJQXCro41mxeA2ubVVD+AMBtEJr9yOH2tY7W
                            Jgf2vXj0iGFf+VTwRR2iBBy3hgDroNo2qImgCaWydSygBuiHD34Cf9TRWoeAO5hk2POGcMhiT18P
                            2UAXxj3sIAx6k/Rb5tEl5d+JDaWF12mb9sDhQyXddvsB2MkPsJKw6/kjkbjkxxm7d7rAg4pkKRRt
                            jtNKUcgaaaov5QWt3R3hQyOFvPexT5jNO1rrEHAHkxi73JzXBoM+rz62FeI/+KLsC5jWrcWG+tI4
                            yAdYoeqsGyyV+uukD947O/1YR3MrDnv9aBSHW9mYzR8AACAASURBVHhXqdV3dEf+0cLbWWSKQtEZ
                            UYksulHH+UDQuFfNCDrb88VfHE+PdjTXIeAOVhFsdY280we9XUEjBBIj3AREREIuQ9FHcVRUQvZ8
                            aeKp4k08hdrfuv3w+nkdzU0c9rtCpw8vHvp3dd3rhyKrRZXKYh+gN2jRRRTnFoqmIdeSEmMfYc8U
                            bl7bFLl4zik9L3W01yHgDlYxHHBTNqsp9pih3JwaAS/yjL2gCJAo2LIYFUxjEUmMgaZ6cWzQVS1c
                            9sBh7oyO9sbR1fD9gS3btvfTEor3WYobKMJApCKSEEJbgY0n6gNmqGr4fZsq6znjT3pnl330ksNN
                            J7ysQ8AdrMrY80Zdb6QsfgTi4oDSQz7k3sT9JFASQCbCkTHYIoEyV13LWGw5LX6+/vTK9y7fBZ/q
                            aPBvw2FX6rvmDYdPl0g7kM89YhoAVYgwiIAlghIQUIOQVW4AggrQjzZdg2447yCTdzTYIeAOViPs
                            eEN2aFG42ayyGXER2NQSDCpIEAQkAQAl1FJEIgLwAajeZ8Ktwxk//fgxtW93NPjX8elr1TwwBKek
                            0NrLB9dvgrbFRgmjVmzIR8GkRoAtABKByZjbFULMg0tv3bq3fda5h1Q7l6IdAu5gdcbe1zWOWizV
                            L1OeF0JJDIqIIMygKaGUVnlEwRAh+TLA1P+/vXuPs6us7gb+W89l73POXJLJDQIERIS3CgoKRS4J
                            ySSKoq9gQaSAokWLCmjxUvu2tq9Ya9v3VRQLitjKRUO4SAGlCiJkJiRysaioIGKpogiBZHKZ2zln
                            7+d51uofMwkJCMkkM8lc1vfzmc8nM5mz55y11/mdZ9+eDWuQhKs5yks7Mrf8jlOyH2oVn/XWG5qt
                            /YV/TU9v86CWCp9GnJVMthaY28kSbIwDBBeTRasR2xSINxSbiE2waf1Nmzf/786z6VdaSaUBPEWc
                            sULsMxv4Az31eL5zLpokzQhpI5LEzlZSKqsGWTSc6lakyVG85N4Y5lLI+lYU1w6m/Ns/OtM8OFVr
                            uPBqeQ2H5t+WKd9DnLhqwuN1JwciNZPhLHjIOghQws4hY5JlDLBJFTImpGLwF/vPa7nq+hOtnt2g
                            NICnsmNvSp/pLeWsKskzIfEM5+zGptB+JqHhiAYY7BOZNifUZ5692SUJJ9di+3/sTPZ5sF07LW54
                            8pZ3zp20lzuffPXGGb2+vaVCxSHPDPA/Z1RZk5hrZGyCEJKTVnAUJ7yREyrB+g5hslVJvxUynqX0
                            Jec9P/mAeat2ndIAVlt59wqZ++DT8j2PsiCxElKa5iT1lbYyJwP3QMAMV9myU8qyOdtaDNo8H+SG
                            VJJptBhXe5Ure9IDZ82Z0LNzveXKQbu630+bO5P/+Mky+6Itpc84hILDnt5nG23kOpENIuKFiRzq
                            /SQ1LoVnG451S6FJzpYpUSUY+AfOqXRqlykNYPWCTvluQRyx328HzO29cAflhIE2ij9rRplHxkUL
                            amLzfYhjdGJ6B+LAIblve5q4DGLYsVTzQOgwEhuzaPCmtmnT7vvWm+m6iVKDt9+c3v7rdQN/JVmb
                            kYKq3pTrTdrQDFyZmdm2tQmp4r3tTcm0MHNGRMmAijph/7ay+RDnud8Y6FgbQt/ctnhlnflTK/+s
                            NWl3KQ1gtV3O7hLaWI8t9YI/9lTwf57FtJaNy0iQnm0UZuFkASPeUG+DeV9Htpct51ngnuhsG5WI
                            WSY9IYTphk0QorV1+HnzKsXFt51W2a1zGrz9hv72x3voavYtmfelFUtVJBFhlyEyyNpQmvocZ/M+
                            argofsBzpCyzlWdSLNvJVgIAhoglUAALog1thvJiD1e+c3ZH9ruvnUgavEoDWO2cw6/nhygiwggY
                            VCGRQEQcRVoIkkySYCgUgSrTLWEQLGSGRsub+0lEHGAEALFIRQDHhNyFwSfYVp4Qa2n/NrlWUtjq
                            lkS3nFy5cSTP9a03NGcBWLTlz57qLxY2bPtLWmKzpym0wJu8DxAhokjgCBl6XkPPEy6JVMlADFAg
                            QQgS2FBVINYB/ZyQAyzOoTclVCNCPju31/dLdttcs+7RG8+apcGrNIDV6Hj10uavjM9LidFY4sES
                            2ZwKN58o2My1mR+QJLmBFGzE2YQGBBDjDInwFuG75SIZBCKJMcHUDEtZkfLJuq2+zLBsdRGCobJB
                            ySTOXVUiGyOmAAASRAKYCIkgkVOqiHEkhIwTsuEwtQDgJWxgG/MklZoBFwZu6P5wMnRTT6Khkerw
                            7xOQhIg5AVXAwDn0gwUkjjkkT0Yik8kRI5zlgZTsU/e/PztLO0XtLL0tvXoesc7FhHYyJhlGEMDP
                            qMhfzmjzHygH+y83HOtlwiwTU2HIlEyUgdmKiBkKNfNs8AICwIABFpM7jgMOqb8wlT0pxlIAv+VX
                            IJrFFKomlM3EUmWgwkCFCdVEqEVBa2DMEOsMDIiZM0MoCRIMSWlIyuhdO7FPBmWRJzwNgYEMDTaM
                            oQDAiMBtGoAQTOJkMg+70Qo3UpGq9dK8rIOK28QaF0HtJsVSjLdRqL1p3FztEjUanJZAPZdFqgvE
                            MRufgJoIm9veVtt0N4Y7AHwZAI74euOCZsL0isWSyJhGBDt0l/jN4WuGR68JABMoirE2wMyEIDlD
                            fUxS2aohWXrZVfMQGjMycutFxAxvqiUIxBAFAVlhMRAhR2YjAQlEwPAt61PkCpPNLexg0/E+nnk9
                            YIiBTAROZOuBRyKqWieDVuRbqVHIHnNaf/4fp9HynwE49Ip0bksoHwU8CkN7tkT5pfiy0C5RGsBq
                            bEbAQsaILZJwRchZKxj8Q7/3wFnVi4f/eeHJN23Yu87Tj+mrN17Wb/NXZrH/92Ja3myEC2EhMTYH
                            jDEshTPSW4JmMmJVxG+1G0yYKZBMz41fHVKaZcn1D+89sJv3ZhiTElMNRCBCzjHmmfdrYkSbGBgD
                            1yRIZCA34hpspVomnuFT6gWQALeytOxnu3jPDF883jar/ZF/O973/aHXmEd6iqlSBSTlHFeXprKn
                            KaBXsikNYDXmaPPocxtuOrnjSQDffM6PPw4AC65NnxkM2Ndz7CXiQ0TE1QS/6UPlsBx4eqvRqMva
                            s1CsgavAgAsrZqt9xCzJGUvBEprgJJKiIedsI4aX5pl9yqZmHVKT4V0MIEIsyvhUCwZXrzqn4691
                            lSoNYDX+R8GjeHxg5en2E3/o5+++VQjAIVv+7Mm+gSNW27bzpEyVzFBPyVJ9zmeCgKVqDDVTjJVZ
                            bdnt++XNm5DlwsWAb6+6By99E7GuQaUBrCY682wej76r3kIC4LlTYP4cwJVaejWV3mBKbTH89SAI
                            G0LdCuokmLojyqEzKADAECAEKZ89zqiUBrAaIzSUNJo2W9VE66E0gJXa1Xh4RKwBrDSAldqlI18B
                            ExB1i0BpAKsx3szmBBADkOHzb6fuJeuy6Wo+IggNj4FFz7JQGsBqjAKY0qbNbQPADgfPFP0wQgJB
                            BORk6IPICOC1S5QGsBrLkd/QETjd4AYERoYvcx76gNJpJ5UGsBrTzBEzPAKe6jPmyZbhq5QGsBrj
                            xKHhnZ06Xenmz6OhL62H0gBWYyuxq1mhpgAZADOV90MwOLeCBomEJNKyaVpLpUaDXoqs1HYgIBHA
                            JEgkCFoRpSNgpXZVAA+djrbp4JsemlQawEoppQGsJhXP2JAgFQIiASW2Yz7gSTvyZUqb7g5tyAQi
                            RD0rQmkAq7ENnk2b2bqxPVwQYkzlK1LUmNCDcOrFQjjq7F/PEoAg+p5ROgJWuyBvCEgkiEYQtRzY
                            dGm2UjoCVmOHmStExAx4gEWIpuymNw3temBh5DAiRlAkzWGlI2A1toM9PdAEACKbL8lWSgNY7dL4
                            0f5QagzpLgj1AiM/mOG5gKd4CIsVgdVpIJSOgNUuQwATbT4HeAr3CbEQEQgGNJTCU/ompUoDWI39
                            sA8EEIQJ2HR3jKlcC4KAt5gdTk/NUxrAagzHfYIEIZBQIr0RJYYn4dGJ2JUGsNp1oz+a2qPfZwN4
                            eDY0rYTSAFZjvM0NC1Aa2v0gYCCfqrWwkAYEQoIoEEeQANIbNanRoWdBqOcHsJXcxbSerfUCMUPz
                            IExNiakmRjIaOhZXpiJWYL2eEqF0BKzGKHTEtgBGCMRBqMOmwfpUrUWeGmt8kp5kODfRFMhAqZCK
                            donSAFZjMwLmaFJua2CGMSYYSDlVa9Fv5BDkEWRs4si5kNhqa7Fau0SNBt2UUgCA1y6VG4qEWTmF
                            TIqGD3nLzGriXwdjZxhJhWPuLZgxzdbvv+vPZn1qMtfihC81PtqD/BjnQjuzq/gQNkbH00yqNBLQ
                            6l3aUIKKGWng3tvPn/457R6lAax2yOuX1t/fYHljwbV9tmoMQdj6qL8QpE7wVeaSsj1c4wv771O7
                            9pIlNGkOSL3hsg3vDdR2VLPs3w+ufcvpf4mYwtA/hAFIIOrIEZ4u2c/Mubxn3gz3uaXvtOu1o5QG
                            sNp22FwbDn2qtLfWqPg9m7yCuPWBtucGMEO8BQrLMtC0cR6BSiOmZG/Pe+Ad9KOJXIsFXy1eg0hv
                            i9YcBYkknFsjUmwuhcBYoIFNF2AMnRBcdZH72KdKZLQZUOkDffzuD2cPaHcpDWD1go5cGq5uxnJJ
                            1bjHEWG8cRsKmD1eLICJODKHWqI8J0rRJh6EJcepdM776+89K5uQm+IL/kWOCDZ8NiO7XkCmQNoz
                            j8XqZGttQ+FLBgAsZKsDkQaxKJOdLY6dYalnZHtSklZienjlh+1faZcpDWD1PMcsLf+tYDnKCfcy
                            fIVZchiwEVe+WACLwAglT5QCJcuRpI2EonfS24iY10rhhlVn1/5mItWi87LyVU02X7SE/ig8zRnX
                            J5GtZOIR7ebwJQIbkeZQHcgCgDDbREUtM9k6Jsk4FS5QNqvC4Qkh97sffCg/X7tNaQCrZ3c73FA/
                            bl3dXMRkWwgmmiiltTQYkdpgQR5uI0fKc8M/J8IvnZGmRaj3NsLhktVeSbHMo3XtPsgGoWhBNXl2
                            M13sjGnll24/tfL1CVGLy9YfsF6mX+elvj5Z35aX9HTIzDQrtl5iYBa4QhTKMstqv3CGH2y35e+a
                            tjKrt3fg5d5XD2qKnZeZeo+RPISI6dbyoIhzJEhElIjwyMoP0l9q1ykNYIWF/9582eCAvTEKtWUG
                            60hSMxg/x4E3SIyWrfM1SXesfFf+gpvPi5bJJ8vB9cc0s+n7oSzYm+qGLXuJSfKD5/L8q05wjfFe
                            j8MvSTe2eJEQyhkwOUWO0zNkq4NpzKzaym8z4Qe+/wH32RccPV9aVuqWv0+FRy7F6tJVZhtGk4jS
                            8BYEO6l/qOuClse1+5QG8BR2/M1Cazfwjxn1Ga228khDaJ5hCtbLQAqhbVrult91pv/w9izrpOsH
                            3VP9fJNDtcZkq1v9p2GK9b7VPzqv45TxXI/jruRLXbOs9ZI9ogp6QkJhQFUh1LkplekPfNDN395l
                            HfX58jKh4pWZbVkjoBxD504wS8ya1sz+0fn2cO1A9UL0QowpoLeBFstrqcW1/lcTsndmsY5MZIkp
                            y6V53/aGLwB867SW+J/vbTuxKMtBEdn6UvZQwuXtc8d7PSSEeYX4vXK2z6SCa7A5Spdml9KyZiTh
                            CwD3fST7QE4tdyaJrQAEIsO3MTIyneoPnPLVNTrIURrAU1mjKb8kN4cDo8OIb6Zkaj7J+uhty/57
                            tJ23I8v88bm1k5KNVWO4aHB8iRA72FxK4TlHXiXLxmst5n+Vr0jBVQRiIRByLjGbzCH1tqT1H9qR
                            Zd59gbkwSoJj9EVTtDuWDWRDKGNtz42N2pe1A5UG8BR1wtfrHRUfnhqeVF2AoanWB8i+wpTNJUv/
                            t9vhW87vVcHfFynMqnLxG4IUECAju6Zslq8848bmuBz59RWyEAQzfLs7AiAgoVqgb3VdMHNgR5fb
                            UR3405DiNAPXZKSKJJORCbFAtnfnRc3p2olKA3gKWmur01Nyz5s8piLpKw+c3fr0ziz71tOzG3PI
                            7SGrTkccNEzIwZRqFff0T9Zl4+6uyosuLmrVPD5lhIpNH0Yi8AZo3PXB/JKdWfb33jd7vbWNOwwj
                            JHArDDGCFSaXz2rN5mknKg3gKWiObx7vrBl87s+biTaOxvJjag5QCkiupSZCzjmpxyJO28Ot/8p4
                            qwVX+qxElzOQDYUvkQgoMd0+Gsuf25EtTUw1WE+QBAH7FPtae0LjY9qJSgN4CmKT7ZtiUR2+o8PQ
                            JOsCefkedlRC5z/f1/H3xCY5LvsMpBGE2531fTGftsd4q8V0X3mtSdSEiBEWC2FDhFh1+PloLP/6
                            d1XWOUPrE6TqKOtlW2atGf08Ua1NO1FpAE9BjmUjTCYkiFt8scEoTqJjHCXYVjO0H9gwkFeT/G68
                            1SLlldc6avaykDOGgiNsBCccOIt/Nlp/o+LLx62gQVKkRJWWfs5fneqxesp1qardqDSA1dDIOAU7
                            esuCAzNIGCBiBrkkpmW8veYi2X1IUiRwYiAjickSDbKxZvTeUHaARCKTqbrk+oLYGbmYZ3wqrXad
                            0gBWAIB6pNbRWM6J18qMjMJa7/06kBFDFI1IMBLH3V00ZsXGRYXL9rbMgwIyIFACtf9+XfO1o7H8
                            s28VVzZo/0iptUxupkll2UFuZaWKx647szqgXac0gKeegD9wxeOv+/1xo7Hwx9bhM3AWzWjnCWBF
                            xFhDA+3V/D/HWyGeSbWno2TtnqSXBdWYUqsYY9cPpoNHY/kPPVZ/f8OmlxiYelXwu2iplZoQdlLT
                            NlQawFPQuo1rbwIFiPDmq9aIENscvWE0lt+WFa+QCOspbGRIboXrYiV7cn3vuJuUpy31xppL/xWM
                            n5ZB1pCpsmUMOOOXjMbyqzabS+wiGYCNqdqIQa6lrEB5sXai0gCegg6eIU9IyIy1pk6ExCyZCDy4
                            WTl0ablTtxY67PL+r2TObgQMiRFnkxlsxPp+GxL/r/vPnZ7GWy2+/YHpzbI+MB2A3XKjwJqseczl
                            8bqdWfZbv9p7bBnsUTmZ1SI2Iw7BZq7ZjGZuh/W92olKA3gK+re37SVt3PvTlLjGLJXh3RFSSjbb
                            lnj7O25tvnRHl12x1YOKWMyFSyTJUbJFzdu29fuJHbfzAr9in2lvYqFcBJsPikVwS1ak9LpL1562
                            w7s3itpf25ybQskRmyhi3SCXB1Bsyk3n+EI7UWkAT1Ehn3aOMVQAgDFUioh1hvsywZpfrfVf3JFl
                            HnlF+r6hwGRqTROpaSSVImwrXDx5+3vpG+O1Fle9jfoNyVYHxAyF0EzZvDq3n7zkq40Rh/DRnytv
                            dMkEBEkBZobh1EiGW9rE/eyej9Verx2oNICnsAP2QLNm191O3CxFSic2ekouCbwjMTNe+zX5wbFX
                            DJy5Pcs69vKN7z3iivRjLynFiBbDZSiR5ljBgJO839rBB8d7PabZ8K1kGzVDqQkJJEzemmZ/ijSv
                            XjfvPfXyNYe96+oN2zxt7M1fDp1HX1TcYjOpMMcKiU0kMTBilYgKiGlo96kXo1PlTSGvuZrv9VGS
                            EHuSrSfhCYgd011xR2+j+OGP3j/zebOZHf2v9ZNrRIcMOP9GU5gimVQzxEUqpFbJ3O8HmQ9MZOo/
                            Pcf98USoxTFfTFcbbsxiW8tALCZJAcOUvK2hwdKWy72xbHYv//C0O5/72CX/Ui4mh8WNZnk4fJVs
                            wmAUbrOS6gQTxJVZLF2892OVU7TrlAaw2uyopeFOKWINqMjWjRBinenAlox/WZYyp+bowXqBK7PM
                            /AUV/XnTt+5njGlwUyoV13wyoGW6SVIYx2ViarGE1Qd29J/39VM7fj9hanFxuBGe9rBlc5BMNTkx
                            vYkaVYFx5EyUCBeSmzHNhRX9AbdlmX95TPwnnKTSguKXg756oDdYTyGgEMzOiZ8JyGdYYHBmC3/2
                            lnP8PdpxSgNYPRs6V/IFxHwSw2Zb/jwRtzLgrKBOAPsYeshaiQjTnJiNDXYvyWzqAUcEU+lwqeyL
                            4lu9KfpYXJobnvr4LefvP+FuT3/sxf3Xw+RtxpqCA2pGpEE2MqfMsUWlIuGJBpuXVMQ/JbY0guRT
                            crXSyswquSe4SJ4zmxOBkZKIMd4PPH1V9yf2uU67TWkAqz/o6K8Vt5fW7+NTWCciPpGvepINEBYR
                            myVQzYH7yJpYhjDLG7ORkXyMWXstC48Xkfb0ZHoSc75fbfB917+z47EJW4vPy82eBoSMC/1Ch8wQ
                            t2LAxYN9sBuTSS2OfG8UbrfAAGAoAB0gYzKWp1OUNutpQCRaSCzaK/7y75zru7TDlAawelGHXdb4
                            dWbzHlNF0/QNFMGbjuRcS5Zsj4i1xlFBKSYjsRAOJL7ViiEf6qnDm3JdXeiAw6avO/LqM/ZZO9Fr
                            cfyX40eaEuebUDSjVNphMzE8WEgyWUbVp8XCMZCxSJUkciPGfdvzyo8HQ/wjsTAO6D14xvozLz9r
                            z37tLKUBrLbpfbck+l2v7Nsf+JI6uQNyxLVWMNhkPzdz0lOktBcBwSIOiiDLpLJmQBovb6X0cMXJ
                            h2pY98S337N/miz1eOu/Du67LlS+iKZBSYNzQJDM+HUUUSaPFrA31kg/ykjG+qIA7WkKKab54l3t
                            lcr6686lpF2lNIDViJ12Y5j2+IbmXrAtlydwWx7qq5Nva42R2zOKz5RiZtvIZ87b06658WS3bjLX
                            4j1XDGS/2Njy0lYjpwzGsDBVfUsW0UORSjKDUajF9fOGTx88ffqvl55tdJIdpQGsRteCbzQPFJZZ
                            s7Hh0Zvftdf6qV6P4y6vH7knNf7rhnNmbtDuUEoppZRSSimllFJKKaWUUkoppZRSSimllFJKqalr
                            zC7EeHeXTC9dOpEIRwjkUID2BUsbCO0A/Dgrwv3XLPBHaTsopXYlN9oLPGNl86UE808l4kkActk8
                            66zodXeT3OKu8gIhfOHFfkcER3d3ZvftwLLfL4TLXnzZ1Nnd6btHuuzOFeWdECzZxvN+dXdn9qCu
                            5V23zjWAR+j0leW5AF0kQEVLq5RSuyiAz1hVng+hS7SkSim1fUblppynrWweBKHPazmVUmoXB7CD
                            +TTG2YE1pZSa9AF8wnclF9CbtZRKKbWLA3hmezwSQIuWUimldnEAC2gvLaNSSo3czp8FITxr+07w
                            pSvBclXw7qGDj8bGC4lYy6+U0gDeGQQP2ebvfGHZfPeRTd9+U+uulFKjcxbENiXcoqVWSqndEMBk
                            pdRSK6XU7hgBK6WU0gBWSikNYKWU0gBWSimlAayUUhrASimlNICVUkoDWCmllAawUkppACullNIA
                            VkqpCcbtij8iQveesTKM2yIQcP81C/xRo7Gs01cVB4PNm4jkEID+CMBeGJqwvm1X1XsE7lu2wB+t
                            bwOlJnEAT3YXiphfrUrvAOQTEBw0ND0yaWEUFnXJdDLhRAiOAHAogH2HP4zbMfb3URQAg4AMALQO
                            oEdJ+BEic9eMNe7ub76d0i4Z4BDu7ezepfNxMYABgPoBWUvAQxD6aTT8nbsX5o9oAE8iZ90vM3+1
                            Kt4CYL5WQ22y+K7mAWLNPwLhJAjy3bdxh1aAWgHsCcjBQgSBfKJnTujp7A6X+MJddMcbaHCSld8M
                            fcBJO4C9BTgMJO+wQp9d3F3+BJBPL1+U3zxenqjaQe/ukkos4woNX7XVqHdFeZ5Y8xCAtwO7LXy3
                            ZRYgnwp5fHTJ3cWrpsq6EeDVArqpszt86y0PSE0DeAIrXPwUgIO1EmrzyLe7/CAJLgVQmSCRtDcz
                            3b2oq/ijqbWm5MSBgXDrqQ9LpgE8AZ3zgHgC/lwroTZZsrJ5kAAXTcCnPo2IvgaRqXbgYvG6NfEj
                            GsAT0MBgPBpAh1ZCbcLJ/gPG/sDaWDlmyYp41FRbZ0LyiRPuk3YN4Am34mhfrYLa5ITvSg7ImyZ0
                            TwufNAVXXWuzXr5+d/1xPQtiRwtn04OJzSrs7AE4Qi8EBZ49b40gINAW32OL72X4ezzn/1/4Zy/2
                            vRolZS0eiaHzvScuMgdMyZVH1Ang3ydtABPJ0dfMz+6bTOvsG8fmDwFYcObdYQkTPknAgh3bbkUk
                            g4tzuEuvmE/9GmUTUxLem2iif6ZJnKJbs3vpCHiCuuY4fxeAu05fERbD4MIRBzFhpgj+sSnxo2eu
                            ChdpEE9QhmZCtv1eB/ANEbrWcPg5m+oz3Z00aqHXuaI4GWIuAWSkgdIA6JMz17jPj/RvLu/MLgZw
                            8XhZDafeIHb1XLT7EA4iwqlC+BC2sV+eILM1gCe4axf65QCWn7EqdAK4EILjNIinUP4y/LbPIaAL
                            uxb5vx/tv/26VY19Y3SXQuQt2I5PgefoFuE/7+6sPDYZ1sPw1X0bANwP4P7O7vAMIP9/G++93Xbg
                            VA/CjbJl833Xsvl+oQE6AawY8QI2BTHH35y5Kvz12aukTas6ORDhztEe7XV2lx9O0T5MkLeM8OG9
                            Qnh/10K/eLKE7wsE3H3j/PmpsbB0ge9etsAvEsEiAbo1iBWz8KjtblheHt4zJ/wQwOcBtI6wub5N
                            KR7cvTC7HEQymWueBOP69WkAj/WuieP8imsX+E4RLALQpUGsdsaiLmldtKL8AgzuB/CaET58rYic
                            3rXIn7R8Se1JraYG8JQK4mUL/GIwFoKwXINYjXzUW5xEFH5BggsA2BE9WHCNif7l3Z35dVpJDeAp
                            a9lCf/ey+X6JIRwH4C4NYrUti++q772oO9wEQ7cAmDfChz9BMG/q6szecdfraJ1WUwNYAVg6369c
                            tsC/TggLgB04OPPsWROPn3F3+BsN4snnQhGzuLv8oFj3CEH+ZIQPFwCXlc4fvHyRu02rqQGs/tCu
                            ifl+1bIF/vUkmA/g+zuwiBkgfEaDeHJZ1FUe1r0i3CfAv2BoAveReFSEjutalJ37Az2VUQNYbds1
                            x/kfLFvgj2fGsRDcoUH8vBF/AaB3G18T/kqu478nLYu7ys8R4QEC/niED49C8s8i/rDuTr9K31Xj
                            n16IMc5ct9DfA+ANf7oiHGMInwTh+B0MIPKwJwAABHdJREFU4o+ecXe4qGLcJZPhgo7li7IrAVw5
                            mdd95/L45mDClwDsN/LPJ/wkEt5z98L8J/ou0gDeCoM06HcwiE//QTiaGJ8E8AYN4snr1BvE9qB4
                            TITeOOLwFRGm/L/vXkRRK6kB/PwGYRwPQDeJdsC1x/p7AbzxzFXlURD6pAAjfYOOqyA2hsbfbi/Z
                            VTPDvfBAZPgS2ke140eXJXgex89vpwOYGWmbk0ARPnHmyjiTjSzNS/fISxah70IinjRrWYQuBOjh
                            bw69kdfOBh3UBtpQHfp+4LegPaqgwRzUkQ39rLEO1MxAbX7o+8KByn5Qixv6vnSgYEFVCwp1EAc8
                            Fi3OcpSOIsiFGPlJ+OMjiFmOBHDPeFl1b3lAagMD5St2xeycRKwDkV3dbuATxvPMqzv9zM5YFc+E
                            yNKJvJIIuP+aBX5EdwM4Y2X5FwBdPIFf9nqI/O2y47LLRmuBi7vK84VwyTZ+rSChfxDhm23Kfn/n
                            66l3V7/wE74reZE392RnjiLQX0Jw+LY/Y+WV3Z35Qy/0/4tWlOcN3wvuxfMA+IoBLU3iHlk02QYi
                            48CFIubeezE9lvFggZwlwHu2I+dWdS3KFuyO57vTI2BJspr0XIqJaIaA3ghg1AIYJOu24zM9F5JP
                            g+jTyQR0dpe7/IU3EQBYjGwWhKxnGyP7ddj2fMAGwLkMOZcoYMUK7JbX/yIjkfu7FmYjGogs7iov
                            EMIXxstLWLEijDzDQGt31/Pd6eiM7H4IoNA8m4Ajf6InRnVPDJunJmmpIoAXDWBjJu1rn/zvA5Hd
                            tu52OoC/2UkDoz3Nnto1BPIfozqyrLgfAmhMwlKt2tbE6fmgux/AoHbVRHwjSNfu+tOjsvNASP4W
                            QNI1OaE8ujq6Uf3gvPcYagjo9klYq5u39Qu3vYkKgL6rbTXhDFZq2fd31x8flQBedmz2IAT/V9fl
                            hFESybtH83Y4mzfnmP8Ok+CKtC08LuK/ul2/yenvAARtrwm1A+Iztx1FfRM6gAFg2XH+H0XwcW3A
                            cW89GK8fq5ukdi3OHxai/zNJatUQoT/r7qTm9r32yqMEfFRbbMLortRHfh+8cRnAAHDtcf6ziflQ
                            EXx7ko2CJoN+AS5ymTto2UJ/95h29UJ/kRAuAFBO4Hr1iNCJ3Z2+eyQPWr4ou0QI5wNoasuNXwK6
                            tbXVv3lo19HuM+pXwl2/MH8EwEmnd8ks8uEksDkCJK8EZB5AbRia2UkvTR6rvgLqGDoYtF4EvwLh
                            lwC64gy3/JsH0y4LxO6F2ReXrGzexsn+E4buV+YnSA37AXwjy/zffe8YWr+Dr/1Li7qa3zNk/0kg
                            JwLItDXHjZ+KyD90d2Y3josdILo+1Fh7wz0yI5ThJAGOAPAqDE0q3r6bP4zL4bDtA/DfAH4mIvcW
                            efade4+hUTuTY/5K6XAxnETAESAcOk5e+wulwYQ/D3iLgcggQH2A9AB4GKAHwfydrsX5w/qOVEop
                            pZRSSimllFJKKaWUUkoppZRSSimllFJKKaWUUkoppbbX/wCRKI0vul5bFQAAAABJRU5ErkJggg=="
                            alt="" />


                    </div>

                    <div class="text-center">
                        <p class="text-blue-600">Demo 1 - Con Auth Breeze</p>
                    </div>

                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif

                </header>


                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <a href="https://laravel.com/docs" id="docs-card"
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                <img src="https://laravel.com/assets/img/welcome/docs-light.svg"
                                    alt="Laravel documentation screenshot"
                                    class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                    onerror="
                                        document.getElementById('screenshot-container').classList.add('!hidden');
                                        document.getElementById('docs-card').classList.add('!row-span-1');
                                        document.getElementById('docs-card-content').classList.add('!flex-row');
                                        document.getElementById('background').classList.add('!hidden');
                                    " />
                                <img src="https://laravel.com/assets/img/welcome/docs-dark.svg"
                                    alt="Laravel documentation screenshot"
                                    class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
                                <div
                                    class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
                                </div>
                            </div>

                            <div class="relative flex items-center gap-6 lg:items-end">
                                <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                    <div
                                        class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24">
                                            <path fill="#FF2D20"
                                                d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z" />
                                            <path fill="#FF2D20"
                                                d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z" />
                                        </svg>
                                    </div>

                                    <div class="pt-3 sm:pt-5 lg:pt-0">
                                        <h2 class="text-xl font-semibold text-black dark:text-white">Documentation</h2>

                                        <p class="mt-4 text-sm/relaxed">
                                            Laravel has wonderful documentation covering every aspect of the framework.
                                            Whether you are a newcomer or have prior experience with Laravel, we
                                            recommend reading our documentation from beginning to end.
                                        </p>
                                    </div>
                                </div>

                                <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </div>
                        </a>

                        <a href="https://laracasts.com"
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div
                                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <g fill="#FF2D20">
                                        <path
                                            d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z" />
                                    </g>
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                    development. Check them out, see for yourself, and massively level up your
                                    development skills in the process.
                                </p>
                            </div>

                            <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com"
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div
                                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <g fill="#FF2D20">
                                        <path
                                            d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z" />
                                        <path
                                            d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z" />
                                        <path
                                            d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z" />
                                    </g>
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the
                                    latest and most important news in the Laravel ecosystem, including new package
                                    releases and tutorials.
                                </p>
                            </div>

                            <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div
                                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <g fill="#FF2D20">
                                        <path
                                            d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z" />
                                    </g>
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a
                                        href="https://forge.laravel.com"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white dark:focus-visible:ring-[#FF2D20]">Forge</a>,
                                    <a href="https://vapor.laravel.com"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Vapor</a>,
                                    <a href="https://nova.laravel.com"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Nova</a>,
                                    <a href="https://envoyer.io"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Envoyer</a>,
                                    and <a href="https://herd.laravel.com"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Herd</a>
                                    help you take your projects to the next level. Pair them with powerful open source
                                    libraries like <a href="https://laravel.com/docs/billing"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Cashier</a>,
                                    <a href="https://laravel.com/docs/dusk"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Dusk</a>,
                                    <a href="https://laravel.com/docs/broadcasting"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Echo</a>,
                                    <a href="https://laravel.com/docs/horizon"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Horizon</a>,
                                    <a href="https://laravel.com/docs/sanctum"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Sanctum</a>,
                                    <a href="https://laravel.com/docs/telescope"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Telescope</a>,
                                    and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </footer>

            </div>
        </div>

    </div>
</body>

</html>
