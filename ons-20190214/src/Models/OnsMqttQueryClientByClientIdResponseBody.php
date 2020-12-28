<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByClientIdResponseBody\mqttClientInfoDo;
use AlibabaCloud\Tea\Model;

class OnsMqttQueryClientByClientIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mqttClientInfoDo
     */
    public $mqttClientInfoDo;
    protected $_name = [
        'requestId'        => 'RequestId',
        'mqttClientInfoDo' => 'MqttClientInfoDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->mqttClientInfoDo) {
            $res['MqttClientInfoDo'] = null !== $this->mqttClientInfoDo ? $this->mqttClientInfoDo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsMqttQueryClientByClientIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MqttClientInfoDo'])) {
            $model->mqttClientInfoDo = mqttClientInfoDo::fromMap($map['MqttClientInfoDo']);
        }

        return $model;
    }
}
