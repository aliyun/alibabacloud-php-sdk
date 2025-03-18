<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeServerLoadBalancerMonitorRequest extends Model
{
    /**
     * @description The end of the time range to query. The maximum range between StartTime and EndTime is 24 hours.
     *
     * This parameter is required.
     *
     * @example 2024-09-15 17:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the ELB instance.
     *
     * This parameter is required.
     *
     * @example lb-5sc1s9zrui8lpb8u7cl4f****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * This parameter is required.
     *
     * @example 2024-09-15 16:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'loadBalancerId' => 'LoadBalancerId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServerLoadBalancerMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
