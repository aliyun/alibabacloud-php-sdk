<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceInfoResponseBody\instanceInfo;
use AlibabaCloud\Tea\Model;

class DescribeInstanceInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceInfo
     */
    public $instanceInfo;
    protected $_name = [
        'requestId'    => 'RequestId',
        'instanceInfo' => 'InstanceInfo',
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
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = null !== $this->instanceInfo ? $this->instanceInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceInfo'])) {
            $model->instanceInfo = instanceInfo::fromMap($map['InstanceInfo']);
        }

        return $model;
    }
}
