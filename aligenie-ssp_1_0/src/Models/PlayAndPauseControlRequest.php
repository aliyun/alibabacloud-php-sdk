<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayAndPauseControlRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayAndPauseControlRequest\openPlayAndPauseControlParam;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayAndPauseControlRequest\userInfo;
use AlibabaCloud\Tea\Model;

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
        'deviceInfo'                   => 'DeviceInfo',
        'openPlayAndPauseControlParam' => 'OpenPlayAndPauseControlParam',
        'userInfo'                     => 'UserInfo',
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
        if (null !== $this->openPlayAndPauseControlParam) {
            $res['OpenPlayAndPauseControlParam'] = null !== $this->openPlayAndPauseControlParam ? $this->openPlayAndPauseControlParam->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PlayAndPauseControlRequest
     */
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
