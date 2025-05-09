<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

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
        'bucketCols' => 'BucketCols',
        'columns' => 'Columns',
        'inputFormat' => 'InputFormat',
        'isCompressed' => 'IsCompressed',
        'location' => 'Location',
        'numBuckets' => 'NumBuckets',
        'originalColumns' => 'OriginalColumns',
        'outputFormat' => 'OutputFormat',
        'parameters' => 'Parameters',
        'serdeInfo' => 'SerdeInfo',
        'skewedInfo' => 'SkewedInfo',
        'sortCols' => 'SortCols',
    ];

    public function validate()
    {
        if (\is_array($this->bucketCols)) {
            Model::validateArray($this->bucketCols);
        }
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->originalColumns)) {
            Model::validateArray($this->originalColumns);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (null !== $this->serdeInfo) {
            $this->serdeInfo->validate();
        }
        if (null !== $this->skewedInfo) {
            $this->skewedInfo->validate();
        }
        if (\is_array($this->sortCols)) {
            Model::validateArray($this->sortCols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketCols) {
            if (\is_array($this->bucketCols)) {
                $res['BucketCols'] = [];
                $n1 = 0;
                foreach ($this->bucketCols as $item1) {
                    $res['BucketCols'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->originalColumns)) {
                $res['OriginalColumns'] = [];
                $n1 = 0;
                foreach ($this->originalColumns as $item1) {
                    $res['OriginalColumns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->serdeInfo) {
            $res['SerdeInfo'] = null !== $this->serdeInfo ? $this->serdeInfo->toArray($noStream) : $this->serdeInfo;
        }

        if (null !== $this->skewedInfo) {
            $res['SkewedInfo'] = null !== $this->skewedInfo ? $this->skewedInfo->toArray($noStream) : $this->skewedInfo;
        }

        if (null !== $this->sortCols) {
            if (\is_array($this->sortCols)) {
                $res['SortCols'] = [];
                $n1 = 0;
                foreach ($this->sortCols as $item1) {
                    $res['SortCols'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketCols'])) {
            if (!empty($map['BucketCols'])) {
                $model->bucketCols = [];
                $n1 = 0;
                foreach ($map['BucketCols'] as $item1) {
                    $model->bucketCols[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1++] = DLColumn::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['OriginalColumns'] as $item1) {
                    $model->originalColumns[$n1++] = DLColumn::fromMap($item1);
                }
            }
        }

        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
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
                $n1 = 0;
                foreach ($map['SortCols'] as $item1) {
                    $model->sortCols[$n1++] = DLOrder::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
