<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackResponseBody\configRuleComplianceResult;
use AlibabaCloud\Tea\Model;

class GetConfigRuleComplianceByPackResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configRuleComplianceResult
     */
    public $configRuleComplianceResult;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'configRuleComplianceResult' => 'ConfigRuleComplianceResult',
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
        if (null !== $this->configRuleComplianceResult) {
            $res['ConfigRuleComplianceResult'] = null !== $this->configRuleComplianceResult ? $this->configRuleComplianceResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConfigRuleComplianceByPackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigRuleComplianceResult'])) {
            $model->configRuleComplianceResult = configRuleComplianceResult::fromMap($map['ConfigRuleComplianceResult']);
        }

        return $model;
    }
}
