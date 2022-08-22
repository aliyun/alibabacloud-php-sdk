<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddSubRequest\addSubscriptionInfoRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddSubRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddSubRequest\userInfo;
use AlibabaCloud\Tea\Model;

class AddSubRequest extends Model
{
    /**
     * @var addSubscriptionInfoRequest
     */
    public $addSubscriptionInfoRequest;

    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'addSubscriptionInfoRequest' => 'AddSubscriptionInfoRequest',
        'deviceInfo'                 => 'DeviceInfo',
        'userInfo'                   => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addSubscriptionInfoRequest) {
            $res['AddSubscriptionInfoRequest'] = null !== $this->addSubscriptionInfoRequest ? $this->addSubscriptionInfoRequest->toMap() : null;
        }
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSubRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddSubscriptionInfoRequest'])) {
            $model->addSubscriptionInfoRequest = addSubscriptionInfoRequest::fromMap($map['AddSubscriptionInfoRequest']);
        }
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
