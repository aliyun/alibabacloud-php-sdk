<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionWhiteDevicesResponseBody\deviceList;
use AlibabaCloud\Tea\Model;

class FindVersionWhiteDevicesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deviceList
     */
    public $deviceList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'deviceList' => 'DeviceList',
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
        if (null !== $this->deviceList) {
            $res['DeviceList'] = null !== $this->deviceList ? $this->deviceList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindVersionWhiteDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeviceList'])) {
            $model->deviceList = deviceList::fromMap($map['DeviceList']);
        }

        return $model;
    }
}
