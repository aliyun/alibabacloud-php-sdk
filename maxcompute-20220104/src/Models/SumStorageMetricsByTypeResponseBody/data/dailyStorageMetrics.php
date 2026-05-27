<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumStorageMetricsByTypeResponseBody\data;

use AlibabaCloud\Dara\Model;

class dailyStorageMetrics extends Model
{
    /**
     * @var string
     */
    public $dateTime;

    /**
     * @var float
     */
    public $percentage;

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
        'dateTime' => 'dateTime',
        'percentage' => 'percentage',
        'storageType' => 'storageType',
        'unit' => 'unit',
        'usage' => 'usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dateTime) {
            $res['dateTime'] = $this->dateTime;
        }

        if (null !== $this->percentage) {
            $res['percentage'] = $this->percentage;
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

        if (isset($map['percentage'])) {
            $model->percentage = $map['percentage'];
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
