<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The description of the event-triggered alert rule.
     *
     * @example Default group event rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The event pattern. This parameter describes the trigger conditions of an event.
     *
     * @var eventPattern
     */
    public $eventPattern;

    /**
     * @description The event type. Valid values:
     *
     *   SYSTEM: system event
     *   CUSTOM: custom event
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The ID of the application group.
     *
     * @example 3607****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the event-triggered alert rule.
     *
     * @example test_DefaultEventRule_7378****
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the event-triggered alert rule. Valid values:
     *
     *   ENABLED
     *   DISABLED
     *
     * @example ENABLED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'description'  => 'Description',
        'eventPattern' => 'EventPattern',
        'eventType'    => 'EventType',
        'groupId'      => 'GroupId',
        'name'         => 'Name',
        'state'        => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eventPattern) {
            $res['EventPattern'] = null !== $this->eventPattern ? $this->eventPattern->toMap() : null;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EventPattern'])) {
            $model->eventPattern = eventPattern::fromMap($map['EventPattern']);
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
