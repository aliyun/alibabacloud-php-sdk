<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class GetCaCertificateRequest extends Model
{
    /**
     * @description The instance ID bound to the CA certificate, which is the instance ID of the MQTT version of the cloud message queue.
     *
     * This parameter is required.
     * @example post-cn-7mz2d******
     *
     * @var string
     */
    public $mqttInstanceId;

    /**
     * @description The SN serial number of the CA certificate to be queried, used to uniquely identify a CA certificate.
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
     * @return GetCaCertificateRequest
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
