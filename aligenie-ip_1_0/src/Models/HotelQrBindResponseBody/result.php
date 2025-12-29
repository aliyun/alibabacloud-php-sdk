<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\HotelQrBindResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\HotelQrBindResponseBody\result\openDeviceInfo;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\HotelQrBindResponseBody\result\openUserInfo;

class result extends Model
{
    /**
     * @var openDeviceInfo
     */
    public $openDeviceInfo;

    /**
     * @var openUserInfo
     */
    public $openUserInfo;
    protected $_name = [
        'openDeviceInfo' => 'OpenDeviceInfo',
        'openUserInfo' => 'OpenUserInfo',
    ];

    public function validate()
    {
        if (null !== $this->openDeviceInfo) {
            $this->openDeviceInfo->validate();
        }
        if (null !== $this->openUserInfo) {
            $this->openUserInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openDeviceInfo) {
            $res['OpenDeviceInfo'] = null !== $this->openDeviceInfo ? $this->openDeviceInfo->toArray($noStream) : $this->openDeviceInfo;
        }

        if (null !== $this->openUserInfo) {
            $res['OpenUserInfo'] = null !== $this->openUserInfo ? $this->openUserInfo->toArray($noStream) : $this->openUserInfo;
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
        if (isset($map['OpenDeviceInfo'])) {
            $model->openDeviceInfo = openDeviceInfo::fromMap($map['OpenDeviceInfo']);
        }

        if (isset($map['OpenUserInfo'])) {
            $model->openUserInfo = openUserInfo::fromMap($map['OpenUserInfo']);
        }

        return $model;
    }
}
