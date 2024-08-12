<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceOtaInfoTestRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $baseVersion;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'baseVersion' => 'BaseVersion',
        'deviceId'    => 'DeviceId',
        'model'       => 'Model',
        'tenantId'    => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseVersion) {
            $res['BaseVersion'] = $this->baseVersion;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceOtaInfoTestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseVersion'])) {
            $model->baseVersion = $map['BaseVersion'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
