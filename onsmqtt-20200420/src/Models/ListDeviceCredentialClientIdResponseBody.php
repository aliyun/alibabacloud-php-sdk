<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCredentialClientIdResponseBody\deviceCredentialClientIdList;
use AlibabaCloud\Tea\Model;

class ListDeviceCredentialClientIdResponseBody extends Model
{
    /**
     * @var deviceCredentialClientIdList
     */
    public $deviceCredentialClientIdList;

    /**
     * @example 020F6A43-19E6-4B6E-B846-44EB31DF****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceCredentialClientIdList' => 'DeviceCredentialClientIdList',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCredentialClientIdList) {
            $res['DeviceCredentialClientIdList'] = null !== $this->deviceCredentialClientIdList ? $this->deviceCredentialClientIdList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceCredentialClientIdResponseBody
     */
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
