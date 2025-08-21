<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlRequest\openPlayModeControlRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayModeControlRequest\userInfo;

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
        'deviceInfo' => 'DeviceInfo',
        'openPlayModeControlRequest' => 'OpenPlayModeControlRequest',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (null !== $this->openPlayModeControlRequest) {
            $this->openPlayModeControlRequest->validate();
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toArray($noStream) : $this->deviceInfo;
        }

        if (null !== $this->openPlayModeControlRequest) {
            $res['OpenPlayModeControlRequest'] = null !== $this->openPlayModeControlRequest ? $this->openPlayModeControlRequest->toArray($noStream) : $this->openPlayModeControlRequest;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
