<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByClientIdResponseBody\mqttClientInfoDo\subScriptonData;

use AlibabaCloud\Tea\Model;

class subscriptionDo extends Model
{
    /**
     * @var string
     */
    public $subTopic;

    /**
     * @var string
     */
    public $parentTopic;

    /**
     * @var int
     */
    public $qos;
    protected $_name = [
        'subTopic'    => 'SubTopic',
        'parentTopic' => 'ParentTopic',
        'qos'         => 'Qos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subTopic) {
            $res['SubTopic'] = $this->subTopic;
        }
        if (null !== $this->parentTopic) {
            $res['ParentTopic'] = $this->parentTopic;
        }
        if (null !== $this->qos) {
            $res['Qos'] = $this->qos;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubTopic'])) {
            $model->subTopic = $map['SubTopic'];
        }
        if (isset($map['ParentTopic'])) {
            $model->parentTopic = $map['ParentTopic'];
        }
        if (isset($map['Qos'])) {
            $model->qos = $map['Qos'];
        }

        return $model;
    }
}
