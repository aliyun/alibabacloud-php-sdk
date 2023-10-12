<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceConfigDateResponseBody extends Model
{
    /**
     * @description 设备配置内容
     *
     * @var string[]
     */
    public $deviceConfigDate;

    /**
     * @example fdb2af01-bd56-4034-812b-f257f73b4690
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceConfigDate' => 'DeviceConfigDate',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceConfigDate) {
            $res['DeviceConfigDate'] = $this->deviceConfigDate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceConfigDateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceConfigDate'])) {
            if (!empty($map['DeviceConfigDate'])) {
                $model->deviceConfigDate = $map['DeviceConfigDate'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
