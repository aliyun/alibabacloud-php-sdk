<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table;

use AlibabaCloud\Tea\Model;

class technicalMetadata extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $compressed;

    /**
     * @example org.apache.hadoop.hive.ql.io.parquet.MapredParquetInputFormat
     *
     * @var string
     */
    public $inputFormat;

    /**
     * @example oss://test-bucket/test_tbl
     *
     * @var string
     */
    public $location;

    /**
     * @example org.apache.hadoop.hive.ql.io.parquet.MapredParquetOutputFormat
     *
     * @var string
     */
    public $outputFormat;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $owner;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @example org.apache.hadoop.hive.ql.io.parquet.serde.ParquetHiveSerDe
     *
     * @var string
     */
    public $serializationLibrary;
    protected $_name = [
        'compressed' => 'Compressed',
        'inputFormat' => 'InputFormat',
        'location' => 'Location',
        'outputFormat' => 'OutputFormat',
        'owner' => 'Owner',
        'parameters' => 'Parameters',
        'serializationLibrary' => 'SerializationLibrary',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->compressed) {
            $res['Compressed'] = $this->compressed;
        }
        if (null !== $this->inputFormat) {
            $res['InputFormat'] = $this->inputFormat;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->serializationLibrary) {
            $res['SerializationLibrary'] = $this->serializationLibrary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return technicalMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Compressed'])) {
            $model->compressed = $map['Compressed'];
        }
        if (isset($map['InputFormat'])) {
            $model->inputFormat = $map['InputFormat'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['SerializationLibrary'])) {
            $model->serializationLibrary = $map['SerializationLibrary'];
        }

        return $model;
    }
}
