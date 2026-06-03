<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeSyncInfoResponseBody\instanceInfo;

class DescribeSyncInfoResponseBody extends Model
{
    /**
     * @var instanceInfo
     */
    public $instanceInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceInfo' => 'InstanceInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceInfo) {
            $this->instanceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = null !== $this->instanceInfo ? $this->instanceInfo->toArray($noStream) : $this->instanceInfo;
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
        if (isset($map['InstanceInfo'])) {
            $model->instanceInfo = instanceInfo::fromMap($map['InstanceInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
