import { defineConfig } from 'astro/config';

import mdx from '@astrojs/mdx';

// https://astro.build/config
export default defineConfig({
    site: 'https://bio-project.it',
    base: '/sito_bioproject',
    integrations: [mdx()],
});
