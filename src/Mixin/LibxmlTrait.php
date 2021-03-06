<?php
/**
 * Copyright (c) 2010–2019 Ryan Parman <http://ryanparman.com>.
 * Copyright (c) 2016–2019 Contributors.
 *
 * http://opensource.org/licenses/Apache2.0
 */

declare(strict_types=1);

namespace SimplePie\UtilityPack\Mixin;

/**
 * Shared code for working with configurable libxml settings.
 */
trait LibxmlTrait
{
    /**
     * Bitwise libxml options to use for parsing XML.
     *
     * @var int
     */
    protected $libxml;

    /**
     * Gets the default (preferred) configuration for libxml.
     */
    public static function getDefaultLibxmlConfig(): int
    {
        return \LIBXML_HTML_NOIMPLIED // Required, or things crash.
            | \LIBXML_BIGLINES
            | \LIBXML_COMPACT
            | \LIBXML_HTML_NODEFDTD
            | \LIBXML_NOBLANKS
            | \LIBXML_NOENT
            | \LIBXML_NOXMLDECL
            | \LIBXML_NSCLEAN
            | \LIBXML_PARSEHUGE;
    }

    /**
     * Sets the libxml value to use for parsing XML.
     *
     * @param int $libxml TODO add a description here.
     */
    public function setLibxml(int $libxml): self
    {
        $this->libxml = $libxml;

        // What are the libxml2 configurations?
        $this->logger->debug(\sprintf( // @phan-suppress-current-line PhanUndeclaredProperty
            'Libxml configuration has a bitwise value of `%s`.%s',
            (string) $this->libxml,
            (4792582 === $this->libxml)
                ? ' (This is the default configuration.)'
                : ''
        ));

        return $this;
    }

    /**
     * Gets the libxml value to use for parsing XML.
     */
    public function getLibxml(): int
    {
        return $this->libxml;
    }
}
