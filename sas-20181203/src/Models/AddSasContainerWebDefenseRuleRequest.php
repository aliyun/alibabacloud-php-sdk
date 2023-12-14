<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\AddSasContainerWebDefenseRuleRequest\pathConfDTOList;
use AlibabaCloud\Tea\Model;

class AddSasContainerWebDefenseRuleRequest extends Model
{
    /**
     * @description The paths that you want to protect.
     *
     * @var pathConfDTOList[]
     */
    public $pathConfDTOList;

    /**
     * @description The name of the rule.
     *
     * @example test-2020
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'pathConfDTOList' => 'PathConfDTOList',
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
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSasContainerWebDefenseRuleRequest
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
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
