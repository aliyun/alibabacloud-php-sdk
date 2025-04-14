<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckListResponseBody\healthCheckList;

class DescribeHealthCheckListResponseBody extends Model
{
    /**
     * @var healthCheckList[]
     */
    public $healthCheckList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'healthCheckList' => 'HealthCheckList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->healthCheckList)) {
            Model::validateArray($this->healthCheckList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthCheckList) {
            if (\is_array($this->healthCheckList)) {
                $res['HealthCheckList'] = [];
                $n1 = 0;
                foreach ($this->healthCheckList as $item1) {
                    $res['HealthCheckList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HealthCheckList'])) {
            if (!empty($map['HealthCheckList'])) {
                $model->healthCheckList = [];
                $n1 = 0;
                foreach ($map['HealthCheckList'] as $item1) {
                    $model->healthCheckList[$n1++] = healthCheckList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
