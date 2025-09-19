<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifySasContainerWebDefenseRuleRequest\pathConfDTOList;

class ModifySasContainerWebDefenseRuleRequest extends Model
{
    /**
     * @var pathConfDTOList[]
     */
    public $pathConfDTOList;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'pathConfDTOList' => 'PathConfDTOList',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
        if (\is_array($this->pathConfDTOList)) {
            Model::validateArray($this->pathConfDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pathConfDTOList) {
            if (\is_array($this->pathConfDTOList)) {
                $res['PathConfDTOList'] = [];
                $n1 = 0;
                foreach ($this->pathConfDTOList as $item1) {
                    $res['PathConfDTOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['PathConfDTOList'])) {
            if (!empty($map['PathConfDTOList'])) {
                $model->pathConfDTOList = [];
                $n1 = 0;
                foreach ($map['PathConfDTOList'] as $item1) {
                    $model->pathConfDTOList[$n1] = pathConfDTOList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
