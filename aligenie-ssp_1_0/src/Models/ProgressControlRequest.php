<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ProgressControlRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ProgressControlRequest\openProgressControlRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ProgressControlRequest\userInfo;
use AlibabaCloud\Tea\Model;

class ProgressControlRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var openProgressControlRequest
     */
    public $openProgressControlRequest;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo'                 => 'DeviceInfo',
        'openProgressControlRequest' => 'OpenProgressControlRequest',
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
        if (null !== $this->openProgressControlRequest) {
            $res['OpenProgressControlRequest'] = null !== $this->openProgressControlRequest ? $this->openProgressControlRequest->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProgressControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['OpenProgressControlRequest'])) {
            $model->openProgressControlRequest = openProgressControlRequest::fromMap($map['OpenProgressControlRequest']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
