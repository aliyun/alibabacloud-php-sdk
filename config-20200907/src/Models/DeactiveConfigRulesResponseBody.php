<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveConfigRulesResponseBody\operateRuleResult;
use AlibabaCloud\Tea\Model;

class DeactiveConfigRulesResponseBody extends Model
{
    /**
     * @description The results of the operations to disable the specified rules.
     *
     * @var operateRuleResult
     */
    public $operateRuleResult;

    /**
     * @description The ID of the request.
     *
     * @example 54FA74D9-45D4-4CA5-9BE1-97F6EA19AF5B
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
     * @return DeactiveConfigRulesResponseBody
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
