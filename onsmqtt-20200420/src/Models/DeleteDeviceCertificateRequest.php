<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;

class DeleteDeviceCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $caSn;

    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var string
     */
    public $mqttInstanceId;
    protected $_name = [
        'caSn' => 'CaSn',
        'deviceSn' => 'DeviceSn',
        'mqttInstanceId' => 'MqttInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
