<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\IndexControlPlayingListRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\IndexControlPlayingListRequest\openIndexControlRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\IndexControlPlayingListRequest\userInfo;
use AlibabaCloud\Tea\Model;

class IndexControlPlayingListRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var openIndexControlRequest
     */
    public $openIndexControlRequest;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo'              => 'DeviceInfo',
        'openIndexControlRequest' => 'OpenIndexControlRequest',
        'userInfo'                => 'UserInfo',
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
        if (null !== $this->openIndexControlRequest) {
            $res['OpenIndexControlRequest'] = null !== $this->openIndexControlRequest ? $this->openIndexControlRequest->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IndexControlPlayingListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['OpenIndexControlRequest'])) {
            $model->openIndexControlRequest = openIndexControlRequest::fromMap($map['OpenIndexControlRequest']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
