<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceConfigResponseBody extends Model
{
    /**
     * @description 设备配置内容
     *
     * @example hostname 	HZYT_USG6620_A
     *
     * @var string
     */
    public $deviceConfig;

    /**
     * @example fdb2af01-bd56-4034-812b-f257f73b4690
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceConfig' => 'DeviceConfig',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceConfig) {
            $res['DeviceConfig'] = $this->deviceConfig;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceConfig'])) {
            $model->deviceConfig = $map['DeviceConfig'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
