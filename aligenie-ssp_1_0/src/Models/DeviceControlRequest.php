<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeviceControlRequest\controlRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeviceControlRequest\deviceInfo;
use AlibabaCloud\Tea\Model;

class DeviceControlRequest extends Model
{
    /**
     * @var controlRequest
     */
    public $controlRequest;

    /**
     * @var deviceInfo
     */
    public $deviceInfo;
    protected $_name = [
        'controlRequest' => 'ControlRequest',
        'deviceInfo'     => 'DeviceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlRequest) {
            $res['ControlRequest'] = null !== $this->controlRequest ? $this->controlRequest->toMap() : null;
        }
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeviceControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlRequest'])) {
            $model->controlRequest = controlRequest::fromMap($map['ControlRequest']);
        }
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }

        return $model;
    }
}
