<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class SetSniConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $defaultCertificate;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $mqttInstanceId;

    /**
     * @var string
     */
    public $sniConfig;
    protected $_name = [
        'defaultCertificate' => 'DefaultCertificate',
        'mqttInstanceId'     => 'MqttInstanceId',
        'sniConfig'          => 'SniConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultCertificate) {
            $res['DefaultCertificate'] = $this->defaultCertificate;
        }
        if (null !== $this->mqttInstanceId) {
            $res['MqttInstanceId'] = $this->mqttInstanceId;
        }
        if (null !== $this->sniConfig) {
            $res['SniConfig'] = $this->sniConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSniConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultCertificate'])) {
            $model->defaultCertificate = $map['DefaultCertificate'];
        }
        if (isset($map['MqttInstanceId'])) {
            $model->mqttInstanceId = $map['MqttInstanceId'];
        }
        if (isset($map['SniConfig'])) {
            $model->sniConfig = $map['SniConfig'];
        }

        return $model;
    }
}
