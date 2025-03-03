<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateAutoGroupingRuleRequest;

use AlibabaCloud\Dara\Model;

class ruleContents extends Model
{
    /**
     * @var string
     */
    public $autoGroupingScopeCondition;
    /**
     * @var string
     */
    public $targetResourceGroupCondition;
    protected $_name = [
        'autoGroupingScopeCondition'   => 'AutoGroupingScopeCondition',
        'targetResourceGroupCondition' => 'TargetResourceGroupCondition',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoGroupingScopeCondition) {
            $res['AutoGroupingScopeCondition'] = $this->autoGroupingScopeCondition;
        }

        if (null !== $this->targetResourceGroupCondition) {
            $res['TargetResourceGroupCondition'] = $this->targetResourceGroupCondition;
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
        if (isset($map['AutoGroupingScopeCondition'])) {
            $model->autoGroupingScopeCondition = $map['AutoGroupingScopeCondition'];
        }

        if (isset($map['TargetResourceGroupCondition'])) {
            $model->targetResourceGroupCondition = $map['TargetResourceGroupCondition'];
        }

        return $model;
    }
}
