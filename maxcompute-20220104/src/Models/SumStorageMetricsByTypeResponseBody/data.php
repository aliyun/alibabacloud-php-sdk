<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumStorageMetricsByTypeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumStorageMetricsByTypeResponseBody\data\dailyStorageMetrics;

class data extends Model
{
    /**
     * @var dailyStorageMetrics[]
     */
    public $dailyStorageMetrics;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var float
     */
    public $usage;
    protected $_name = [
        'dailyStorageMetrics' => 'dailyStorageMetrics',
        'storageType' => 'storageType',
        'unit' => 'unit',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->dailyStorageMetrics)) {
            Model::validateArray($this->dailyStorageMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyStorageMetrics) {
            if (\is_array($this->dailyStorageMetrics)) {
                $res['dailyStorageMetrics'] = [];
                $n1 = 0;
                foreach ($this->dailyStorageMetrics as $item1) {
                    $res['dailyStorageMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['dailyStorageMetrics'])) {
            if (!empty($map['dailyStorageMetrics'])) {
                $model->dailyStorageMetrics = [];
                $n1 = 0;
                foreach ($map['dailyStorageMetrics'] as $item1) {
                    $model->dailyStorageMetrics[$n1] = dailyStorageMetrics::fromMap($item1);
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
