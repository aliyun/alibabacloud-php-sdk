<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ActivateEdgeMobileAgentRequest extends Model
{
    /**
     * @var string
     */
    public $deviceClass;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceMeta;

    /**
     * @var string
     */
    public $licenseKey;
    protected $_name = [
        'deviceClass' => 'DeviceClass',
        'deviceId' => 'DeviceId',
        'deviceMeta' => 'DeviceMeta',
        'licenseKey' => 'LicenseKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceClass) {
            $res['DeviceClass'] = $this->deviceClass;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->deviceMeta) {
            $res['DeviceMeta'] = $this->deviceMeta;
        }

        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
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
        if (isset($map['DeviceClass'])) {
            $model->deviceClass = $map['DeviceClass'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['DeviceMeta'])) {
            $model->deviceMeta = $map['DeviceMeta'];
        }

        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
        }

        return $model;
    }
}
