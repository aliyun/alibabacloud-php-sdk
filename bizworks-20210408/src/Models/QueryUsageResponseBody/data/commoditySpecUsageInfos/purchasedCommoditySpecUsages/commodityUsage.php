<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\commoditySpecUsageInfos\purchasedCommoditySpecUsages;

use AlibabaCloud\Tea\Model;

class commodityUsage extends Model
{
    /**
     * @var int
     */
    public $applicationNum;

    /**
     * @var int
     */
    public $cpuNum;

    /**
     * @var int
     */
    public $memNum;
    protected $_name = [
        'applicationNum' => 'applicationNum',
        'cpuNum'         => 'cpuNum',
        'memNum'         => 'memNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationNum) {
            $res['applicationNum'] = $this->applicationNum;
        }
        if (null !== $this->cpuNum) {
            $res['cpuNum'] = $this->cpuNum;
        }
        if (null !== $this->memNum) {
            $res['memNum'] = $this->memNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodityUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applicationNum'])) {
            $model->applicationNum = $map['applicationNum'];
        }
        if (isset($map['cpuNum'])) {
            $model->cpuNum = $map['cpuNum'];
        }
        if (isset($map['memNum'])) {
            $model->memNum = $map['memNum'];
        }

        return $model;
    }
}
