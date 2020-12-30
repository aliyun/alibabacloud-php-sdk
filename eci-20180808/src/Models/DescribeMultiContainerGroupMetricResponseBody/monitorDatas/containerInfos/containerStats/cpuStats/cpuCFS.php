<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\cpuStats;

use AlibabaCloud\Tea\Model;

class cpuCFS extends Model
{
    /**
     * @var int
     */
    public $throttledTime;

    /**
     * @var int
     */
    public $periods;

    /**
     * @var int
     */
    public $throttledPeriods;
    protected $_name = [
        'throttledTime'    => 'ThrottledTime',
        'periods'          => 'Periods',
        'throttledPeriods' => 'ThrottledPeriods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->throttledTime) {
            $res['ThrottledTime'] = $this->throttledTime;
        }
        if (null !== $this->periods) {
            $res['Periods'] = $this->periods;
        }
        if (null !== $this->throttledPeriods) {
            $res['ThrottledPeriods'] = $this->throttledPeriods;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpuCFS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ThrottledTime'])) {
            $model->throttledTime = $map['ThrottledTime'];
        }
        if (isset($map['Periods'])) {
            $model->periods = $map['Periods'];
        }
        if (isset($map['ThrottledPeriods'])) {
            $model->throttledPeriods = $map['ThrottledPeriods'];
        }

        return $model;
    }
}
