<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListVersionDeviceGroupsResponseBody\deviceGroupList;
use AlibabaCloud\Tea\Model;

class ListVersionDeviceGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deviceGroupList[]
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
            $res['DeviceGroupList'] = [];
            if (null !== $this->deviceGroupList && \is_array($this->deviceGroupList)) {
                $n = 0;
                foreach ($this->deviceGroupList as $item) {
                    $res['DeviceGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVersionDeviceGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceGroupList'])) {
            if (!empty($map['DeviceGroupList'])) {
                $model->deviceGroupList = [];
                $n                      = 0;
                foreach ($map['DeviceGroupList'] as $item) {
                    $model->deviceGroupList[$n++] = null !== $item ? deviceGroupList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
