<?php

/**
 * Class to convert camelCase to lower-case-hyphens and vice versa
 *
 * @author    Rod Mcnew
 * @license   License.txt New BSD License
 */
class CamelCaseConverter
{
    /*
     * Converts camelCase to lower-case-hyphens
     *
     * @param string $value the value to convert
     *
     * @return string
     */
    function camelToHyphens($value)
    {
        return strtolower(preg_replace('/([a-zA-Z])(?=[A-Z])/', '$1-', $value));
    }

    /*
     * Converts lower-case-hyphens to camelCase
     *
     * @param string $value the value to convert
     *
     * @return string
     */
    function hyphensToCamel($value)
    {
        return preg_replace("/\-(.)/e", "strtoupper('\\1')", $value);
    }
}