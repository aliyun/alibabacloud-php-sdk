<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class DeleteTargetsRequest extends Model
{
    /**
     * @description The name of the event bus.
     *
     * @example MyEventBus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The name of the event rule.
     *
     * @example ramrolechange-mns
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The IDs of the event targets that you want to delete.
     *
     * @var string[]
     */
    public $targetIds;
    protected $_name = [
        'eventBusName' => 'EventBusName',
        'ruleName'     => 'RuleName',
        'targetIds'    => 'TargetIds',
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
        if (null !== $this->targetIds) {
            $res['TargetIds'] = $this->targetIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTargetsRequest
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
            if (!empty($map['TargetIds'])) {
                $model->targetIds = $map['TargetIds'];
            }
        }

        return $model;
    }
}
