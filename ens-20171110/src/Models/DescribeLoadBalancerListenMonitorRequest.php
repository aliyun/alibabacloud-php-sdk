<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerListenMonitorRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2024-01-30 08:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example lb-5q73cv04zeyh43lh74lp4****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @example tcp
     *
     * @var string
     */
    public $proto;

    /**
     * @description This parameter is required.
     *
     * @example 2024-01-15 16:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @example 80
     *
     * @var string
     */
    public $VPort;
    protected $_name = [
        'endTime'        => 'EndTime',
        'loadBalancerId' => 'LoadBalancerId',
        'proto'          => 'Proto',
        'startTime'      => 'StartTime',
        'VPort'          => 'VPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->VPort) {
            $res['VPort'] = $this->VPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancerListenMonitorRequest
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
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['VPort'])) {
            $model->VPort = $map['VPort'];
        }

        return $model;
    }
}
