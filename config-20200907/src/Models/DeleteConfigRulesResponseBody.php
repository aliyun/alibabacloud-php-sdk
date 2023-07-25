<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\DeleteConfigRulesResponseBody\operateRuleResult;
use AlibabaCloud\Tea\Model;

class DeleteConfigRulesResponseBody extends Model
{
    /**
     * @description The results of the delete operations.
     *
     * @var operateRuleResult
     */
    public $operateRuleResult;

    /**
     * @description The request ID.
     *
     * @example 6721BBD3-F2A6-5349-9051-EE0111036D3F
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
     * @return DeleteConfigRulesResponseBody
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
