<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\TableExtended;

use AlibabaCloud\SDK\DataLake\V20200710\Models\FieldSchema;
use AlibabaCloud\SDK\DataLake\V20200710\Models\Order;
use AlibabaCloud\SDK\DataLake\V20200710\Models\TableExtended\sd\serDeInfo;
use AlibabaCloud\SDK\DataLake\V20200710\Models\TableExtended\sd\skewedInfo;
use AlibabaCloud\Tea\Model;

class sd extends Model
{
    /**
     * @var string[]
     */
    public $bucketCols;

    /**
     * @var FieldSchema[]
     */
    public $cols;

    /**
     * @var bool
     */
    public $compressed;

    /**
     * @var string
     */
    public $inputFormat;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $numBuckets;

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

    /**
     * @var skewedInfo
     */
    public $skewedInfo;

    /**
     * @var Order[]
     */
    public $sortCols;

    /**
     * @var bool
     */
    public $storedAsSubDirectories;
    protected $_name = [
        'bucketCols'             => 'BucketCols',
        'cols'                   => 'Cols',
        'compressed'             => 'Compressed',
        'inputFormat'            => 'InputFormat',
        'location'               => 'Location',
        'numBuckets'             => 'NumBuckets',
        'outputFormat'           => 'OutputFormat',
        'parameters'             => 'Parameters',
        'serDeInfo'              => 'SerDeInfo',
        'skewedInfo'             => 'SkewedInfo',
        'sortCols'               => 'SortCols',
        'storedAsSubDirectories' => 'StoredAsSubDirectories',
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
        if (null !== $this->cols) {
            $res['Cols'] = [];
            if (null !== $this->cols && \is_array($this->cols)) {
                $n = 0;
                foreach ($this->cols as $item) {
                    $res['Cols'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->compressed) {
            $res['Compressed'] = $this->compressed;
        }
        if (null !== $this->inputFormat) {
            $res['InputFormat'] = $this->inputFormat;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->numBuckets) {
            $res['NumBuckets'] = $this->numBuckets;
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
        if (null !== $this->skewedInfo) {
            $res['SkewedInfo'] = null !== $this->skewedInfo ? $this->skewedInfo->toMap() : null;
        }
        if (null !== $this->sortCols) {
            $res['SortCols'] = [];
            if (null !== $this->sortCols && \is_array($this->sortCols)) {
                $n = 0;
                foreach ($this->sortCols as $item) {
                    $res['SortCols'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->storedAsSubDirectories) {
            $res['StoredAsSubDirectories'] = $this->storedAsSubDirectories;
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
        if (isset($map['Cols'])) {
            if (!empty($map['Cols'])) {
                $model->cols = [];
                $n           = 0;
                foreach ($map['Cols'] as $item) {
                    $model->cols[$n++] = null !== $item ? FieldSchema::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Compressed'])) {
            $model->compressed = $map['Compressed'];
        }
        if (isset($map['InputFormat'])) {
            $model->inputFormat = $map['InputFormat'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['NumBuckets'])) {
            $model->numBuckets = $map['NumBuckets'];
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
        if (isset($map['SkewedInfo'])) {
            $model->skewedInfo = skewedInfo::fromMap($map['SkewedInfo']);
        }
        if (isset($map['SortCols'])) {
            if (!empty($map['SortCols'])) {
                $model->sortCols = [];
                $n               = 0;
                foreach ($map['SortCols'] as $item) {
                    $model->sortCols[$n++] = null !== $item ? Order::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StoredAsSubDirectories'])) {
            $model->storedAsSubDirectories = $map['StoredAsSubDirectories'];
        }

        return $model;
    }
}
