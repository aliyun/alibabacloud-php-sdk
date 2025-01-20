<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\DetachConfigRuleToCompliancePackResponseBody\operateRuleResult;

class DetachConfigRuleToCompliancePackResponseBody extends Model
{
    /**
     * @var operateRuleResult
     */
    public $operateRuleResult;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operateRuleResult' => 'OperateRuleResult',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->operateRuleResult) {
            $this->operateRuleResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operateRuleResult) {
            $res['OperateRuleResult'] = null !== $this->operateRuleResult ? $this->operateRuleResult->toArray($noStream) : $this->operateRuleResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
