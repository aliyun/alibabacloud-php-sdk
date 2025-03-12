<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetInterceptionRuleDetailRequest extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * This parameter is required.
     * @example c7f60fdabc84xxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the rule.
     *
     * This parameter is required.
     * @example 500002
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'ruleId'    => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInterceptionRuleDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
