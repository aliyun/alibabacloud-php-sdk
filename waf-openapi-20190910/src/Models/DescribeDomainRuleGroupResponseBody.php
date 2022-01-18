<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRuleGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $ruleGroupId;

    /**
     * @var int
     */
    public $wafAiStatus;
    protected $_name = [
        'requestId'   => 'RequestId',
        'ruleGroupId' => 'RuleGroupId',
        'wafAiStatus' => 'WafAiStatus',
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
        if (null !== $this->ruleGroupId) {
            $res['RuleGroupId'] = $this->ruleGroupId;
        }
        if (null !== $this->wafAiStatus) {
            $res['WafAiStatus'] = $this->wafAiStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainRuleGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleGroupId'])) {
            $model->ruleGroupId = $map['RuleGroupId'];
        }
        if (isset($map['WafAiStatus'])) {
            $model->wafAiStatus = $map['WafAiStatus'];
        }

        return $model;
    }
}
