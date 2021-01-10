<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionGroupDevicesResponseBody\groupDeviceList;
use AlibabaCloud\Tea\Model;

class FindVersionGroupDevicesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var groupDeviceList
     */
    public $groupDeviceList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'groupDeviceList' => 'GroupDeviceList',
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
        if (null !== $this->groupDeviceList) {
            $res['GroupDeviceList'] = null !== $this->groupDeviceList ? $this->groupDeviceList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindVersionGroupDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupDeviceList'])) {
            $model->groupDeviceList = groupDeviceList::fromMap($map['GroupDeviceList']);
        }

        return $model;
    }
}
