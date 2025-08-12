<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern;

class result extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var eventPattern
     */
    public $eventPattern;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'description' => 'Description',
        'eventPattern' => 'EventPattern',
        'eventType' => 'EventType',
        'groupId' => 'GroupId',
        'name' => 'Name',
        'state' => 'State',
    ];

    public function validate()
    {
        if (null !== $this->eventPattern) {
            $this->eventPattern->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eventPattern) {
            $res['EventPattern'] = null !== $this->eventPattern ? $this->eventPattern->toArray($noStream) : $this->eventPattern;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
