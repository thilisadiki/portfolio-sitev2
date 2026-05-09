<?php

return [
    [
        'type'        => 'Technical SEO · Recovery · eCommerce',
        'year'        => '2024',
        'metricVal'   => '+312%',
        'metricLabel' => ['organic traffic', 'in 6 months'],
        'title'       => 'Enterprise eCommerce: Post-Migration Traffic Recovery',
        'paragraphs'  => [
            'A 4,000-page South African retail brand migrated to a React SPA and lost 74% of organic traffic in 8 weeks. Googlebot was receiving empty HTML shells: every product page rendered entirely client-side with no fallback in the server response. The site looked fine to users. To crawlers, it was blank.',
            'Full rendering audit using mobile-first Googlebot simulation via the URL Inspection API and log file analysis. Confirmed 94% of product pages returned empty body content. Implemented a phased Next.js SSR migration, dynamic rendering as a transition layer for high-priority segments, and rebuilt the sitemap pipeline for recovery indexation.',
        ],
        'results'  => [['+312%', 'Organic traffic'], ['3,847', 'Pages re-indexed'], ['6 mo', 'Full recovery'], ['94%', 'CSR pages fixed']],
        'tools'    => ['Screaming Frog', 'GSC URL Inspection API', 'Next.js SSR', 'Splunk'],
        'timeline' => '6-month engagement',
        'chart'    => ['data' => [100, 98, 72, 38, 26, 32, 58, 94, 128, 168, 210, 260, 312], 'note' => 'Indexed pages, week-over-week'],
    ],
    [
        'type'        => 'Core Web Vitals · SaaS · Performance',
        'year'        => '2024',
        'metricVal'   => '6.8s→1.9s',
        'metricLabel' => ['LCP field data', 'p75 mobile'],
        'title'       => 'B2B SaaS: Core Web Vitals Overhaul',
        'paragraphs'  => [
            'A B2B SaaS was failing Core Web Vitals across 80% of URLs, average LCP 6.8s in field data. The marketing team blamed hosting. The problem was code: an unoptimised hero, render-blocking font loading, and a bundle sequence that deferred critical above-the-fold resources.',
            "Traced LCP regression to three causes: a 1.8MB hero image without priority hints, a Google Fonts stylesheet blocking render for 480ms, and a JS bundle deferring LCP paint by 2.1s. 28% conversion rate improvement documented in the following quarter's A/B data.",
        ],
        'results'  => [['6.8s → 1.9s', 'LCP field data'], ['+28%', 'Conversion rate'], ['100%', 'URLs passing CWV']],
        'tools'    => ['Lighthouse CI', 'CrUX API', 'WebPageTest', 'Next.js Image', 'font-display: optional'],
        'timeline' => '10-week engagement',
        'chart'    => ['data' => [6.8, 5.9, 5.2, 4.4, 3.7, 3.1, 2.6, 2.2, 1.95, 1.9], 'note' => 'LCP p75 by week (lower is better)'],
    ],
    [
        'type'        => 'JavaScript SEO · Media · Indexation',
        'year'        => '2023',
        'metricVal'   => '2,341',
        'metricLabel' => ['articles recovered', 'from indexation gap'],
        'title'       => 'Digital News Publisher: JavaScript Indexation Gap',
        'paragraphs'  => [
            "A digital news publisher had 2,341 articles published with social traffic, but zero organic indexation. URL Inspection API and direct DOM comparison confirmed Googlebot was rendering an empty article body. The content existed in the DOM, but inside a Vue component using IntersectionObserver-triggered lazy loading. Content that never entered Googlebot's render viewport.",
            'Fixed by implementing server-side article body rendering for above-the-fold content and removing the IntersectionObserver gate from the primary container. Remaining lazy-load logic preserved for secondary components. Within 8 weeks all 2,341 articles were indexed and ranking.',
        ],
        'results'  => [['2,341', 'Articles indexed'], ['+189%', 'GSC impressions'], ['8 wk', 'Full coverage']],
        'tools'    => ['Vue.js SSR', 'GSC Coverage', 'URL Inspection API', 'Nuxt'],
        'timeline' => '8-week engagement',
        'chart'    => ['data' => [0, 0, 0, 12, 140, 520, 1180, 1820, 2200, 2341], 'note' => 'Indexed articles by week'],
    ],
    [
        'type'        => 'Local SEO · Healthcare · Multi-location',
        'year'        => '2024',
        'metricVal'   => '+480%',
        'metricLabel' => ['direction requests', 'in 4 months'],
        'title'       => 'Healthcare Group: 14-Location Local Pack Strategy',
        'paragraphs'  => [
            'A 14-location private healthcare group had inconsistent GBP profiles, no local schema on service pages, and NAP discrepancies across 80+ citation sources. None of the 14 locations appeared in the local 3-pack for primary service queries. A competitor with weaker clinical credentials outranked every location on proximity alone.',
            'Full citation audit across 80+ directories, NAP normalisation via the GBP API, LocalBusiness and MedicalClinic schema across all service pages, and a GBP content/category strategy tailored per location. Within 4 months, 11 of 14 locations ranked in the local 3-pack for primary terms.',
        ],
        'results'  => [['+480%', 'Direction requests'], ['11/14', 'Locations in top 3'], ['80+', 'Citations fixed']],
        'tools'    => ['GBP API', 'LocalBusiness schema', 'MedicalClinic schema', 'Semrush Local'],
        'timeline' => '4-month engagement',
        'chart'    => ['data' => [100, 108, 130, 170, 220, 290, 360, 430, 480], 'note' => 'Direction requests, % of baseline'],
    ],
];
