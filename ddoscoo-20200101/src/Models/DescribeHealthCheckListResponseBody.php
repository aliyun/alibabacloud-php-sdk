<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckListResponseBody\healthCheckList;
use AlibabaCloud\Tea\Model;

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
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckList) {
            $res['HealthCheckList'] = [];
            if (null !== $this->healthCheckList && \is_array($this->healthCheckList)) {
                $n = 0;
                foreach ($this->healthCheckList as $item) {
                    $res['HealthCheckList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeHealthCheckListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckList'])) {
            if (!empty($map['HealthCheckList'])) {
                $model->healthCheckList = [];
                $n                      = 0;
                foreach ($map['HealthCheckList'] as $item) {
                    $model->healthCheckList[$n++] = null !== $item ? healthCheckList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
