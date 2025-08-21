<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateContentRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateContentRequest\request;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateContentRequest\userInfo;

class ListCateContentRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var request
     */
    public $request;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo' => 'DeviceInfo',
        'request' => 'Request',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (null !== $this->request) {
            $this->request->validate();
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

        if (null !== $this->request) {
            $res['Request'] = null !== $this->request ? $this->request->toArray($noStream) : $this->request;
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

        if (isset($map['Request'])) {
            $model->request = request::fromMap($map['Request']);
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
