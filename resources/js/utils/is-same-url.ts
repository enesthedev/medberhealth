import { InertiaLinkProps } from '@inertiajs/react';
import { resolveUrl } from './resolve-url';

export function isSameUrl(
    url1: NonNullable<InertiaLinkProps['href']>,
    url2: NonNullable<InertiaLinkProps['href']>,
) {
    return resolveUrl(url1) === resolveUrl(url2);
}
