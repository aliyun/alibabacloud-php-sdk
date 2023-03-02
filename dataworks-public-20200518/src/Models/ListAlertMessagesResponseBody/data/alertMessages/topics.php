<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages;

use AlibabaCloud\Tea\Model;

class topics extends Model
{
    /**
     * @description The ID of the instance that triggered the event.
     *
     * @example 12345
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The ID of the node that triggered the event.
     *
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The ID of the event.
     *
     * @example 1234
     *
     * @var int
     */
    public $topicId;

    /**
     * @description The name of the event.
     *
     * @var string
     */
    public $topicName;

    /**
     * @description The ID of the Alibaba Cloud account used by the event owner.
     *
     * @example 9527952795****
     *
     * @var string
     */
    public $topicOwner;

    /**
     * @description The status of the event. Valid values: IGNORE, NEW, FIXING, and RECOVER. The value IGNORE indicates that the event is ignored. The value NEW indicates that the event is a new event. The value FIXING indicates that the event is being handled. The value RECOVER indicates that the event is handled.
     *
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
