<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsMqttQueryClientByTopicRequest extends Model
{
    /**
     * @var string
     */
    public $parentTopic;

    /**
     * @var string
     */
    public $subTopic;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'parentTopic' => 'ParentTopic',
        'subTopic'    => 'SubTopic',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentTopic) {
            $res['ParentTopic'] = $this->parentTopic;
        }
        if (null !== $this->subTopic) {
            $res['SubTopic'] = $this->subTopic;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsMqttQueryClientByTopicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentTopic'])) {
            $model->parentTopic = $map['ParentTopic'];
        }
        if (isset($map['SubTopic'])) {
            $model->subTopic = $map['SubTopic'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
