<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerListenMonitorResponseBody\loadBalancerMonitorListenData;

class DescribeLoadBalancerListenMonitorResponseBody extends Model
{
    /**
     * @var loadBalancerMonitorListenData[]
     */
    public $loadBalancerMonitorListenData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loadBalancerMonitorListenData' => 'LoadBalancerMonitorListenData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->loadBalancerMonitorListenData)) {
            Model::validateArray($this->loadBalancerMonitorListenData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loadBalancerMonitorListenData) {
            if (\is_array($this->loadBalancerMonitorListenData)) {
                $res['LoadBalancerMonitorListenData'] = [];
                $n1 = 0;
                foreach ($this->loadBalancerMonitorListenData as $item1) {
                    $res['LoadBalancerMonitorListenData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LoadBalancerMonitorListenData'])) {
            if (!empty($map['LoadBalancerMonitorListenData'])) {
                $model->loadBalancerMonitorListenData = [];
                $n1 = 0;
                foreach ($map['LoadBalancerMonitorListenData'] as $item1) {
                    $model->loadBalancerMonitorListenData[$n1] = loadBalancerMonitorListenData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
