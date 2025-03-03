<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class DeleteTargetsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $eventBusName;
    /**
     * @var string
     */
    public $ruleName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
