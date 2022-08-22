<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCurrentPlayingListRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCurrentPlayingListRequest\openQueryPlayListRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetCurrentPlayingListRequest\userInfo;
use AlibabaCloud\Tea\Model;

class GetCurrentPlayingListRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var openQueryPlayListRequest
     */
    public $openQueryPlayListRequest;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo'               => 'DeviceInfo',
        'openQueryPlayListRequest' => 'OpenQueryPlayListRequest',
        'userInfo'                 => 'UserInfo',
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
        if (null !== $this->openQueryPlayListRequest) {
            $res['OpenQueryPlayListRequest'] = null !== $this->openQueryPlayListRequest ? $this->openQueryPlayListRequest->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCurrentPlayingListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['OpenQueryPlayListRequest'])) {
            $model->openQueryPlayListRequest = openQueryPlayListRequest::fromMap($map['OpenQueryPlayListRequest']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
