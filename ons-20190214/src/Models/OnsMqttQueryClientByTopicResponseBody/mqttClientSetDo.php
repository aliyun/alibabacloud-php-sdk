<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByTopicResponseBody;

use AlibabaCloud\Tea\Model;

class mqttClientSetDo extends Model
{
    /**
     * @var int
     */
    public $onlineCount;
    protected $_name = [
        'onlineCount' => 'OnlineCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlineCount) {
            $res['OnlineCount'] = $this->onlineCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mqttClientSetDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnlineCount'])) {
            $model->onlineCount = $map['OnlineCount'];
        }

        return $model;
    }
}
