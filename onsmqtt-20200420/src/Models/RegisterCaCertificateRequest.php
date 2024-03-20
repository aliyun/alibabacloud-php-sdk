<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class RegisterCaCertificateRequest extends Model
{
    /**
     * @example -----BEGIN CERTIFICATE-----\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\n-----END CERTIFICATE-----
     *
     * @var string
     */
    public $caContent;

    /**
     * @example mqtt_ca
     *
     * @var string
     */
    public $caName;

    /**
     * @example post-cn-7mz2d******
     *
     * @var string
     */
    public $mqttInstanceId;

    /**
     * @example -----BEGIN CERTIFICATE-----\nMIID/DCCAu+Y5sRMpp9tnd+4s******\n-----END CERTIFICATE-----
     *
     * @var string
     */
    public $verificationContent;
    protected $_name = [
        'caContent'           => 'CaContent',
        'caName'              => 'CaName',
        'mqttInstanceId'      => 'MqttInstanceId',
        'verificationContent' => 'VerificationContent',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RegisterCaCertificateRequest
     */
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
