<?php

return [
    [
        'title'       => 'Technical SEO Audits',
        'description' => "Diagnostic-first analysis of your site's crawlability, indexability, rendering pipeline, and search infrastructure. Not a checklist run through a SaaS tool: a precise investigation that produces a clear causal picture of why your site performs the way it does, with prioritised remediation paths you can actually act on.",
        'deliverable' => 'Full audit report with severity-ranked issues and sprint-ready task specifications',
        'methods'     => ['Crawl analysis', 'Log file audit', 'Rendering review', 'Indexation mapping'],
    ],
    [
        'title'       => 'JavaScript SEO',
        'description' => 'Your React, Next.js, Vue, or Angular application may be largely invisible to Googlebot. I diagnose and fix rendering issues at the framework level: SSR versus CSR trade-offs, hydration timing, dynamic content that never makes it into the indexed DOM, and metadata that exists only after JavaScript execution.',
        'deliverable' => 'Rendering gap report with DOM diffs and a framework-specific implementation specification',
        'methods'     => ['SSR / SSG / ISR', 'DOM diffing', 'Hydration debugging', 'Dynamic rendering'],
    ],
    [
        'title'       => 'Core Web Vitals Optimisation',
        'description' => 'LCP, CLS, INP: each one traced to its origin in your codebase, not just flagged at the surface level. I work from field data (CrUX) and lab data in parallel, identify the specific resources and components responsible, and produce engineering-grade specifications your developers can implement precisely.',
        'deliverable' => 'CWV baseline report, per-metric root cause analysis, code-level fix specifications',
        'methods'     => ['CrUX analysis', 'LCP optimisation', 'CLS elimination', 'INP reduction'],
    ],
    [
        'title'       => 'Search Rendering Diagnostics',
        'description' => "Understand precisely what Google sees when it renders your pages. Using live rendering comparisons, HTTP header inspection, log data, and URL Inspection API output, I map the difference between your user-facing interface and the content that actually reaches Google's index, then explain what it means for your rankings.",
        'deliverable' => 'Render comparison analysis with indexed vs. user-visible content map',
        'methods'     => ['WRS simulation', 'DOM comparison', 'GSC URL Inspection'],
    ],
    [
        'title'       => 'Web Performance Optimisation',
        'description' => "Performance is a ranking signal, a conversion signal, and a retention signal simultaneously. I optimise critical rendering paths, asset delivery strategies, caching architectures, and third-party script impact across your full stack, not just what's visible in a single Lighthouse run.",
        'deliverable' => 'Performance audit + infrastructure and code recommendations with business impact estimates',
        'methods'     => ['TTFB / FCP', 'Asset strategy', 'CDN configuration', 'Bundle analysis'],
    ],
    [
        'title'       => 'Site Architecture Consulting',
        'description' => 'URL structure, internal linking systems, faceted navigation, crawl path engineering, designed around how search engines actually discover and evaluate pages at scale. Most site architecture decisions are made without any reference to crawl behaviour. That gap is where ranking potential disappears.',
        'deliverable' => 'IA specification with crawl flow diagrams and implementation guidelines',
        'methods'     => ['URL taxonomy', 'Internal linking', 'Faceted nav', 'Crawl mapping'],
    ],
    [
        'title'       => 'Local SEO &amp; Google Business Profile',
        'description' => 'Local search has its own infrastructure. GBP optimisation, NAP consistency across citation sources, local schema implementation, and service-area strategy, done with the same precision applied to enterprise technical audits, not handed off to a VA with a generic checklist.',
        'deliverable' => 'Local SEO audit + GBP optimisation plan + citation strategy',
        'methods'     => ['GBP management', 'Local schema', 'Citation audit', 'NAP consistency'],
    ],
    [
        'title'       => 'SEO Consulting &amp; Fractional Leadership',
        'description' => 'Embedded advisory for in-house teams that need a senior technical SEO perspective without the overhead of a full-time hire. Roadmap development, team upskilling, sprint planning input, quarterly technical health reviews, and a standing resource for the hard questions that surface mid-project.',
        'deliverable' => 'SEO roadmap + team playbooks + ongoing review cadence',
        'methods'     => ['Roadmap design', 'Team training', 'Sprint input'],
    ],
];
