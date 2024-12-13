<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceCertificateRequest extends Model
{
    /**
     * @description The SN serial number of the CA certificate to which the device certificate to be queried belongs, used to uniquely identify a CA certificate. Value range: no more than 128 bytes.
     *
     * This parameter is required.
     * @example 007269004887******
     *
     * @var string
     */
    public $caSn;

    /**
     * @description The SN serial number of the device certificate to be queried, used to uniquely identify a device certificate. Value range: no more than 128 bytes.
     *
     * This parameter is required.
     * @example 356217374433******
     *
     * @var string
     */
    public $deviceSn;

    /**
     * @description The instance ID to which the device certificate is bound, i.e., the instance ID of the Cloud Message Queue MQTT version.
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
     * @return GetDeviceCertificateRequest
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
