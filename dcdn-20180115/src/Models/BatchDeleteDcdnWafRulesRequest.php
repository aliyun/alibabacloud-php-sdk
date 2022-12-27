<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteDcdnWafRulesRequest extends Model
{
    /**
     * @example 20000001,20000002
     *
     * @var string
     */
    public $ruleIds;
    protected $_name = [
        'ruleIds' => 'RuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteDcdnWafRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleIds'])) {
            $model->ruleIds = $map['RuleIds'];
        }

        return $model;
    }
}
