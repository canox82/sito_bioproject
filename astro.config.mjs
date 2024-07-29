import { defineConfig } from 'astro/config';

import mdx from '@astrojs/mdx';

// https://astro.build/config
export default defineConfig({
    site: 'https://canox82.github.io',
    base: 'sito_bioproject',
    integrations: [mdx()],
});
