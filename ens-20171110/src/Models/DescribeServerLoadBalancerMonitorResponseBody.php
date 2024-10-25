<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServerLoadBalancerMonitorResponseBody\serverLoadBalancerMonitorData;
use AlibabaCloud\Tea\Model;

class DescribeServerLoadBalancerMonitorResponseBody extends Model
{
    /**
     * @description Id of the request。
     *
     * @example AAE90880-4970-4D81-A534-A6C0F3631F74
     *
     * @var string
     */
    public $requestId;

    /**
     * @var serverLoadBalancerMonitorData[]
     */
    public $serverLoadBalancerMonitorData;
    protected $_name = [
        'requestId'                     => 'RequestId',
        'serverLoadBalancerMonitorData' => 'ServerLoadBalancerMonitorData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serverLoadBalancerMonitorData) {
            $res['ServerLoadBalancerMonitorData'] = [];
            if (null !== $this->serverLoadBalancerMonitorData && \is_array($this->serverLoadBalancerMonitorData)) {
                $n = 0;
                foreach ($this->serverLoadBalancerMonitorData as $item) {
                    $res['ServerLoadBalancerMonitorData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServerLoadBalancerMonitorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServerLoadBalancerMonitorData'])) {
            if (!empty($map['ServerLoadBalancerMonitorData'])) {
                $model->serverLoadBalancerMonitorData = [];
                $n                                    = 0;
                foreach ($map['ServerLoadBalancerMonitorData'] as $item) {
                    $model->serverLoadBalancerMonitorData[$n++] = null !== $item ? serverLoadBalancerMonitorData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
