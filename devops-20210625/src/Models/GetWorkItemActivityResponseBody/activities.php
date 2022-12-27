<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody\activities\newValue;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody\activities\oldValue;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody\activities\property;
use AlibabaCloud\Tea\Model;

class activities extends Model
{
    /**
     * @example update
     *
     * @var string
     */
    public $actionType;

    /**
     * @example 3201131
     *
     * @var int
     */
    public $eventId;

    /**
     * @example 1640867079624
     *
     * @var int
     */
    public $eventTime;

    /**
     * @example workitem.updated
     *
     * @var string
     */
    public $eventType;

    /**
     * @var newValue[]
     */
    public $newValue;

    /**
     * @var oldValue[]
     */
    public $oldValue;

    /**
     * @example 19xx7043xxxxxxx914
     *
     * @var string
     */
    public $operator;

    /**
     * @example 3201132
     *
     * @var int
     */
    public $parentEventId;

    /**
     * @example public
     *
     * @var property
     */
    public $property;

    /**
     * @example e8bxxxxxxxxxxxxxxxx23
     *
     * @var string
     */
    public $resourceIdentifier;
    protected $_name = [
        'actionType'         => 'actionType',
        'eventId'            => 'eventId',
        'eventTime'          => 'eventTime',
        'eventType'          => 'eventType',
        'newValue'           => 'newValue',
        'oldValue'           => 'oldValue',
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
        if (null !== $this->newValue) {
            $res['newValue'] = [];
            if (null !== $this->newValue && \is_array($this->newValue)) {
                $n = 0;
                foreach ($this->newValue as $item) {
                    $res['newValue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->oldValue) {
            $res['oldValue'] = [];
            if (null !== $this->oldValue && \is_array($this->oldValue)) {
                $n = 0;
                foreach ($this->oldValue as $item) {
                    $res['oldValue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['newValue'])) {
            if (!empty($map['newValue'])) {
                $model->newValue = [];
                $n               = 0;
                foreach ($map['newValue'] as $item) {
                    $model->newValue[$n++] = null !== $item ? newValue::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['oldValue'])) {
            if (!empty($map['oldValue'])) {
                $model->oldValue = [];
                $n               = 0;
                foreach ($map['oldValue'] as $item) {
                    $model->oldValue[$n++] = null !== $item ? oldValue::fromMap($item) : $item;
                }
            }
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
