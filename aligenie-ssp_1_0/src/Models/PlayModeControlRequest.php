<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlRequest\openPlayModeControlRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlRequest\userInfo;
use AlibabaCloud\Tea\Model;

class PlayModeControlRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var openPlayModeControlRequest
     */
    public $openPlayModeControlRequest;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo'                 => 'DeviceInfo',
        'openPlayModeControlRequest' => 'OpenPlayModeControlRequest',
        'userInfo'                   => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toMap() : null;
        }
        if (null !== $this->openPlayModeControlRequest) {
            $res['OpenPlayModeControlRequest'] = null !== $this->openPlayModeControlRequest ? $this->openPlayModeControlRequest->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PlayModeControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['OpenPlayModeControlRequest'])) {
            $model->openPlayModeControlRequest = openPlayModeControlRequest::fromMap($map['OpenPlayModeControlRequest']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
