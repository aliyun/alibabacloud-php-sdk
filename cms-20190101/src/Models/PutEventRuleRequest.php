<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleRequest\eventPattern;
use AlibabaCloud\Tea\Model;

class PutEventRuleRequest extends Model
{
    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $state;

    /**
     * @var eventPattern[]
     */
    public $eventPattern;
    protected $_name = [
        'ruleName'     => 'RuleName',
        'groupId'      => 'GroupId',
        'eventType'    => 'EventType',
        'description'  => 'Description',
        'state'        => 'State',
        'eventPattern' => 'EventPattern',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->eventPattern) {
            $res['EventPattern'] = [];
            if (null !== $this->eventPattern && \is_array($this->eventPattern)) {
                $n = 0;
                foreach ($this->eventPattern as $item) {
                    $res['EventPattern'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutEventRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['EventPattern'])) {
            if (!empty($map['EventPattern'])) {
                $model->eventPattern = [];
                $n                   = 0;
                foreach ($map['EventPattern'] as $item) {
                    $model->eventPattern[$n++] = null !== $item ? eventPattern::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
