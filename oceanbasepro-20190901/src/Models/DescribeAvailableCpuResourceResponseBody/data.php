<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableCpuResourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $maxCpu;

    /**
     * @var int
     */
    public $minCpu;

    /**
     * @var int
     */
    public $unitNum;
    protected $_name = [
        'maxCpu'  => 'MaxCpu',
        'minCpu'  => 'MinCpu',
        'unitNum' => 'UnitNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxCpu) {
            $res['MaxCpu'] = $this->maxCpu;
        }
        if (null !== $this->minCpu) {
            $res['MinCpu'] = $this->minCpu;
        }
        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxCpu'])) {
            $model->maxCpu = $map['MaxCpu'];
        }
        if (isset($map['MinCpu'])) {
            $model->minCpu = $map['MinCpu'];
        }
        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }

        return $model;
    }
}
