<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules\hit;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules\ruleInfoBase;

class rules extends Model
{
    /**
     * @var hit[]
     */
    public $hit;
    /**
     * @var string
     */
    public $rid;
    /**
     * @var ruleInfoBase
     */
    public $ruleInfoBase;
    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'hit'          => 'Hit',
        'rid'          => 'Rid',
        'ruleInfoBase' => 'RuleInfoBase',
        'ruleName'     => 'RuleName',
    ];

    public function validate()
    {
        if (\is_array($this->hit)) {
            Model::validateArray($this->hit);
        }
        if (null !== $this->ruleInfoBase) {
            $this->ruleInfoBase->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hit) {
            if (\is_array($this->hit)) {
                $res['Hit'] = [];
                $n1         = 0;
                foreach ($this->hit as $item1) {
                    $res['Hit'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        if (null !== $this->ruleInfoBase) {
            $res['RuleInfoBase'] = null !== $this->ruleInfoBase ? $this->ruleInfoBase->toArray($noStream) : $this->ruleInfoBase;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['Hit'])) {
            if (!empty($map['Hit'])) {
                $model->hit = [];
                $n1         = 0;
                foreach ($map['Hit'] as $item1) {
                    $model->hit[$n1++] = hit::fromMap($item1);
                }
            }
        }

        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        if (isset($map['RuleInfoBase'])) {
            $model->ruleInfoBase = ruleInfoBase::fromMap($map['RuleInfoBase']);
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
