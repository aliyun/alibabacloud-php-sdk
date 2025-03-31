<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCredentialClientIdResponseBody\deviceCredentialClientIdList;

class ListDeviceCredentialClientIdResponseBody extends Model
{
    /**
     * @var deviceCredentialClientIdList
     */
    public $deviceCredentialClientIdList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceCredentialClientIdList' => 'DeviceCredentialClientIdList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->deviceCredentialClientIdList) {
            $this->deviceCredentialClientIdList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceCredentialClientIdList) {
            $res['DeviceCredentialClientIdList'] = null !== $this->deviceCredentialClientIdList ? $this->deviceCredentialClientIdList->toArray($noStream) : $this->deviceCredentialClientIdList;
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
        if (isset($map['DeviceCredentialClientIdList'])) {
            $model->deviceCredentialClientIdList = deviceCredentialClientIdList::fromMap($map['DeviceCredentialClientIdList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
