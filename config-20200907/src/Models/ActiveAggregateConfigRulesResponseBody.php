<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ActiveAggregateConfigRulesResponseBody\operateRuleResult;
use AlibabaCloud\Tea\Model;

class ActiveAggregateConfigRulesResponseBody extends Model
{
    /**
     * @description The results of the operations to enable the specified rules.
     *
     * @var operateRuleResult
     */
    public $operateRuleResult;

    /**
     * @description The ID of the request.
     *
     * @example 6EC7AED1-172F-42AE-9C12-295BC2ADB751
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operateRuleResult' => 'OperateRuleResult',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateRuleResult) {
            $res['OperateRuleResult'] = null !== $this->operateRuleResult ? $this->operateRuleResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ActiveAggregateConfigRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateRuleResult'])) {
            $model->operateRuleResult = operateRuleResult::fromMap($map['OperateRuleResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
