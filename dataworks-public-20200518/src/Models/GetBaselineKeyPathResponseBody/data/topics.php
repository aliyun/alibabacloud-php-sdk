<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody\data;

use AlibabaCloud\Tea\Model;

class topics extends Model
{
    /**
     * @example 1553531401000
     *
     * @var int
     */
    public $addTime;

    /**
     * @example 1234
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example 1234
     *
     * @var int
     */
    public $topicId;

    /**
     * @example 1234
     *
     * @var string
     */
    public $topicName;
    protected $_name = [
        'addTime'    => 'AddTime',
        'instanceId' => 'InstanceId',
        'topicId'    => 'TopicId',
        'topicName'  => 'TopicName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
