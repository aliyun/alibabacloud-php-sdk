<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListRequest\openCreatePlayingListRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListRequest\userInfo;
use AlibabaCloud\Tea\Model;

class CreatePlayingListRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var openCreatePlayingListRequest
     */
    public $openCreatePlayingListRequest;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo'                   => 'DeviceInfo',
        'openCreatePlayingListRequest' => 'OpenCreatePlayingListRequest',
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
        if (null !== $this->openCreatePlayingListRequest) {
            $res['OpenCreatePlayingListRequest'] = null !== $this->openCreatePlayingListRequest ? $this->openCreatePlayingListRequest->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePlayingListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['OpenCreatePlayingListRequest'])) {
            $model->openCreatePlayingListRequest = openCreatePlayingListRequest::fromMap($map['OpenCreatePlayingListRequest']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
