<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceAccessResponseBody\serviceAccessInfo;

class GetServiceAccessResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceAccessInfo
     */
    public $serviceAccessInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceAccessInfo' => 'ServiceAccessInfo',
    ];

    public function validate()
    {
        if (null !== $this->serviceAccessInfo) {
            $this->serviceAccessInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceAccessInfo) {
            $res['ServiceAccessInfo'] = null !== $this->serviceAccessInfo ? $this->serviceAccessInfo->toArray($noStream) : $this->serviceAccessInfo;
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

        if (isset($map['ServiceAccessInfo'])) {
            $model->serviceAccessInfo = serviceAccessInfo::fromMap($map['ServiceAccessInfo']);
        }

        return $model;
    }
}
