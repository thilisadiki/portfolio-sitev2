<?php

return [
    [
        'title'       => 'Rendering &amp; Indexation',
        'description' => 'How search engines process JavaScript, handle deferred content, and decide what reaches the index.',
        'items'       => ['Evergreen Googlebot / WRS', 'SSR vs CSR indexation gaps', 'DOM diffing and render parity', 'URL Inspection API analysis'],
    ],
    [
        'title'       => 'Crawl Engineering',
        'description' => 'Crawl budget allocation, crawl path design, and ensuring the right pages are discovered at the right frequency.',
        'items'       => ['Log file crawl analysis', 'robots.txt architecture', 'Crawl prioritisation systems', 'Crawl trap identification'],
    ],
    [
        'title'       => 'Structured Data',
        'description' => 'JSON-LD implementation, rich result eligibility, and entity-based schema strategies for modern content architectures.',
        'items'       => ['JSON-LD / Microdata', 'Rich result eligibility', 'Entity graph strategy', 'Validation and monitoring'],
    ],
    [
        'title'       => 'Web Performance',
        'description' => 'Field data versus lab data, render-blocking resources, loading strategies, and the performance-to-ranking relationship.',
        'items'       => ['CrUX / PageSpeed Insights', 'Resource loading priorities', 'Third-party script auditing', 'Performance budget design'],
    ],
    [
        'title'       => 'Site Architecture',
        'description' => 'URL taxonomy design, internal linking graph engineering, and faceted navigation systems that crawlers can process efficiently.',
        'items'       => ['URL structure and taxonomy', 'Internal link equity flow', 'Faceted nav canonicalisation', 'Pagination strategies'],
    ],
    [
        'title'       => 'JavaScript Framework SEO',
        'description' => 'Framework-specific SEO patterns, metadata management, hydration timing, and rendering strategy selection for modern stacks.',
        'items'       => ['Next.js App Router SEO', 'Nuxt / Vue rendering', 'SvelteKit / Astro patterns', 'Hydration timing analysis'],
    ],
    [
        'title'       => 'Technical Auditing',
        'description' => 'Combining crawler data, log analysis, Search Console signals, and rendering output into a single diagnostic picture.',
        'items'       => ['Multi-signal diagnosis', 'Screaming Frog configuration', 'Custom GSC data pulls', 'Python-based SEO scripts'],
    ],
    [
        'title'       => 'Local Search Visibility',
        'description' => 'GBP optimisation, local schema, citation architecture, and service-area targeting for competitive local search results.',
        'items'       => ['Google Business Profile', 'Local pack optimisation', 'NAP consistency systems', 'Review strategy'],
    ],
    [
        'title'       => 'Search Intent &amp; IA',
        'description' => 'Matching page types to search intent at a structural level, not just keyword mapping, but information design informed by how queries behave.',
        'items'       => ['SERP feature analysis', 'Intent-to-template mapping', 'Content hierarchy design', 'Search demand modelling'],
    ],
];
