<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DLStorageDescriptor extends Model
{
    /**
     * @var string[]
     */
    public $bucketCols;

    /**
     * @var DLColumn[]
     */
    public $columns;

    /**
     * @var string
     */
    public $inputFormat;

    /**
     * @var bool
     */
    public $isCompressed;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $numBuckets;

    /**
     * @var DLColumn[]
     */
    public $originalColumns;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var DLSerdeInfo
     */
    public $serdeInfo;

    /**
     * @var DLSkewedInfo
     */
    public $skewedInfo;

    /**
     * @var DLOrder[]
     */
    public $sortCols;
    protected $_name = [
        'bucketCols'      => 'BucketCols',
        'columns'         => 'Columns',
        'inputFormat'     => 'InputFormat',
        'isCompressed'    => 'IsCompressed',
        'location'        => 'Location',
        'numBuckets'      => 'NumBuckets',
        'originalColumns' => 'OriginalColumns',
        'outputFormat'    => 'OutputFormat',
        'parameters'      => 'Parameters',
        'serdeInfo'       => 'SerdeInfo',
        'skewedInfo'      => 'SkewedInfo',
        'sortCols'        => 'SortCols',
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
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->inputFormat) {
            $res['InputFormat'] = $this->inputFormat;
        }
        if (null !== $this->isCompressed) {
            $res['IsCompressed'] = $this->isCompressed;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->numBuckets) {
            $res['NumBuckets'] = $this->numBuckets;
        }
        if (null !== $this->originalColumns) {
            $res['OriginalColumns'] = [];
            if (null !== $this->originalColumns && \is_array($this->originalColumns)) {
                $n = 0;
                foreach ($this->originalColumns as $item) {
                    $res['OriginalColumns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->serdeInfo) {
            $res['SerdeInfo'] = null !== $this->serdeInfo ? $this->serdeInfo->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DLStorageDescriptor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketCols'])) {
            if (!empty($map['BucketCols'])) {
                $model->bucketCols = $map['BucketCols'];
            }
        }
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? DLColumn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InputFormat'])) {
            $model->inputFormat = $map['InputFormat'];
        }
        if (isset($map['IsCompressed'])) {
            $model->isCompressed = $map['IsCompressed'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['NumBuckets'])) {
            $model->numBuckets = $map['NumBuckets'];
        }
        if (isset($map['OriginalColumns'])) {
            if (!empty($map['OriginalColumns'])) {
                $model->originalColumns = [];
                $n                      = 0;
                foreach ($map['OriginalColumns'] as $item) {
                    $model->originalColumns[$n++] = null !== $item ? DLColumn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['SerdeInfo'])) {
            $model->serdeInfo = DLSerdeInfo::fromMap($map['SerdeInfo']);
        }
        if (isset($map['SkewedInfo'])) {
            $model->skewedInfo = DLSkewedInfo::fromMap($map['SkewedInfo']);
        }
        if (isset($map['SortCols'])) {
            if (!empty($map['SortCols'])) {
                $model->sortCols = [];
                $n               = 0;
                foreach ($map['SortCols'] as $item) {
                    $model->sortCols[$n++] = null !== $item ? DLOrder::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
