<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerListenMonitorResponseBody\loadBalancerMonitorListenData;
use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerListenMonitorResponseBody extends Model
{
    /**
     * @var loadBalancerMonitorListenData[]
     */
    public $loadBalancerMonitorListenData;

    /**
     * @description Id of the request.
     *
     * @example C0003E8B-B930-4F59-ADC0-0E209A9012A8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loadBalancerMonitorListenData' => 'LoadBalancerMonitorListenData',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerMonitorListenData) {
            $res['LoadBalancerMonitorListenData'] = [];
            if (null !== $this->loadBalancerMonitorListenData && \is_array($this->loadBalancerMonitorListenData)) {
                $n = 0;
                foreach ($this->loadBalancerMonitorListenData as $item) {
                    $res['LoadBalancerMonitorListenData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancerListenMonitorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerMonitorListenData'])) {
            if (!empty($map['LoadBalancerMonitorListenData'])) {
                $model->loadBalancerMonitorListenData = [];
                $n                                    = 0;
                foreach ($map['LoadBalancerMonitorListenData'] as $item) {
                    $model->loadBalancerMonitorListenData[$n++] = null !== $item ? loadBalancerMonitorListenData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
