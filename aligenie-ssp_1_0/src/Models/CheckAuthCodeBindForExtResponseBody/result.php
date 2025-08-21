<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAuthCodeBindForExtResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAuthCodeBindForExtResponseBody\result\deviceOpenInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAuthCodeBindForExtResponseBody\result\userOpenInfo;

class result extends Model
{
    /**
     * @var deviceOpenInfo
     */
    public $deviceOpenInfo;

    /**
     * @var userOpenInfo
     */
    public $userOpenInfo;
    protected $_name = [
        'deviceOpenInfo' => 'DeviceOpenInfo',
        'userOpenInfo' => 'UserOpenInfo',
    ];

    public function validate()
    {
        if (null !== $this->deviceOpenInfo) {
            $this->deviceOpenInfo->validate();
        }
        if (null !== $this->userOpenInfo) {
            $this->userOpenInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceOpenInfo) {
            $res['DeviceOpenInfo'] = null !== $this->deviceOpenInfo ? $this->deviceOpenInfo->toArray($noStream) : $this->deviceOpenInfo;
        }

        if (null !== $this->userOpenInfo) {
            $res['UserOpenInfo'] = null !== $this->userOpenInfo ? $this->userOpenInfo->toArray($noStream) : $this->userOpenInfo;
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
        if (isset($map['DeviceOpenInfo'])) {
            $model->deviceOpenInfo = deviceOpenInfo::fromMap($map['DeviceOpenInfo']);
        }

        if (isset($map['UserOpenInfo'])) {
            $model->userOpenInfo = userOpenInfo::fromMap($map['UserOpenInfo']);
        }

        return $model;
    }
}
