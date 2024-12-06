<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/io.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input configuration for BatchPredict Action.
 * The format of input depends on the ML problem of the model used for
 * prediction. As input source the
 * [gcs_source][google.cloud.automl.v1.InputConfig.gcs_source]
 * is expected, unless specified otherwise.
 * The formats are represented in EBNF with commas being literal and with
 * non-terminal symbols defined near the end of this comment. The formats
 * are:
 * #### AutoML Vision
 * ##### Classification
 * One or more CSV files where each line is a single column:
 *     GCS_FILE_PATH
 * The Google Cloud Storage location of an image of up to
 * 30MB in size. Supported extensions: .JPEG, .GIF, .PNG.
 * This path is treated as the ID in the batch predict output.
 * Sample rows:
 *     gs://folder/image1.jpeg
 *     gs://folder/image2.gif
 *     gs://folder/image3.png
 * ##### Object Detection
 * One or more CSV files where each line is a single column:
 *     GCS_FILE_PATH
 * The Google Cloud Storage location of an image of up to
 * 30MB in size. Supported extensions: .JPEG, .GIF, .PNG.
 * This path is treated as the ID in the batch predict output.
 * Sample rows:
 *     gs://folder/image1.jpeg
 *     gs://folder/image2.gif
 *     gs://folder/image3.png
 * #### AutoML Video Intelligence
 * ##### Classification
 * One or more CSV files where each line is a single column:
 *     GCS_FILE_PATH,TIME_SEGMENT_START,TIME_SEGMENT_END
 * `GCS_FILE_PATH` is the Google Cloud Storage location of video up to 50GB in
 * size and up to 3h in duration duration.
 * Supported extensions: .MOV, .MPEG4, .MP4, .AVI.
 * `TIME_SEGMENT_START` and `TIME_SEGMENT_END` must be within the
 * length of the video, and the end time must be after the start time.
 * Sample rows:
 *     gs://folder/video1.mp4,10,40
 *     gs://folder/video1.mp4,20,60
 *     gs://folder/vid2.mov,0,inf
 * ##### Object Tracking
 * One or more CSV files where each line is a single column:
 *     GCS_FILE_PATH,TIME_SEGMENT_START,TIME_SEGMENT_END
 * `GCS_FILE_PATH` is the Google Cloud Storage location of video up to 50GB in
 * size and up to 3h in duration duration.
 * Supported extensions: .MOV, .MPEG4, .MP4, .AVI.
 * `TIME_SEGMENT_START` and `TIME_SEGMENT_END` must be within the
 * length of the video, and the end time must be after the start time.
 * Sample rows:
 *     gs://folder/video1.mp4,10,40
 *     gs://folder/video1.mp4,20,60
 *     gs://folder/vid2.mov,0,inf
 * #### AutoML Natural Language
 * ##### Classification
 * One or more CSV files where each line is a single column:
 *     GCS_FILE_PATH
 * `GCS_FILE_PATH` is the Google Cloud Storage location of a text file.
 * Supported file extensions: .TXT, .PDF, .TIF, .TIFF
 * Text files can be no larger than 10MB in size.
 * Sample rows:
 *     gs://folder/text1.txt
 *     gs://folder/text2.pdf
 *     gs://folder/text3.tif
 * ##### Sentiment Analysis
 * One or more CSV files where each line is a single column:
 *     GCS_FILE_PATH
 * `GCS_FILE_PATH` is the Google Cloud Storage location of a text file.
 * Supported file extensions: .TXT, .PDF, .TIF, .TIFF
 * Text files can be no larger than 128kB in size.
 * Sample rows:
 *     gs://folder/text1.txt
 *     gs://folder/text2.pdf
 *     gs://folder/text3.tif
 * ##### Entity Extraction
 * One or more JSONL (JSON Lines) files that either provide inline text or
 * documents. You can only use one format, either inline text or documents,
 * for a single call to [AutoMl.BatchPredict].
 * Each JSONL file contains a per line a proto that
 * wraps a temporary user-assigned TextSnippet ID (string up to 2000
 * characters long) called "id", a TextSnippet proto (in
 * JSON representation) and zero or more TextFeature protos. Any given
 * text snippet content must have 30,000 characters or less, and also
 * be UTF-8 NFC encoded (ASCII already is). The IDs provided should be
 * unique.
 * Each document JSONL file contains, per line, a proto that wraps a Document
 * proto with `input_config` set. Each document cannot exceed 2MB in size.
 * Supported document extensions: .PDF, .TIF, .TIFF
 * Each JSONL file must not exceed 100MB in size, and no more than 20
 * JSONL files may be passed.
 * Sample inline JSONL file (Shown with artificial line
 * breaks. Actual line breaks are denoted by "\n".):
 *     {
 *        "id": "my_first_id",
 *        "text_snippet": { "content": "dog car cat"},
 *        "text_features": [
 *          {
 *            "text_segment": {"start_offset": 4, "end_offset": 6},
 *            "structural_type": PARAGRAPH,
 *            "bounding_poly": {
 *              "normalized_vertices": [
 *                {"x": 0.1, "y": 0.1},
 *                {"x": 0.1, "y": 0.3},
 *                {"x": 0.3, "y": 0.3},
 *                {"x": 0.3, "y": 0.1},
 *              ]
 *            },
 *          }
 *        ],
 *      }\n
 *      {
 *        "id": "2",
 *        "text_snippet": {
 *          "content": "Extended sample content",
 *          "mime_type": "text/plain"
 *        }
 *      }
 * Sample document JSONL file (Shown with artificial line
 * breaks. Actual line breaks are denoted by "\n".):
 *      {
 *        "document": {
 *          "input_config": {
 *            "gcs_source": { "input_uris": [ "gs://folder/document1.pdf" ]
 *            }
 *          }
 *        }
 *      }\n
 *      {
 *        "document": {
 *          "input_config": {
 *            "gcs_source": { "input_uris": [ "gs://folder/document2.tif" ]
 *            }
 *          }
 *        }
 *      }
 * #### AutoML Tables
 * See [Preparing your training
 * data](https://cloud.google.com/automl-tables/docs/predict-batch) for more
 * information.
 * You can use either
 * [gcs_source][google.cloud.automl.v1.BatchPredictInputConfig.gcs_source]
 * or
 * [bigquery_source][BatchPredictInputConfig.bigquery_source].
 * **For gcs_source:**
 * CSV file(s), each by itself 10GB or smaller and total size must be
 * 100GB or smaller, where first file must have a header containing
 * column names. If the first row of a subsequent file is the same as
 * the header, then it is also treated as a header. All other rows
 * contain values for the corresponding columns.
 * The column names must contain the model's
 * [input_feature_column_specs'][google.cloud.automl.v1.TablesModelMetadata.input_feature_column_specs]
 * [display_name-s][google.cloud.automl.v1.ColumnSpec.display_name]
 * (order doesn't matter). The columns corresponding to the model's
 * input feature column specs must contain values compatible with the
 * column spec's data types. Prediction on all the rows, i.e. the CSV
 * lines, will be attempted.
 * Sample rows from a CSV file:
 * <pre>
 * "First Name","Last Name","Dob","Addresses"
 * "John","Doe","1968-01-22","[{"status":"current","address":"123_First_Avenue","city":"Seattle","state":"WA","zip":"11111","numberOfYears":"1"},{"status":"previous","address":"456_Main_Street","city":"Portland","state":"OR","zip":"22222","numberOfYears":"5"}]"
 * "Jane","Doe","1980-10-16","[{"status":"current","address":"789_Any_Avenue","city":"Albany","state":"NY","zip":"33333","numberOfYears":"2"},{"status":"previous","address":"321_Main_Street","city":"Hoboken","state":"NJ","zip":"44444","numberOfYears":"3"}]}
 * </pre>
 * **For bigquery_source:**
 * The URI of a BigQuery table. The user data size of the BigQuery
 * table must be 100GB or smaller.
 * The column names must contain the model's
 * [input_feature_column_specs'][google.cloud.automl.v1.TablesModelMetadata.input_feature_column_specs]
 * [display_name-s][google.cloud.automl.v1.ColumnSpec.display_name]
 * (order doesn't matter). The columns corresponding to the model's
 * input feature column specs must contain values compatible with the
 * column spec's data types. Prediction on all the rows of the table
 * will be attempted.
 * **Input field definitions:**
 * `GCS_FILE_PATH`
 * : The path to a file on Google Cloud Storage. For example,
 *   "gs://folder/video.avi".
 * `TIME_SEGMENT_START`
 * : (`TIME_OFFSET`)
 *   Expresses a beginning, inclusive, of a time segment
 *   within an example that has a time dimension
 *   (e.g. video).
 * `TIME_SEGMENT_END`
 * : (`TIME_OFFSET`)
 *   Expresses an end, exclusive, of a time segment within
 *   n example that has a time dimension (e.g. video).
 * `TIME_OFFSET`
 * : A number of seconds as measured from the start of an
 *   example (e.g. video). Fractions are allowed, up to a
 *   microsecond precision. "inf" is allowed, and it means the end
 *   of the example.
 *  **Errors:**
 *  If any of the provided CSV files can't be parsed or if more than certain
 *  percent of CSV rows cannot be processed then the operation fails and
 *  prediction does not happen. Regardless of overall success or failure the
 *  per-row failures, up to a certain count cap, will be listed in
 *  Operation.metadata.partial_failures.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.BatchPredictInputConfig</code>
 */
class BatchPredictInputConfig extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1\GcsSource $gcs_source
     *           Required. The Google Cloud Storage location for the input content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Io::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.GcsSource gcs_source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AutoMl\V1\GcsSource|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(1);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(1);
    }

    /**
     * Required. The Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.GcsSource gcs_source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AutoMl\V1\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\GcsSource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

