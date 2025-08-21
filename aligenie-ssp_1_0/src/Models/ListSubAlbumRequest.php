<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumRequest\querySubscriptionAlbumRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumRequest\userInfo;

class ListSubAlbumRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var querySubscriptionAlbumRequest
     */
    public $querySubscriptionAlbumRequest;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo' => 'DeviceInfo',
        'querySubscriptionAlbumRequest' => 'QuerySubscriptionAlbumRequest',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (null !== $this->querySubscriptionAlbumRequest) {
            $this->querySubscriptionAlbumRequest->validate();
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

        if (null !== $this->querySubscriptionAlbumRequest) {
            $res['QuerySubscriptionAlbumRequest'] = null !== $this->querySubscriptionAlbumRequest ? $this->querySubscriptionAlbumRequest->toArray($noStream) : $this->querySubscriptionAlbumRequest;
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

        if (isset($map['QuerySubscriptionAlbumRequest'])) {
            $model->querySubscriptionAlbumRequest = querySubscriptionAlbumRequest::fromMap($map['QuerySubscriptionAlbumRequest']);
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
