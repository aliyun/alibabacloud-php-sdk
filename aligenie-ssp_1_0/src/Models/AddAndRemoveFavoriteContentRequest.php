<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentRequest\openAddAndRemoveFavoriteContentRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentRequest\userInfo;

class AddAndRemoveFavoriteContentRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var openAddAndRemoveFavoriteContentRequest
     */
    public $openAddAndRemoveFavoriteContentRequest;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo' => 'DeviceInfo',
        'openAddAndRemoveFavoriteContentRequest' => 'OpenAddAndRemoveFavoriteContentRequest',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (null !== $this->openAddAndRemoveFavoriteContentRequest) {
            $this->openAddAndRemoveFavoriteContentRequest->validate();
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

        if (null !== $this->openAddAndRemoveFavoriteContentRequest) {
            $res['OpenAddAndRemoveFavoriteContentRequest'] = null !== $this->openAddAndRemoveFavoriteContentRequest ? $this->openAddAndRemoveFavoriteContentRequest->toArray($noStream) : $this->openAddAndRemoveFavoriteContentRequest;
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

        if (isset($map['OpenAddAndRemoveFavoriteContentRequest'])) {
            $model->openAddAndRemoveFavoriteContentRequest = openAddAndRemoveFavoriteContentRequest::fromMap($map['OpenAddAndRemoveFavoriteContentRequest']);
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
