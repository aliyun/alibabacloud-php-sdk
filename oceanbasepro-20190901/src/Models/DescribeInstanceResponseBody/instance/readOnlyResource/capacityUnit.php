<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\readOnlyResource;

use AlibabaCloud\Dara\Model;

class capacityUnit extends Model
{
    /**
     * @var int
     */
    public $maxCapacityUnit;

    /**
     * @var int
     */
    public $minCapacityUnit;

    /**
     * @var string
     */
    public $usedCapacityUnit;
    protected $_name = [
        'maxCapacityUnit' => 'MaxCapacityUnit',
        'minCapacityUnit' => 'MinCapacityUnit',
        'usedCapacityUnit' => 'UsedCapacityUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxCapacityUnit) {
            $res['MaxCapacityUnit'] = $this->maxCapacityUnit;
        }

        if (null !== $this->minCapacityUnit) {
            $res['MinCapacityUnit'] = $this->minCapacityUnit;
        }

        if (null !== $this->usedCapacityUnit) {
            $res['UsedCapacityUnit'] = $this->usedCapacityUnit;
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
        if (isset($map['MaxCapacityUnit'])) {
            $model->maxCapacityUnit = $map['MaxCapacityUnit'];
        }

        if (isset($map['MinCapacityUnit'])) {
            $model->minCapacityUnit = $map['MinCapacityUnit'];
        }

        if (isset($map['UsedCapacityUnit'])) {
            $model->usedCapacityUnit = $map['UsedCapacityUnit'];
        }

        return $model;
    }
}
