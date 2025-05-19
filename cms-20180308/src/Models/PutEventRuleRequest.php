<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventRuleRequest\eventPattern;

class PutEventRuleRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var eventPattern[]
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
    public $regionId;

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
        'regionId' => 'RegionId',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->eventPattern)) {
            Model::validateArray($this->eventPattern);
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
            if (\is_array($this->eventPattern)) {
                $res['EventPattern'] = [];
                $n1 = 0;
                foreach ($this->eventPattern as $item1) {
                    $res['EventPattern'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
            if (!empty($map['EventPattern'])) {
                $model->eventPattern = [];
                $n1 = 0;
                foreach ($map['EventPattern'] as $item1) {
                    $model->eventPattern[$n1++] = eventPattern::fromMap($item1);
                }
            }
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
