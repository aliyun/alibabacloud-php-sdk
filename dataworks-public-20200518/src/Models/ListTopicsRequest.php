<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListTopicsRequest extends Model
{
    /**
     * @var string
     */
    public $beginTime;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $instanceId;
    /**
     * @var int
     */
    public $nodeId;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $topicStatuses;
    /**
     * @var string
     */
    public $topicTypes;
    protected $_name = [
        'beginTime'     => 'BeginTime',
        'endTime'       => 'EndTime',
        'instanceId'    => 'InstanceId',
        'nodeId'        => 'NodeId',
        'owner'         => 'Owner',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'topicStatuses' => 'TopicStatuses',
        'topicTypes'    => 'TopicTypes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->topicStatuses) {
            $res['TopicStatuses'] = $this->topicStatuses;
        }

        if (null !== $this->topicTypes) {
            $res['TopicTypes'] = $this->topicTypes;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TopicStatuses'])) {
            $model->topicStatuses = $map['TopicStatuses'];
        }

        if (isset($map['TopicTypes'])) {
            $model->topicTypes = $map['TopicTypes'];
        }

        return $model;
    }
}
