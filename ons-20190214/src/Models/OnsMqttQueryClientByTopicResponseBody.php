<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByTopicResponseBody\mqttClientSetDo;
use AlibabaCloud\Tea\Model;

class OnsMqttQueryClientByTopicResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mqttClientSetDo
     */
    public $mqttClientSetDo;
    protected $_name = [
        'requestId'       => 'RequestId',
        'mqttClientSetDo' => 'MqttClientSetDo',
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
        if (null !== $this->mqttClientSetDo) {
            $res['MqttClientSetDo'] = null !== $this->mqttClientSetDo ? $this->mqttClientSetDo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsMqttQueryClientByTopicResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MqttClientSetDo'])) {
            $model->mqttClientSetDo = mqttClientSetDo::fromMap($map['MqttClientSetDo']);
        }

        return $model;
    }
}
