<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponse\data\alertMessages;

use AlibabaCloud\Tea\Model;

class topics extends Model
{
    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $topicId;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $topicOwner;

    /**
     * @var string
     */
    public $topicStatus;
    protected $_name = [
        'nodeId'      => 'NodeId',
        'instanceId'  => 'InstanceId',
        'topicId'     => 'TopicId',
        'topicName'   => 'TopicName',
        'topicOwner'  => 'TopicOwner',
        'topicStatus' => 'TopicStatus',
    ];

    public function validate()
    {
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('topicId', $this->topicId, true);
        Model::validateRequired('topicName', $this->topicName, true);
        Model::validateRequired('topicOwner', $this->topicOwner, true);
        Model::validateRequired('topicStatus', $this->topicStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
        if (isset($map['TopicOwner'])) {
            $model->topicOwner = $map['TopicOwner'];
        }
        if (isset($map['TopicStatus'])) {
            $model->topicStatus = $map['TopicStatus'];
        }

        return $model;
    }
}
