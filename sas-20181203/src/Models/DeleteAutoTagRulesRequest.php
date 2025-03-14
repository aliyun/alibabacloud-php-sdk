<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteAutoTagRulesRequest extends Model
{
    /**
     * @description The ID of the asset auto-tagging rule. Separate multiple IDs with commas (,).
     *
     * >  You can call the [ListAutoTagRules](~~ListAutoTagRules~~) operation to query the ID.
     *
     * This parameter is required.
     *
     * @example 2331,56,5644
     *
     * @var string
     */
    public $ruleIdList;
    protected $_name = [
        'ruleIdList' => 'RuleIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleIdList) {
            $res['RuleIdList'] = $this->ruleIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAutoTagRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleIdList'])) {
            $model->ruleIdList = $map['RuleIdList'];
        }

        return $model;
    }
}
