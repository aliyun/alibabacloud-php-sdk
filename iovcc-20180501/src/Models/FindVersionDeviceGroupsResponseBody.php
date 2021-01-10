<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionDeviceGroupsResponseBody\deviceGroupList;
use AlibabaCloud\Tea\Model;

class FindVersionDeviceGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deviceGroupList
     */
    public $deviceGroupList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'deviceGroupList' => 'DeviceGroupList',
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
        if (null !== $this->deviceGroupList) {
            $res['DeviceGroupList'] = null !== $this->deviceGroupList ? $this->deviceGroupList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindVersionDeviceGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceGroupList'])) {
            $model->deviceGroupList = deviceGroupList::fromMap($map['DeviceGroupList']);
        }

        return $model;
    }
}
