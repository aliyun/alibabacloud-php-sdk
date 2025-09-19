<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSensitiveDefineRuleConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSensitiveDefineRuleConfigResponseBody\data\ruleTree;

class data extends Model
{
    /**
     * @var int
     */
    public $enableNewRule;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $ruleCount;

    /**
     * @var ruleTree[]
     */
    public $ruleTree;

    /**
     * @var int
     */
    public $selectedCount;
    protected $_name = [
        'enableNewRule' => 'EnableNewRule',
        'id' => 'Id',
        'ruleCount' => 'RuleCount',
        'ruleTree' => 'RuleTree',
        'selectedCount' => 'SelectedCount',
    ];

    public function validate()
    {
        if (\is_array($this->ruleTree)) {
            Model::validateArray($this->ruleTree);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableNewRule) {
            $res['EnableNewRule'] = $this->enableNewRule;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }

        if (null !== $this->ruleTree) {
            if (\is_array($this->ruleTree)) {
                $res['RuleTree'] = [];
                $n1 = 0;
                foreach ($this->ruleTree as $item1) {
                    $res['RuleTree'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->selectedCount) {
            $res['SelectedCount'] = $this->selectedCount;
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
        if (isset($map['EnableNewRule'])) {
            $model->enableNewRule = $map['EnableNewRule'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }

        if (isset($map['RuleTree'])) {
            if (!empty($map['RuleTree'])) {
                $model->ruleTree = [];
                $n1 = 0;
                foreach ($map['RuleTree'] as $item1) {
                    $model->ruleTree[$n1] = ruleTree::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SelectedCount'])) {
            $model->selectedCount = $map['SelectedCount'];
        }

        return $model;
    }
}
