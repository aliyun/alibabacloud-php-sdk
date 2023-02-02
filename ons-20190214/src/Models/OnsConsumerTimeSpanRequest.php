<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsConsumerTimeSpanRequest extends Model
{
    /**
     * @description The ID of the consumer group whose reset time range you want to query.
     *
     * @example GID_test_group_id
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the instance to which the consumer group belongs.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The topic to which the consumer group subscribes.
     *
     * @example test-mq_topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'groupId'    => 'GroupId',
        'instanceId' => 'InstanceId',
        'topic'      => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsConsumerTimeSpanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
