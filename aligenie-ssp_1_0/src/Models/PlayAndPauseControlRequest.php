<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayAndPauseControlRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayAndPauseControlRequest\openPlayAndPauseControlParam;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayAndPauseControlRequest\userInfo;

class PlayAndPauseControlRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var openPlayAndPauseControlParam
     */
    public $openPlayAndPauseControlParam;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo' => 'DeviceInfo',
        'openPlayAndPauseControlParam' => 'OpenPlayAndPauseControlParam',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (null !== $this->openPlayAndPauseControlParam) {
            $this->openPlayAndPauseControlParam->validate();
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

        if (null !== $this->openPlayAndPauseControlParam) {
            $res['OpenPlayAndPauseControlParam'] = null !== $this->openPlayAndPauseControlParam ? $this->openPlayAndPauseControlParam->toArray($noStream) : $this->openPlayAndPauseControlParam;
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

        if (isset($map['OpenPlayAndPauseControlParam'])) {
            $model->openPlayAndPauseControlParam = openPlayAndPauseControlParam::fromMap($map['OpenPlayAndPauseControlParam']);
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
