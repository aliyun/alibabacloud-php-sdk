<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumStorageMetricsByDateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumStorageMetricsByDateResponseBody\data\itemStorageMetrics;

class data extends Model
{
    /**
     * @var string
     */
    public $dateTime;

    /**
     * @var itemStorageMetrics[]
     */
    public $itemStorageMetrics;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'dateTime' => 'dateTime',
        'itemStorageMetrics' => 'itemStorageMetrics',
        'storageType' => 'storageType',
        'unit' => 'unit',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->itemStorageMetrics)) {
            Model::validateArray($this->itemStorageMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dateTime) {
            $res['dateTime'] = $this->dateTime;
        }

        if (null !== $this->itemStorageMetrics) {
            if (\is_array($this->itemStorageMetrics)) {
                $res['itemStorageMetrics'] = [];
                $n1 = 0;
                foreach ($this->itemStorageMetrics as $item1) {
                    $res['itemStorageMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->storageType) {
            $res['storageType'] = $this->storageType;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
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
        if (isset($map['dateTime'])) {
            $model->dateTime = $map['dateTime'];
        }

        if (isset($map['itemStorageMetrics'])) {
            if (!empty($map['itemStorageMetrics'])) {
                $model->itemStorageMetrics = [];
                $n1 = 0;
                foreach ($map['itemStorageMetrics'] as $item1) {
                    $model->itemStorageMetrics[$n1] = itemStorageMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['storageType'])) {
            $model->storageType = $map['storageType'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
