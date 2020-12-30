<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRuleGroupResponseBody extends Model
{
    /**
     * @var int
     */
    public $ruleGroupId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ruleGroupId' => 'RuleGroupId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleGroupId) {
            $res['RuleGroupId'] = $this->ruleGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RuleGroupId'])) {
            $model->ruleGroupId = $map['RuleGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
