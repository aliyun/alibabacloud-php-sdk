<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;

use AlibabaCloud\Dara\Model;

class cpu extends Model
{
    /**
     * @var int
     */
    public $originalTotalCpu;

    /**
     * @var int
     */
    public $totalCpu;

    /**
     * @var int
     */
    public $unitCpu;

    /**
     * @var int
     */
    public $usedCpu;
    protected $_name = [
        'originalTotalCpu' => 'OriginalTotalCpu',
        'totalCpu' => 'TotalCpu',
        'unitCpu' => 'UnitCpu',
        'usedCpu' => 'UsedCpu',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originalTotalCpu) {
            $res['OriginalTotalCpu'] = $this->originalTotalCpu;
        }

        if (null !== $this->totalCpu) {
            $res['TotalCpu'] = $this->totalCpu;
        }

        if (null !== $this->unitCpu) {
            $res['UnitCpu'] = $this->unitCpu;
        }

        if (null !== $this->usedCpu) {
            $res['UsedCpu'] = $this->usedCpu;
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
        if (isset($map['OriginalTotalCpu'])) {
            $model->originalTotalCpu = $map['OriginalTotalCpu'];
        }

        if (isset($map['TotalCpu'])) {
            $model->totalCpu = $map['TotalCpu'];
        }

        if (isset($map['UnitCpu'])) {
            $model->unitCpu = $map['UnitCpu'];
        }

        if (isset($map['UsedCpu'])) {
            $model->usedCpu = $map['UsedCpu'];
        }

        return $model;
    }
}
