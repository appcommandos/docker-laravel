<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We build highly efficient websites and apps.">
    <title>App Commandos</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- reset styles -->
    <style>
        /* http://meyerweb.com/eric/tools/css/reset/ 
           v2.0 | 20110126
           License: none (public domain)
        */

        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed, 
        figure, figcaption, footer, header, hgroup, 
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure, 
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
    </style>

    <!-- custom styles -->
    <style>
        h1,h2,h3,h4,h5,h6{
            font-family: serif;
        }
        p,small,a{
            font-family: sans-serif;
        }
        body * {
            color: white!important;
        }
    </style>
    <style>
        @media only screen and (max-width: 767px){
            h1{
                font-size: 3.5rem!important;
            }
        }
    </style>
</head>
<!-- #00563b -->
<!-- logo font: charm -->
<body style="background: #00563b;">
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; overflow: hidden;padding: 0 2rem;">
        <h1 style="font-size: 4.5rem;font-weight: 900; text-align: center; line-height: 1.2; margin-bottom: 1.75rem;color: black;">
            App Commandos
        </h1>
        {{-- <img src="{{ asset('storage/logo.webp') }}" alt="App Commandos Logo" width="512"> --}}
        <p style="text-align: center; font-size: 1.5rem; line-height: 1.4; margin-top: 0;max-width: 100%;">
            We build highly efficient websites and apps<br>
            Contact us today and we'll start tomorrow.<br>
            <a
                style="margin-top: 1rem; display: flex; flex-direction: row; justify-content: center; color: #fff;"
                href="https://wa.link/i65zvu"
                target="_blank"
            >
                <svg
                    style="margin-top: 0.5rem; margin-right: 0.5rem; width: 20px; height: 20px; fill: #fff;"
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <title>WhatsApp</title>
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                <span style="text-decoration: underline;">whatsapp</span>
            </a>
            <a
                target="_blank"
                style="display: flex; flex-direction: row; justify-content: center; color: #000;"
                href="mailTo:station@appcommandos.com"
            >
                <svg
                    style="margin-top: 0.5rem; margin-right: 0.5rem; width: 20px; height: 20px; color: #000;"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"
                    />
                </svg>
                <span style="text-decoration: underline;">station@appcommandos.com</span>
            </a>
        </p>
    </div>
</body>
</html>