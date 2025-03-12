<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetSasContainerWebDefenseRuleRequest extends Model
{
    /**
     * @description Rule ID.
     * > You can call the [ListSasContainerWebDefenseRule](~~ListSasContainerWebDefenseRule~~) API to get this parameter.
     * @example 1600009
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSasContainerWebDefenseRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
