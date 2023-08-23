<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumRequest\querySubscriptionAlbumRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumRequest\userInfo;
use AlibabaCloud\Tea\Model;

class ListSubAlbumRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @description request
     *
     * @var querySubscriptionAlbumRequest
     */
    public $querySubscriptionAlbumRequest;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo'                    => 'DeviceInfo',
        'querySubscriptionAlbumRequest' => 'QuerySubscriptionAlbumRequest',
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
        if (null !== $this->querySubscriptionAlbumRequest) {
            $res['QuerySubscriptionAlbumRequest'] = null !== $this->querySubscriptionAlbumRequest ? $this->querySubscriptionAlbumRequest->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubAlbumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['QuerySubscriptionAlbumRequest'])) {
            $model->querySubscriptionAlbumRequest = querySubscriptionAlbumRequest::fromMap($map['QuerySubscriptionAlbumRequest']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
