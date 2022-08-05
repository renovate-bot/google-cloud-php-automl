<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/text_extraction.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Model evaluation metrics for text extraction problems.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.TextExtractionEvaluationMetrics</code>
 */
class TextExtractionEvaluationMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The Area under precision recall curve metric.
     *
     * Generated from protobuf field <code>float au_prc = 1;</code>
     */
    private $au_prc = 0.0;
    /**
     * Output only. Metrics that have confidence thresholds.
     * Precision-recall curve can be derived from it.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.TextExtractionEvaluationMetrics.ConfidenceMetricsEntry confidence_metrics_entries = 2;</code>
     */
    private $confidence_metrics_entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $au_prc
     *           Output only. The Area under precision recall curve metric.
     *     @type array<\Google\Cloud\AutoMl\V1beta1\TextExtractionEvaluationMetrics\ConfidenceMetricsEntry>|\Google\Protobuf\Internal\RepeatedField $confidence_metrics_entries
     *           Output only. Metrics that have confidence thresholds.
     *           Precision-recall curve can be derived from it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\TextExtraction::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The Area under precision recall curve metric.
     *
     * Generated from protobuf field <code>float au_prc = 1;</code>
     * @return float
     */
    public function getAuPrc()
    {
        return $this->au_prc;
    }

    /**
     * Output only. The Area under precision recall curve metric.
     *
     * Generated from protobuf field <code>float au_prc = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setAuPrc($var)
    {
        GPBUtil::checkFloat($var);
        $this->au_prc = $var;

        return $this;
    }

    /**
     * Output only. Metrics that have confidence thresholds.
     * Precision-recall curve can be derived from it.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.TextExtractionEvaluationMetrics.ConfidenceMetricsEntry confidence_metrics_entries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConfidenceMetricsEntries()
    {
        return $this->confidence_metrics_entries;
    }

    /**
     * Output only. Metrics that have confidence thresholds.
     * Precision-recall curve can be derived from it.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.TextExtractionEvaluationMetrics.ConfidenceMetricsEntry confidence_metrics_entries = 2;</code>
     * @param array<\Google\Cloud\AutoMl\V1beta1\TextExtractionEvaluationMetrics\ConfidenceMetricsEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConfidenceMetricsEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1beta1\TextExtractionEvaluationMetrics\ConfidenceMetricsEntry::class);
        $this->confidence_metrics_entries = $arr;

        return $this;
    }

}

