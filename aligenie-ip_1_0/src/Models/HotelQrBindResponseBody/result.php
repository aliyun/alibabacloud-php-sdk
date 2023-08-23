<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\HotelQrBindResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\HotelQrBindResponseBody\result\openDeviceInfo;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\HotelQrBindResponseBody\result\openUserInfo;
use AlibabaCloud\Tea\Model;

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
        'openUserInfo'   => 'OpenUserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openDeviceInfo) {
            $res['OpenDeviceInfo'] = null !== $this->openDeviceInfo ? $this->openDeviceInfo->toMap() : null;
        }
        if (null !== $this->openUserInfo) {
            $res['OpenUserInfo'] = null !== $this->openUserInfo ? $this->openUserInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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
