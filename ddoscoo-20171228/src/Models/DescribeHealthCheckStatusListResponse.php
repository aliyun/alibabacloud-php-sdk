<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckStatusListResponse\healthCheckStatusList;
use AlibabaCloud\Tea\Model;

class DescribeHealthCheckStatusListResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var healthCheckStatusList[]
     */
    public $healthCheckStatusList;
    protected $_name = [
        'requestId'             => 'RequestId',
        'healthCheckStatusList' => 'HealthCheckStatusList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('healthCheckStatusList', $this->healthCheckStatusList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->healthCheckStatusList) {
            $res['HealthCheckStatusList'] = [];
            if (null !== $this->healthCheckStatusList && \is_array($this->healthCheckStatusList)) {
                $n = 0;
                foreach ($this->healthCheckStatusList as $item) {
                    $res['HealthCheckStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHealthCheckStatusListResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HealthCheckStatusList'])) {
            if (!empty($map['HealthCheckStatusList'])) {
                $model->healthCheckStatusList = [];
                $n                            = 0;
                foreach ($map['HealthCheckStatusList'] as $item) {
                    $model->healthCheckStatusList[$n++] = null !== $item ? healthCheckStatusList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
