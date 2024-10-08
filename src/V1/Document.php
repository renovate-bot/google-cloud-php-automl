<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/data_items.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A structured text document e.g. a PDF.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.Document</code>
 */
class Document extends \Google\Protobuf\Internal\Message
{
    /**
     * An input config specifying the content of the document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.DocumentInputConfig input_config = 1;</code>
     */
    protected $input_config = null;
    /**
     * The plain text version of this document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSnippet document_text = 2;</code>
     */
    protected $document_text = null;
    /**
     * Describes the layout of the document.
     * Sorted by [page_number][].
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.Document.Layout layout = 3;</code>
     */
    private $layout;
    /**
     * The dimensions of the page in the document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.DocumentDimensions document_dimensions = 4;</code>
     */
    protected $document_dimensions = null;
    /**
     * Number of pages in the document.
     *
     * Generated from protobuf field <code>int32 page_count = 5;</code>
     */
    protected $page_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1\DocumentInputConfig $input_config
     *           An input config specifying the content of the document.
     *     @type \Google\Cloud\AutoMl\V1\TextSnippet $document_text
     *           The plain text version of this document.
     *     @type array<\Google\Cloud\AutoMl\V1\Document\Layout>|\Google\Protobuf\Internal\RepeatedField $layout
     *           Describes the layout of the document.
     *           Sorted by [page_number][].
     *     @type \Google\Cloud\AutoMl\V1\DocumentDimensions $document_dimensions
     *           The dimensions of the page in the document.
     *     @type int $page_count
     *           Number of pages in the document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\DataItems::initOnce();
        parent::__construct($data);
    }

    /**
     * An input config specifying the content of the document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.DocumentInputConfig input_config = 1;</code>
     * @return \Google\Cloud\AutoMl\V1\DocumentInputConfig|null
     */
    public function getInputConfig()
    {
        return $this->input_config;
    }

    public function hasInputConfig()
    {
        return isset($this->input_config);
    }

    public function clearInputConfig()
    {
        unset($this->input_config);
    }

    /**
     * An input config specifying the content of the document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.DocumentInputConfig input_config = 1;</code>
     * @param \Google\Cloud\AutoMl\V1\DocumentInputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\DocumentInputConfig::class);
        $this->input_config = $var;

        return $this;
    }

    /**
     * The plain text version of this document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSnippet document_text = 2;</code>
     * @return \Google\Cloud\AutoMl\V1\TextSnippet|null
     */
    public function getDocumentText()
    {
        return $this->document_text;
    }

    public function hasDocumentText()
    {
        return isset($this->document_text);
    }

    public function clearDocumentText()
    {
        unset($this->document_text);
    }

    /**
     * The plain text version of this document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSnippet document_text = 2;</code>
     * @param \Google\Cloud\AutoMl\V1\TextSnippet $var
     * @return $this
     */
    public function setDocumentText($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\TextSnippet::class);
        $this->document_text = $var;

        return $this;
    }

    /**
     * Describes the layout of the document.
     * Sorted by [page_number][].
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.Document.Layout layout = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Describes the layout of the document.
     * Sorted by [page_number][].
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.Document.Layout layout = 3;</code>
     * @param array<\Google\Cloud\AutoMl\V1\Document\Layout>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLayout($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1\Document\Layout::class);
        $this->layout = $arr;

        return $this;
    }

    /**
     * The dimensions of the page in the document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.DocumentDimensions document_dimensions = 4;</code>
     * @return \Google\Cloud\AutoMl\V1\DocumentDimensions|null
     */
    public function getDocumentDimensions()
    {
        return $this->document_dimensions;
    }

    public function hasDocumentDimensions()
    {
        return isset($this->document_dimensions);
    }

    public function clearDocumentDimensions()
    {
        unset($this->document_dimensions);
    }

    /**
     * The dimensions of the page in the document.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.DocumentDimensions document_dimensions = 4;</code>
     * @param \Google\Cloud\AutoMl\V1\DocumentDimensions $var
     * @return $this
     */
    public function setDocumentDimensions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\DocumentDimensions::class);
        $this->document_dimensions = $var;

        return $this;
    }

    /**
     * Number of pages in the document.
     *
     * Generated from protobuf field <code>int32 page_count = 5;</code>
     * @return int
     */
    public function getPageCount()
    {
        return $this->page_count;
    }

    /**
     * Number of pages in the document.
     *
     * Generated from protobuf field <code>int32 page_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPageCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_count = $var;

        return $this;
    }

}

