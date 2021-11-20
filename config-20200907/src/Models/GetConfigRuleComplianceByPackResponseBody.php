<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackResponseBody\configRuleComplianceResult;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleComplianceResult) {
            $res['ConfigRuleComplianceResult'] = null !== $this->configRuleComplianceResult ? $this->configRuleComplianceResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ConfigRuleComplianceResult'])) {
            $model->configRuleComplianceResult = configRuleComplianceResult::fromMap($map['ConfigRuleComplianceResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
