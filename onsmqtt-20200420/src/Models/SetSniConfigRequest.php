<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;

class SetSniConfigRequest extends Model
{
    /**
     * @var string
     */
    public $defaultCertificate;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
