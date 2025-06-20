<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\DetachConfigRuleToCompliancePackResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachConfigRuleToCompliancePackResponseBody\operateRuleResult\operateRuleItemList;

class operateRuleResult extends Model
{
    /**
     * @var operateRuleItemList[]
     */
    public $operateRuleItemList;
    protected $_name = [
        'operateRuleItemList' => 'OperateRuleItemList',
    ];

    public function validate()
    {
        if (\is_array($this->operateRuleItemList)) {
            Model::validateArray($this->operateRuleItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operateRuleItemList) {
            if (\is_array($this->operateRuleItemList)) {
                $res['OperateRuleItemList'] = [];
                $n1 = 0;
                foreach ($this->operateRuleItemList as $item1) {
                    $res['OperateRuleItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['OperateRuleItemList'])) {
            if (!empty($map['OperateRuleItemList'])) {
                $model->operateRuleItemList = [];
                $n1 = 0;
                foreach ($map['OperateRuleItemList'] as $item1) {
                    $model->operateRuleItemList[$n1] = operateRuleItemList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
