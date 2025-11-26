<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServerLoadBalancerListenMonitorResponseBody\serverLoadBalancerMonitorData;

class DescribeServerLoadBalancerListenMonitorResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serverLoadBalancerMonitorData[]
     */
    public $serverLoadBalancerMonitorData;
    protected $_name = [
        'requestId' => 'RequestId',
        'serverLoadBalancerMonitorData' => 'ServerLoadBalancerMonitorData',
    ];

    public function validate()
    {
        if (\is_array($this->serverLoadBalancerMonitorData)) {
            Model::validateArray($this->serverLoadBalancerMonitorData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serverLoadBalancerMonitorData) {
            if (\is_array($this->serverLoadBalancerMonitorData)) {
                $res['ServerLoadBalancerMonitorData'] = [];
                $n1 = 0;
                foreach ($this->serverLoadBalancerMonitorData as $item1) {
                    $res['ServerLoadBalancerMonitorData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServerLoadBalancerMonitorData'])) {
            if (!empty($map['ServerLoadBalancerMonitorData'])) {
                $model->serverLoadBalancerMonitorData = [];
                $n1 = 0;
                foreach ($map['ServerLoadBalancerMonitorData'] as $item1) {
                    $model->serverLoadBalancerMonitorData[$n1] = serverLoadBalancerMonitorData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
