<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ModifySasContainerWebDefenseRuleRequest\pathConfDTOList;
use AlibabaCloud\Tea\Model;

class ModifySasContainerWebDefenseRuleRequest extends Model
{
    /**
     * @var pathConfDTOList[]
     */
    public $pathConfDTOList;

    /**
     * @example 200634
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example wwwwwww
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'pathConfDTOList' => 'PathConfDTOList',
        'ruleId'          => 'RuleId',
        'ruleName'        => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pathConfDTOList) {
            $res['PathConfDTOList'] = [];
            if (null !== $this->pathConfDTOList && \is_array($this->pathConfDTOList)) {
                $n = 0;
                foreach ($this->pathConfDTOList as $item) {
                    $res['PathConfDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ModifySasContainerWebDefenseRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PathConfDTOList'])) {
            if (!empty($map['PathConfDTOList'])) {
                $model->pathConfDTOList = [];
                $n                      = 0;
                foreach ($map['PathConfDTOList'] as $item) {
                    $model->pathConfDTOList[$n++] = null !== $item ? pathConfDTOList::fromMap($item) : $item;
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
