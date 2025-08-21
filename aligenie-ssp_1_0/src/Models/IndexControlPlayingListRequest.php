<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\IndexControlPlayingListRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\IndexControlPlayingListRequest\openIndexControlRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\IndexControlPlayingListRequest\userInfo;

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
        'deviceInfo' => 'DeviceInfo',
        'openIndexControlRequest' => 'OpenIndexControlRequest',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (null !== $this->openIndexControlRequest) {
            $this->openIndexControlRequest->validate();
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

        if (null !== $this->openIndexControlRequest) {
            $res['OpenIndexControlRequest'] = null !== $this->openIndexControlRequest ? $this->openIndexControlRequest->toArray($noStream) : $this->openIndexControlRequest;
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

        if (isset($map['OpenIndexControlRequest'])) {
            $model->openIndexControlRequest = openIndexControlRequest::fromMap($map['OpenIndexControlRequest']);
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
