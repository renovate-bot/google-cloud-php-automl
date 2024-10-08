<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/data_items.proto

namespace Google\Cloud\AutoMl\V1\Document\Layout;

use UnexpectedValueException;

/**
 * The type of TextSegment in the context of the original document.
 *
 * Protobuf type <code>google.cloud.automl.v1.Document.Layout.TextSegmentType</code>
 */
class TextSegmentType
{
    /**
     * Should not be used.
     *
     * Generated from protobuf enum <code>TEXT_SEGMENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const TEXT_SEGMENT_TYPE_UNSPECIFIED = 0;
    /**
     * The text segment is a token. e.g. word.
     *
     * Generated from protobuf enum <code>TOKEN = 1;</code>
     */
    const TOKEN = 1;
    /**
     * The text segment is a paragraph.
     *
     * Generated from protobuf enum <code>PARAGRAPH = 2;</code>
     */
    const PARAGRAPH = 2;
    /**
     * The text segment is a form field.
     *
     * Generated from protobuf enum <code>FORM_FIELD = 3;</code>
     */
    const FORM_FIELD = 3;
    /**
     * The text segment is the name part of a form field. It will be treated
     * as child of another FORM_FIELD TextSegment if its span is subspan of
     * another TextSegment with type FORM_FIELD.
     *
     * Generated from protobuf enum <code>FORM_FIELD_NAME = 4;</code>
     */
    const FORM_FIELD_NAME = 4;
    /**
     * The text segment is the text content part of a form field. It will be
     * treated as child of another FORM_FIELD TextSegment if its span is
     * subspan of another TextSegment with type FORM_FIELD.
     *
     * Generated from protobuf enum <code>FORM_FIELD_CONTENTS = 5;</code>
     */
    const FORM_FIELD_CONTENTS = 5;
    /**
     * The text segment is a whole table, including headers, and all rows.
     *
     * Generated from protobuf enum <code>TABLE = 6;</code>
     */
    const TABLE = 6;
    /**
     * The text segment is a table's headers. It will be treated as child of
     * another TABLE TextSegment if its span is subspan of another TextSegment
     * with type TABLE.
     *
     * Generated from protobuf enum <code>TABLE_HEADER = 7;</code>
     */
    const TABLE_HEADER = 7;
    /**
     * The text segment is a row in table. It will be treated as child of
     * another TABLE TextSegment if its span is subspan of another TextSegment
     * with type TABLE.
     *
     * Generated from protobuf enum <code>TABLE_ROW = 8;</code>
     */
    const TABLE_ROW = 8;
    /**
     * The text segment is a cell in table. It will be treated as child of
     * another TABLE_ROW TextSegment if its span is subspan of another
     * TextSegment with type TABLE_ROW.
     *
     * Generated from protobuf enum <code>TABLE_CELL = 9;</code>
     */
    const TABLE_CELL = 9;

    private static $valueToName = [
        self::TEXT_SEGMENT_TYPE_UNSPECIFIED => 'TEXT_SEGMENT_TYPE_UNSPECIFIED',
        self::TOKEN => 'TOKEN',
        self::PARAGRAPH => 'PARAGRAPH',
        self::FORM_FIELD => 'FORM_FIELD',
        self::FORM_FIELD_NAME => 'FORM_FIELD_NAME',
        self::FORM_FIELD_CONTENTS => 'FORM_FIELD_CONTENTS',
        self::TABLE => 'TABLE',
        self::TABLE_HEADER => 'TABLE_HEADER',
        self::TABLE_ROW => 'TABLE_ROW',
        self::TABLE_CELL => 'TABLE_CELL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


