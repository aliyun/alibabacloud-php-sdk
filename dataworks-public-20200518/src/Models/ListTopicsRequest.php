<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListTopicsRequest extends Model
{
    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-dd\\"T\\"HH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2019-03-24T00:00:00+0800
     *
     * @var string
     */
    public $beginTime;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-dd\\"T\\"HH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2019-03-25T23:00:00+0800
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the node instance that triggers the events. You can configure either this parameter or the NodeId parameter.
     *
     * @example 12345
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The ID of the node that triggers the events. You can configure either this parameter or the InstanceId parameter.
     *
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The ID of the Alibaba Cloud account used by the owner of the events.
     *
     * @example 952795****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The number of the page to return. Valid values: 1 to 30. Default value: 1.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the events. Valid values: IGNORE, NEW, FIXING, and RECOVER. The value IGNORE indicates that the events are ignored. The value NEW indicates that the events are new events. The value FIXING indicates that the events are being processed. The value RECOVER indicates that the events are processed. You can specify multiple states. Separate them with commas (,).
     *
     * @example IGNORE,NEW,FIXING,RECOVER
     *
     * @var string
     */
    public $topicStatuses;

    /**
     * @description The types of the events. Valid values: SLOW and ERROR. The value SLOW indicates that the running duration of the node in the current scheduling cycle is significantly longer than the average running duration of the node in previous scheduling cycles. The value ERROR indicates that the node fails to run. You can specify multiple types. Separate them with commas (,).
     *
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
