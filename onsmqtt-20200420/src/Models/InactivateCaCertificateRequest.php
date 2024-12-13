<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class InactivateCaCertificateRequest extends Model
{
    /**
     * @description The ID of the ApsaraMQ for MQTT instance to which the CA certificate is bound.
     *
     * This parameter is required.
     * @example post-cn-7mz2d******
     *
     * @var string
     */
    public $mqttInstanceId;

    /**
     * @description The serial number of the CA certificate that you want to deregister. The serial number is the unique identifier of a CA certificate.
     *
     * This parameter is required.
     * @example 007269004887******
     *
     * @var string
     */
    public $sn;
    protected $_name = [
        'mqttInstanceId' => 'MqttInstanceId',
        'sn'             => 'Sn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mqttInstanceId) {
            $res['MqttInstanceId'] = $this->mqttInstanceId;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InactivateCaCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MqttInstanceId'])) {
            $model->mqttInstanceId = $map['MqttInstanceId'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        return $model;
    }
}
