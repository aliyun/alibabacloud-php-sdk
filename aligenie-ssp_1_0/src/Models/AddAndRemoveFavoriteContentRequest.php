<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentRequest\openAddAndRemoveFavoriteContentRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentRequest\userInfo;
use AlibabaCloud\Tea\Model;

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
        'deviceInfo'                             => 'DeviceInfo',
        'openAddAndRemoveFavoriteContentRequest' => 'OpenAddAndRemoveFavoriteContentRequest',
        'userInfo'                               => 'UserInfo',
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
        if (null !== $this->openAddAndRemoveFavoriteContentRequest) {
            $res['OpenAddAndRemoveFavoriteContentRequest'] = null !== $this->openAddAndRemoveFavoriteContentRequest ? $this->openAddAndRemoveFavoriteContentRequest->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAndRemoveFavoriteContentRequest
     */
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
