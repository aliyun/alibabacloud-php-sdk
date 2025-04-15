<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class DeleteTargetsRequest extends Model
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
     * @var string[]
     */
    public $targetIds;
    protected $_name = [
        'eventBusName' => 'EventBusName',
        'ruleName' => 'RuleName',
        'targetIds' => 'TargetIds',
    ];

    public function validate()
    {
        if (\is_array($this->targetIds)) {
            Model::validateArray($this->targetIds);
        }
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

        if (null !== $this->targetIds) {
            if (\is_array($this->targetIds)) {
                $res['TargetIds'] = [];
                $n1 = 0;
                foreach ($this->targetIds as $item1) {
                    $res['TargetIds'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['TargetIds'])) {
                $model->targetIds = [];
                $n1 = 0;
                foreach ($map['TargetIds'] as $item1) {
                    $model->targetIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
