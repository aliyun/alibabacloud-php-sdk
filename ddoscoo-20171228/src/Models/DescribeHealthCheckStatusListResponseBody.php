<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckStatusListResponseBody\healthCheckStatusList;
use AlibabaCloud\Tea\Model;

class DescribeHealthCheckStatusListResponseBody extends Model
{
    /**
     * @var healthCheckStatusList[]
     */
    public $healthCheckStatusList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'healthCheckStatusList' => 'HealthCheckStatusList',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckStatusList) {
            $res['HealthCheckStatusList'] = [];
            if (null !== $this->healthCheckStatusList && \is_array($this->healthCheckStatusList)) {
                $n = 0;
                foreach ($this->healthCheckStatusList as $item) {
                    $res['HealthCheckStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeHealthCheckStatusListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckStatusList'])) {
            if (!empty($map['HealthCheckStatusList'])) {
                $model->healthCheckStatusList = [];
                $n                            = 0;
                foreach ($map['HealthCheckStatusList'] as $item) {
                    $model->healthCheckStatusList[$n++] = null !== $item ? healthCheckStatusList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
