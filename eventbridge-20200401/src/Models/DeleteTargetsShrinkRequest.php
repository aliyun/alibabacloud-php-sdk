<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class DeleteTargetsShrinkRequest extends Model
{
    /**
     * @description The name of the event bus.
     *
     * This parameter is required.
     * @example MyEventBus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The name of the event rule.
     *
     * This parameter is required.
     * @example ramrolechange-mns
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The IDs of the event targets that you want to delete.
     *
     * @var string
     */
    public $targetIdsShrink;
    protected $_name = [
        'eventBusName'    => 'EventBusName',
        'ruleName'        => 'RuleName',
        'targetIdsShrink' => 'TargetIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->targetIdsShrink) {
            $res['TargetIds'] = $this->targetIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTargetsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['TargetIds'])) {
            $model->targetIdsShrink = $map['TargetIds'];
        }

        return $model;
    }
}
