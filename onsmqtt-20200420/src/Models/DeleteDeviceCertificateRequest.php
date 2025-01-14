<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class DeleteDeviceCertificateRequest extends Model
{
    /**
     * @description The serial number of the CA certificate to which the device certificate belongs. The serial number is the unique identifier of a CA certificate. CA certificates are used to validate device certificates.
     *
     * This parameter is required.
     * @example 007269004887******
     *
     * @var string
     */
    public $caSn;

    /**
     * @description The serial number of the device certificate whose registration information you want to delete. The serial number is the unique identifier of a device.
     *
     * This parameter is required.
     * @example 356217374433****
     *
     * @var string
     */
    public $deviceSn;

    /**
     * @description The ID of the ApsaraMQ for MQTT instance to which the device certificate is bound.
     *
     * This parameter is required.
     * @example post-cn-7mz2d******
     *
     * @var string
     */
    public $mqttInstanceId;
    protected $_name = [
        'caSn'           => 'CaSn',
        'deviceSn'       => 'DeviceSn',
        'mqttInstanceId' => 'MqttInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caSn) {
            $res['CaSn'] = $this->caSn;
        }
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->mqttInstanceId) {
            $res['MqttInstanceId'] = $this->mqttInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDeviceCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaSn'])) {
            $model->caSn = $map['CaSn'];
        }
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['MqttInstanceId'])) {
            $model->mqttInstanceId = $map['MqttInstanceId'];
        }

        return $model;
    }
}
