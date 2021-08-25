<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\StopConfigRulesResponseBody\operateRuleResult;
use AlibabaCloud\Tea\Model;

class StopConfigRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var operateRuleResult
     */
    public $operateRuleResult;
    protected $_name = [
        'requestId'         => 'RequestId',
        'operateRuleResult' => 'OperateRuleResult',
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
        if (null !== $this->operateRuleResult) {
            $res['OperateRuleResult'] = null !== $this->operateRuleResult ? $this->operateRuleResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopConfigRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OperateRuleResult'])) {
            $model->operateRuleResult = operateRuleResult::fromMap($map['OperateRuleResult']);
        }

        return $model;
    }
}
