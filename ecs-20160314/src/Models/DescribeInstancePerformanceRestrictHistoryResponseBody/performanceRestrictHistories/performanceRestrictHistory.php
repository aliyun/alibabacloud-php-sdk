<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstancePerformanceRestrictHistoryResponseBody\performanceRestrictHistories;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstancePerformanceRestrictHistoryResponseBody\performanceRestrictHistories\performanceRestrictHistory\intervals;
use AlibabaCloud\Tea\Model;

class performanceRestrictHistory extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var intervals
     */
    public $intervals;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'intervals'  => 'Intervals',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intervals) {
            $res['Intervals'] = null !== $this->intervals ? $this->intervals->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceRestrictHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Intervals'])) {
            $model->intervals = intervals::fromMap($map['Intervals']);
        }

        return $model;
    }
}
