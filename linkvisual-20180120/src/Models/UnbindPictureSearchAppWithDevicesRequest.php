<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UnbindPictureSearchAppWithDevicesRequest extends Model
{
    /**
     * @example 5a502d3fbab8410e8fd4be9037c7****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example VrJwPGjC1sJlqPjZA3cxg4****
     *
     * @var string[]
     */
    public $deviceIotIds;

    /**
     * @example iot-060a****
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'appInstanceId' => 'AppInstanceId',
        'deviceIotIds'  => 'DeviceIotIds',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->deviceIotIds) {
            $res['DeviceIotIds'] = $this->deviceIotIds;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindPictureSearchAppWithDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['DeviceIotIds'])) {
            if (!empty($map['DeviceIotIds'])) {
                $model->deviceIotIds = $map['DeviceIotIds'];
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
