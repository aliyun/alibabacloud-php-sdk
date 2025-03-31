<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;

class RegisterCaCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $caContent;

    /**
     * @var string
     */
    public $caName;

    /**
     * @var string
     */
    public $mqttInstanceId;

    /**
     * @var string
     */
    public $verificationContent;
    protected $_name = [
        'caContent' => 'CaContent',
        'caName' => 'CaName',
        'mqttInstanceId' => 'MqttInstanceId',
        'verificationContent' => 'VerificationContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caContent) {
            $res['CaContent'] = $this->caContent;
        }

        if (null !== $this->caName) {
            $res['CaName'] = $this->caName;
        }

        if (null !== $this->mqttInstanceId) {
            $res['MqttInstanceId'] = $this->mqttInstanceId;
        }

        if (null !== $this->verificationContent) {
            $res['VerificationContent'] = $this->verificationContent;
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
        if (isset($map['CaContent'])) {
            $model->caContent = $map['CaContent'];
        }

        if (isset($map['CaName'])) {
            $model->caName = $map['CaName'];
        }

        if (isset($map['MqttInstanceId'])) {
            $model->mqttInstanceId = $map['MqttInstanceId'];
        }

        if (isset($map['VerificationContent'])) {
            $model->verificationContent = $map['VerificationContent'];
        }

        return $model;
    }
}
