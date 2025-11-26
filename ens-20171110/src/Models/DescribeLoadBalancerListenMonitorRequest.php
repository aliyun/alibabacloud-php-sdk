<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeLoadBalancerListenMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $proto;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $VPort;
    protected $_name = [
        'endTime' => 'EndTime',
        'loadBalancerId' => 'LoadBalancerId',
        'proto' => 'Proto',
        'startTime' => 'StartTime',
        'VPort' => 'VPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
