<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class GetRegisterCodeRequest extends Model
{
    /**
     * @example post-cn-7mz2d******
     *
     * @var string
     */
    public $mqttInstanceId;
    protected $_name = [
        'mqttInstanceId' => 'MqttInstanceId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRegisterCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MqttInstanceId'])) {
            $model->mqttInstanceId = $map['MqttInstanceId'];
        }

        return $model;
    }
}
