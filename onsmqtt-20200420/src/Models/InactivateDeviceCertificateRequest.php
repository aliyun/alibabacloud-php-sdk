<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class InactivateDeviceCertificateRequest extends Model
{
    /**
     * @example 007269004887******
     *
     * @var string
     */
    public $caSn;

    /**
     * @example 356217374433******
     *
     * @var string
     */
    public $deviceSn;

    /**
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
     * @return InactivateDeviceCertificateRequest
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
