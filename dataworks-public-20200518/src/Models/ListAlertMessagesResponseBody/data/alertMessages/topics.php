<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages;

use AlibabaCloud\Tea\Model;

class topics extends Model
{
    /**
     * @example 12345
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @example 1234
     *
     * @var int
     */
    public $topicId;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @example 9527952795****
     *
     * @var string
     */
    public $topicOwner;

    /**
     * @example FIXING
     *
     * @var string
     */
    public $topicStatus;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'nodeId'      => 'NodeId',
        'topicId'     => 'TopicId',
        'topicName'   => 'TopicName',
        'topicOwner'  => 'TopicOwner',
        'topicStatus' => 'TopicStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }
        if (null !== $this->topicOwner) {
            $res['TopicOwner'] = $this->topicOwner;
        }
        if (null !== $this->topicStatus) {
            $res['TopicStatus'] = $this->topicStatus;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }
        if (isset($map['TopicOwner'])) {
            $model->topicOwner = $map['TopicOwner'];
        }
        if (isset($map['TopicStatus'])) {
            $model->topicStatus = $map['TopicStatus'];
        }

        return $model;
    }
}
