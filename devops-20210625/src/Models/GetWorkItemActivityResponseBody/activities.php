<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody\activities\newValue;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody\activities\oldValue;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody\activities\property;

class activities extends Model
{
    /**
     * @var string
     */
    public $actionType;
    /**
     * @var int
     */
    public $eventId;
    /**
     * @var int
     */
    public $eventTime;
    /**
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
     * @var string
     */
    public $operator;
    /**
     * @var int
     */
    public $parentEventId;
    /**
     * @var property
     */
    public $property;
    /**
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
        if (\is_array($this->newValue)) {
            Model::validateArray($this->newValue);
        }
        if (\is_array($this->oldValue)) {
            Model::validateArray($this->oldValue);
        }
        if (null !== $this->property) {
            $this->property->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->newValue)) {
                $res['newValue'] = [];
                $n1              = 0;
                foreach ($this->newValue as $item1) {
                    $res['newValue'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->oldValue) {
            if (\is_array($this->oldValue)) {
                $res['oldValue'] = [];
                $n1              = 0;
                foreach ($this->oldValue as $item1) {
                    $res['oldValue'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['property'] = null !== $this->property ? $this->property->toArray($noStream) : $this->property;
        }

        if (null !== $this->resourceIdentifier) {
            $res['resourceIdentifier'] = $this->resourceIdentifier;
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
                $n1              = 0;
                foreach ($map['newValue'] as $item1) {
                    $model->newValue[$n1++] = newValue::fromMap($item1);
                }
            }
        }

        if (isset($map['oldValue'])) {
            if (!empty($map['oldValue'])) {
                $model->oldValue = [];
                $n1              = 0;
                foreach ($map['oldValue'] as $item1) {
                    $model->oldValue[$n1++] = oldValue::fromMap($item1);
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
