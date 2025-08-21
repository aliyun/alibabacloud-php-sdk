<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddSubRequest\addSubscriptionInfoRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddSubRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddSubRequest\userInfo;

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
        'deviceInfo' => 'DeviceInfo',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (null !== $this->addSubscriptionInfoRequest) {
            $this->addSubscriptionInfoRequest->validate();
        }
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addSubscriptionInfoRequest) {
            $res['AddSubscriptionInfoRequest'] = null !== $this->addSubscriptionInfoRequest ? $this->addSubscriptionInfoRequest->toArray($noStream) : $this->addSubscriptionInfoRequest;
        }

        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toArray($noStream) : $this->deviceInfo;
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
