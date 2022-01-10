<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody\activities\property;
use AlibabaCloud\Tea\Model;

class activities extends Model
{
    /**
     * @description 动作类型
     *
     * @var string
     */
    public $actionType;

    /**
     * @description 事件id
     *
     * @var int
     */
    public $eventId;

    /**
     * @description 事件时间
     *
     * @var int
     */
    public $eventTime;

    /**
     * @description 事件类型
     *
     * @var string
     */
    public $eventType;

    /**
     * @description 操作者
     *
     * @var string
     */
    public $operator;

    /**
     * @description 父事件id
     *
     * @var int
     */
    public $parentEventId;

    /**
     * @description 修改属性
     *
     * @var property
     */
    public $property;

    /**
     * @description 操作对象
     *
     * @var string
     */
    public $resourceIdentifier;
    protected $_name = [
        'actionType'         => 'actionType',
        'eventId'            => 'eventId',
        'eventTime'          => 'eventTime',
        'eventType'          => 'eventType',
        'operator'           => 'operator',
        'parentEventId'      => 'parentEventId',
        'property'           => 'property',
        'resourceIdentifier' => 'resourceIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['actionType'] = $this->actionType;
        }
        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }
        if (null !== $this->eventTime) {
            $res['eventTime'] = $this->eventTime;
        }
        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->parentEventId) {
            $res['parentEventId'] = $this->parentEventId;
        }
        if (null !== $this->property) {
            $res['property'] = null !== $this->property ? $this->property->toMap() : null;
        }
        if (null !== $this->resourceIdentifier) {
            $res['resourceIdentifier'] = $this->resourceIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actionType'])) {
            $model->actionType = $map['actionType'];
        }
        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }
        if (isset($map['eventTime'])) {
            $model->eventTime = $map['eventTime'];
        }
        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }
        if (isset($map['parentEventId'])) {
            $model->parentEventId = $map['parentEventId'];
        }
        if (isset($map['property'])) {
            $model->property = property::fromMap($map['property']);
        }
        if (isset($map['resourceIdentifier'])) {
            $model->resourceIdentifier = $map['resourceIdentifier'];
        }

        return $model;
    }
}
