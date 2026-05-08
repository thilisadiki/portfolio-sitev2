<?php

return [
    [
        'type'              => 'Technical SEO · Recovery · eCommerce',
        'year'              => '2024',
        'metric_aria'       => '312 percent organic traffic increase',
        'metric_html'       => '+<span data-target="312">312</span>%',
        'metric_label_html' => 'organic traffic<br>in 6 months',
        'title'             => 'Enterprise eCommerce: Post-Migration Traffic Recovery',
        'paragraphs'        => [
            'A 4,000-page South African retail brand migrated to a React SPA and lost 74% of organic traffic within 8 weeks. Googlebot was receiving empty HTML shells: every product page was rendering entirely client-side with no fallback content in the server response. The site looked fine to users. To crawlers, it was blank.',
            'Full rendering audit using mobile-first Googlebot simulation via the URL Inspection API and log file analysis. Confirmed 94% of product pages returned empty body content in the HTML response. Implemented a phased Next.js SSR migration strategy, introduced dynamic rendering as a transition layer for high-priority URL segments, and rebuilt the sitemap pipeline to prioritise recovery indexation.',
        ],
        'results' => [
            ['+312%',  'Organic traffic'],
            ['3,847',  'Pages re-indexed'],
            ['6 mo',   'Full recovery'],
            ['94%',    'CSR pages fixed'],
        ],
        'tools'    => ['Screaming Frog', 'GSC URL Inspection API', 'Next.js SSR', 'Log file analysis', 'Splunk'],
        'timeline' => '6-month engagement',
    ],
    [
        'type'              => 'Core Web Vitals · SaaS · Performance',
        'year'              => '2024',
        'metric_aria'       => 'LCP improved from 6.8 seconds to 1.9 seconds',
        'metric_html'       => '<span data-target="6">6</span>.<span data-target="8">8</span>s',
        'metric_label_html' => 'LCP → 1.9s',
        'title'             => 'B2B SaaS Platform: Core Web Vitals Overhaul',
        'paragraphs'        => [
            'A B2B SaaS platform was failing Core Web Vitals across 80% of its URLs, with an average LCP of 6.8 seconds in field data. The marketing team attributed it to hosting. The problem was in the code: an unoptimised hero component, render-blocking font loading, and a bundle loading sequence that deferred critical above-the-fold resources.',
            "Traced LCP regression to three specific causes: a 1.8MB uncompressed hero image loaded without priority hints, a Google Fonts stylesheet blocking render for 480ms, and a JavaScript bundle deferring the LCP element paint by 2.1 seconds. Worked directly with the engineering team on implementation. 28% conversion rate improvement documented in the following quarter's A/B data.",
        ],
        'results' => [
            ['6.8s → 1.9s', 'LCP field data'],
            ['+28%',             'Conversion rate'],
            ['100%',             'URLs passing CWV'],
        ],
        'tools'    => ['Lighthouse CI', 'CrUX API', 'WebPageTest', 'Next.js Image', 'font-display: optional'],
        'timeline' => '10-week engagement',
    ],
    [
        'type'              => 'JavaScript SEO · Media · Indexation',
        'year'              => '2023',
        'metric_aria'       => '2341 articles recovered from indexation gap',
        'metric_html'       => '<span data-target="2341">2341</span>',
        'metric_label_html' => 'articles recovered<br>from indexation gap',
        'title'             => 'Digital News Publisher: JavaScript Indexation Gap',
        'paragraphs'        => [
            'A digital news publisher had 2,341 articles published and receiving traffic via social, but zero indexation from organic search. Investigation using the URL Inspection API and direct DOM comparison confirmed Googlebot was rendering an empty article body. The content existed in the DOM, but inside a Vue component that used IntersectionObserver-triggered lazy loading. Content that never entered Googlebot\'s render viewport.',
            'Fixed by implementing server-side article body rendering for the above-the-fold content block and removing the IntersectionObserver gate from the primary content container. Remaining lazy-load logic was preserved for secondary components only. Within 8 weeks all 2,341 articles were indexed and ranking.',
        ],
        'results' => [
            ['2,341', 'Articles indexed'],
            ['+189%', 'Impressions (GSC)'],
            ['8 wk',  'Full index coverage'],
        ],
        'tools'    => ['Vue.js SSR', 'GSC Coverage report', 'URL Inspection API', 'Nuxt'],
        'timeline' => '8-week engagement',
    ],
    [
        'type'              => 'Local SEO · Healthcare · Multi-location',
        'year'              => '2024',
        'metric_aria'       => '480 percent increase in direction requests',
        'metric_html'       => '+<span data-target="480">480</span>%',
        'metric_label_html' => 'direction requests<br>in 4 months',
        'title'             => 'Healthcare Group: 14-Location Local Pack Strategy',
        'paragraphs'        => [
            'A 14-location private healthcare group had inconsistent GBP profiles across all locations, no local schema on any service pages, and NAP discrepancies across 80+ citation sources. None of the 14 locations appeared in the local 3-pack for their primary service queries. A competitor with objectively weaker clinical credentials outranked every location on proximity alone because their local SEO infrastructure was simply maintained.',
            'Full citation audit across 80+ directories, NAP normalisation using the GBP API, LocalBusiness and MedicalClinic schema deployed across all service pages, and a GBP content and category strategy tailored per location. Within 4 months, 11 of 14 locations ranked in the local 3-pack for their primary service terms.',
        ],
        'results' => [
            ['+480%', 'Direction requests'],
            ['11/14', 'Locations in top 3'],
            ['4 mo',  'Timeline'],
            ['80+',   'Citations fixed'],
        ],
        'tools'    => ['GBP API', 'LocalBusiness schema', 'MedicalClinic schema', 'Semrush Local'],
        'timeline' => '4-month engagement',
    ],
];
