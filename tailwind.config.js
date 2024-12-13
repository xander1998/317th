import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                brand: {
                    50: "rgb(60, 24, 26)",
                    100: "rgb(72, 26, 29)",
                    200: "rgb(84, 27, 31)",
                    300: "rgb(103, 30, 34)",
                    400: "rgb(130, 32, 37)",
                    500: "rgb(170, 36, 41)",
                    600: "rgb(229, 72, 77)",
                    700: "rgb(242, 85, 90)",
                    800: "rgb(255, 99, 105)",
                    900: "rgb(254, 236, 238)",
                },
                neutral: {
                    0: "rgb(3, 7, 18)",
                    50: "rgb(17, 24, 39)",
                    100: "rgb(31, 41, 55)",
                    200: "rgb(55, 65, 81)",
                    300: "rgb(75, 85, 99)",
                    400: "rgb(107, 114, 128)",
                    500: "rgb(156, 163, 175)",
                    600: "rgb(209, 213, 219)",
                    700: "rgb(229, 231, 235)",
                    800: "rgb(243, 244, 246)",
                    900: "rgb(249, 250, 251)",
                    950: "rgb(255, 255, 255)",
                },
                error: {
                    50: "rgb(60, 24, 39)",
                    100: "rgb(72, 26, 45)",
                    200: "rgb(84, 27, 51)",
                    300: "rgb(100, 29, 59)",
                    400: "rgb(128, 29, 69)",
                    500: "rgb(174, 25, 85)",
                    600: "rgb(233, 61, 130)",
                    700: "rgb(240, 79, 136)",
                    800: "rgb(247, 97, 144)",
                    900: "rgb(254, 236, 244)",
                },
                warning: {
                    50: "rgb(52, 28, 0)",
                    100: "rgb(63, 34, 0)",
                    200: "rgb(74, 41, 0)",
                    300: "rgb(87, 51, 0)",
                    400: "rgb(105, 63, 5)",
                    500: "rgb(130, 78, 0)",
                    600: "rgb(255, 178, 36)",
                    700: "rgb(255, 203, 71)",
                    800: "rgb(241, 161, 13)",
                    900: "rgb(254, 243, 221)",
                },
                success: {
                    50: "rgb(30, 38, 13)",
                    100: "rgb(37, 46, 15)",
                    200: "rgb(43, 55, 17)",
                    300: "rgb(52, 66, 19)",
                    400: "rgb(65, 82, 21)",
                    500: "rgb(83, 103, 22)",
                    600: "rgb(153, 213, 42)",
                    700: "rgb(196, 240, 66)",
                    800: "rgb(135, 190, 34)",
                    900: "rgb(239, 251, 221)",
                },
                "brand-primary": "rgb(229, 72, 77)",
                "default-font": "rgb(249, 250, 251)",
                "subtext-color": "rgb(156, 163, 175)",
                "neutral-border": "rgb(55, 65, 81)",
                black: "rgb(3, 7, 18)",
                "default-background": "rgb(3, 7, 18)",
            },
            fontSize: {
                caption: [
                    "12px",
                    {
                        lineHeight: "16px",
                        fontWeight: "400",
                        letterSpacing: "0em",
                    },
                ],
                "caption-bold": [
                    "12px",
                    {
                        lineHeight: "16px",
                        fontWeight: "600",
                        letterSpacing: "0em",
                    },
                ],
                body: [
                    "14px",
                    {
                        lineHeight: "20px",
                        fontWeight: "400",
                        letterSpacing: "0em",
                    },
                ],
                "body-bold": [
                    "14px",
                    {
                        lineHeight: "20px",
                        fontWeight: "600",
                        letterSpacing: "0em",
                    },
                ],
                "heading-3": [
                    "16px",
                    {
                        lineHeight: "20px",
                        fontWeight: "600",
                        letterSpacing: "0em",
                    },
                ],
                "heading-2": [
                    "20px",
                    {
                        lineHeight: "24px",
                        fontWeight: "600",
                        letterSpacing: "0em",
                    },
                ],
                "heading-1": [
                    "30px",
                    {
                        lineHeight: "36px",
                        fontWeight: "600",
                        letterSpacing: "0em",
                    },
                ],
                "monospace-body": [
                    "14px",
                    {
                        lineHeight: "20px",
                        fontWeight: "400",
                        letterSpacing: "0em",
                    },
                ],
            },
            fontFamily: {
                caption: "IBM Plex Mono",
                "caption-bold": "IBM Plex Mono",
                body: "IBM Plex Mono",
                "body-bold": "IBM Plex Mono",
                "heading-3": "IBM Plex Mono",
                "heading-2": "IBM Plex Mono",
                "heading-1": "IBM Plex Mono",
                "monospace-body": "monospace",
            },
            boxShadow: {
                sm: "0px 1px 2px 0px rgba(0, 0, 0, 0.05)",
                default: "0px 1px 2px 0px rgba(0, 0, 0, 0.05)",
                md: "0px 4px 16px -2px rgba(0, 0, 0, 0.08), 0px 2px 4px -1px rgba(0, 0, 0, 0.08)",
                lg: "0px 12px 32px -4px rgba(0, 0, 0, 0.08), 0px 4px 8px -2px rgba(0, 0, 0, 0.08)",
                overlay:
                    "0px 12px 32px -4px rgba(0, 0, 0, 0.08), 0px 4px 8px -2px rgba(0, 0, 0, 0.08)",
            },
            borderRadius: {
                sm: "0px",
                md: "0px",
                DEFAULT: "0px",
                lg: "0px",
                full: "9999px",
            },
            container: {
                padding: {
                    DEFAULT: "16px",
                    sm: "calc((100vw + 16px - 640px) / 2)",
                    md: "calc((100vw + 16px - 768px) / 2)",
                    lg: "calc((100vw + 16px - 1024px) / 2)",
                    xl: "calc((100vw + 16px - 1280px) / 2)",
                    "2xl": "calc((100vw + 16px - 1536px) / 2)",
                },
            },
            spacing: {
                112: "28rem",
                144: "36rem",
                192: "48rem",
                256: "64rem",
                320: "80rem",
            },
            screens: {
                mobile: {
                    max: "767px",
                },
            },
        },
    },

    plugins: [],
};
