<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\LifecycleResource\table;

use AlibabaCloud\SDK\DataLake\V20200710\Models\LifecycleResource\table\sd\serDeInfo;
use AlibabaCloud\Tea\Model;

class sd extends Model
{
    /**
     * @var string[]
     */
    public $bucketCols;

    /**
     * @var string
     */
    public $inputFormat;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var serDeInfo
     */
    public $serDeInfo;
    protected $_name = [
        'bucketCols'   => 'BucketCols',
        'inputFormat'  => 'InputFormat',
        'location'     => 'Location',
        'outputFormat' => 'OutputFormat',
        'parameters'   => 'Parameters',
        'serDeInfo'    => 'SerDeInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketCols) {
            $res['BucketCols'] = $this->bucketCols;
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
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->serDeInfo) {
            $res['SerDeInfo'] = null !== $this->serDeInfo ? $this->serDeInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketCols'])) {
            if (!empty($map['BucketCols'])) {
                $model->bucketCols = $map['BucketCols'];
            }
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
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['SerDeInfo'])) {
            $model->serDeInfo = serDeInfo::fromMap($map['SerDeInfo']);
        }

        return $model;
    }
}
