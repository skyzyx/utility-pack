<?php
/**
 * Copyright (c) 2010–2019 Ryan Parman <http://ryanparman.com>.
 * Copyright (c) 2016–2019 Contributors.
 *
 * http://opensource.org/licenses/Apache2.0
 */

declare(strict_types=1);

namespace SimplePie\UtilityPack\Enum;

/**
 * The interface that all enum classes must implement and respond to.
 */
interface EnumInterface
{
    /**
     * Introspects the Enum for its values.
     *
     * @throws \ReflectionException
     *
     * @return string[] An associative array where the constant name is the key and the constant value is the value.
     */
    public static function introspect(): array;

    /**
     * Introspects the Enum for its keys.
     *
     * @throws \ReflectionException
     *
     * @return string[] An indexed array of constant names.
     */
    public static function introspectKeys(): array;

    /**
     * Determines if the value is one of the Enum values of this type.
     *
     * @param string $value The value to compare.
     *
     * @throws \ReflectionException
     *
     * @return bool Whether or not the value is one of the Enum values of this type. A value of `true` means that the
     *              value is one of the Enum values. A value of `false` means that the value is NOT one of the
     *              Enum values.
     */
    public static function hasValue(string $value): bool;
}
