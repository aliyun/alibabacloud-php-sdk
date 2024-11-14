<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class CreateDefenseRuleResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 26E46541-7AAB-5565-801D-F14DBDC5F186
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The IDs of the protection rules. Multiple IDs are separated by commas (,).
     *
     * @example 22215,23354,462165
     *
     * @var string
     */
    public $ruleIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleIds'   => 'RuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDefenseRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = $map['RuleIds'];
        }

        return $model;
    }
}
