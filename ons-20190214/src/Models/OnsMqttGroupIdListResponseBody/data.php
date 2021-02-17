<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttGroupIdListResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttGroupIdListResponseBody\data\mqttGroupIdDo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mqttGroupIdDo[]
     */
    public $mqttGroupIdDo;
    protected $_name = [
        'mqttGroupIdDo' => 'MqttGroupIdDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mqttGroupIdDo) {
            $res['MqttGroupIdDo'] = [];
            if (null !== $this->mqttGroupIdDo && \is_array($this->mqttGroupIdDo)) {
                $n = 0;
                foreach ($this->mqttGroupIdDo as $item) {
                    $res['MqttGroupIdDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MqttGroupIdDo'])) {
            if (!empty($map['MqttGroupIdDo'])) {
                $model->mqttGroupIdDo = [];
                $n                    = 0;
                foreach ($map['MqttGroupIdDo'] as $item) {
                    $model->mqttGroupIdDo[$n++] = null !== $item ? mqttGroupIdDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
