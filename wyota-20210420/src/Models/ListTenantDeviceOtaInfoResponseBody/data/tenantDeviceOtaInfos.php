<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListTenantDeviceOtaInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class tenantDeviceOtaInfos extends Model
{
    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $model;
    protected $_name = [
        'currentVersion' => 'CurrentVersion',
        'deviceId'       => 'DeviceId',
        'model'          => 'Model',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantDeviceOtaInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        return $model;
    }
}
