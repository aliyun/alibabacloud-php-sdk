<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\zones\nodes\nodeResource;

use AlibabaCloud\Dara\Model;

class cpu extends Model
{
    /**
     * @var int
     */
    public $totalCpu;

    /**
     * @var float
     */
    public $usedCpu;
    protected $_name = [
        'totalCpu' => 'TotalCpu',
        'usedCpu' => 'UsedCpu',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalCpu) {
            $res['TotalCpu'] = $this->totalCpu;
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
        if (isset($map['TotalCpu'])) {
            $model->totalCpu = $map['TotalCpu'];
        }

        if (isset($map['UsedCpu'])) {
            $model->usedCpu = $map['UsedCpu'];
        }

        return $model;
    }
}
