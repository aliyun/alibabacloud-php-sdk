<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteContainerDefenseRuleRequest extends Model
{
    /**
     * @var int[]
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
     * @return DeleteContainerDefenseRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = $map['RuleIds'];
            }
        }

        return $model;
    }
}
