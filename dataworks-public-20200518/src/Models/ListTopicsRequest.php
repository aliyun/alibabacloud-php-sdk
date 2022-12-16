<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListTopicsRequest extends Model
{
    /**
     * @example 2019-03-24T00:00:00+0800
     *
     * @var string
     */
    public $beginTime;

    /**
     * @example 2019-03-25T23:00:00+0800
     *
     * @var string
     */
    public $endTime;

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
     * @example 952795****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example IGNORE,NEW,FIXING,RECOVER
     *
     * @var string
     */
    public $topicStatuses;

    /**
     * @example ERROR,SLOW
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListTopicsRequest
     */
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
