<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class ClientUnbindDeviceRequest extends Model
{
    /**
     * @example dsdsf1
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 9185
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ClientUnbindDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
