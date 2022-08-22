<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAuthCodeBindForExtResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAuthCodeBindForExtResponseBody\result\deviceOpenInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAuthCodeBindForExtResponseBody\result\userOpenInfo;
use AlibabaCloud\Tea\Model;

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
        'userOpenInfo'   => 'UserOpenInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceOpenInfo) {
            $res['DeviceOpenInfo'] = null !== $this->deviceOpenInfo ? $this->deviceOpenInfo->toMap() : null;
        }
        if (null !== $this->userOpenInfo) {
            $res['UserOpenInfo'] = null !== $this->userOpenInfo ? $this->userOpenInfo->toMap() : null;
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
        if (isset($map['DeviceOpenInfo'])) {
            $model->deviceOpenInfo = deviceOpenInfo::fromMap($map['DeviceOpenInfo']);
        }
        if (isset($map['UserOpenInfo'])) {
            $model->userOpenInfo = userOpenInfo::fromMap($map['UserOpenInfo']);
        }

        return $model;
    }
}
