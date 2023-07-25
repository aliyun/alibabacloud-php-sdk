<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ActiveConfigRulesResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ActiveConfigRulesResponseBody\operateRuleResult\operateRuleItemList;
use AlibabaCloud\Tea\Model;

class operateRuleResult extends Model
{
    /**
     * @description The result information about the operation.
     *
     * @var operateRuleItemList[]
     */
    public $operateRuleItemList;
    protected $_name = [
        'operateRuleItemList' => 'OperateRuleItemList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateRuleItemList) {
            $res['OperateRuleItemList'] = [];
            if (null !== $this->operateRuleItemList && \is_array($this->operateRuleItemList)) {
                $n = 0;
                foreach ($this->operateRuleItemList as $item) {
                    $res['OperateRuleItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operateRuleResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateRuleItemList'])) {
            if (!empty($map['OperateRuleItemList'])) {
                $model->operateRuleItemList = [];
                $n                          = 0;
                foreach ($map['OperateRuleItemList'] as $item) {
                    $model->operateRuleItemList[$n++] = null !== $item ? operateRuleItemList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
