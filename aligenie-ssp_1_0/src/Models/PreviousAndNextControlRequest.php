<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PreviousAndNextControlRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PreviousAndNextControlRequest\openControlPlayingListRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PreviousAndNextControlRequest\userInfo;
use AlibabaCloud\Tea\Model;

class PreviousAndNextControlRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var openControlPlayingListRequest
     */
    public $openControlPlayingListRequest;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo'                    => 'DeviceInfo',
        'openControlPlayingListRequest' => 'OpenControlPlayingListRequest',
        'userInfo'                      => 'UserInfo',
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
        if (null !== $this->openControlPlayingListRequest) {
            $res['OpenControlPlayingListRequest'] = null !== $this->openControlPlayingListRequest ? $this->openControlPlayingListRequest->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreviousAndNextControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['OpenControlPlayingListRequest'])) {
            $model->openControlPlayingListRequest = openControlPlayingListRequest::fromMap($map['OpenControlPlayingListRequest']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
