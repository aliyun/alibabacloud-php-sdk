<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackResponseBody\configRuleComplianceResult;

class GetConfigRuleComplianceByPackResponseBody extends Model
{
    /**
     * @var configRuleComplianceResult
     */
    public $configRuleComplianceResult;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configRuleComplianceResult' => 'ConfigRuleComplianceResult',
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->configRuleComplianceResult) {
            $this->configRuleComplianceResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRuleComplianceResult) {
            $res['ConfigRuleComplianceResult'] = null !== $this->configRuleComplianceResult ? $this->configRuleComplianceResult->toArray($noStream) : $this->configRuleComplianceResult;
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
        if (isset($map['ConfigRuleComplianceResult'])) {
            $model->configRuleComplianceResult = configRuleComplianceResult::fromMap($map['ConfigRuleComplianceResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
