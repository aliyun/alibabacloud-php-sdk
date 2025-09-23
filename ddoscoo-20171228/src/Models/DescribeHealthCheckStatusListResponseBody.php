<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckStatusListResponseBody\healthCheckStatusList;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->healthCheckStatusList)) {
            Model::validateArray($this->healthCheckStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthCheckStatusList) {
            if (\is_array($this->healthCheckStatusList)) {
                $res['HealthCheckStatusList'] = [];
                $n1 = 0;
                foreach ($this->healthCheckStatusList as $item1) {
                    $res['HealthCheckStatusList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HealthCheckStatusList'])) {
            if (!empty($map['HealthCheckStatusList'])) {
                $model->healthCheckStatusList = [];
                $n1 = 0;
                foreach ($map['HealthCheckStatusList'] as $item1) {
                    $model->healthCheckStatusList[$n1] = healthCheckStatusList::fromMap($item1);
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
