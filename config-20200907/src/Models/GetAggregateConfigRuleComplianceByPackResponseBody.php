<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleComplianceByPackResponseBody\configRuleComplianceResult;
use AlibabaCloud\Tea\Model;

class GetAggregateConfigRuleComplianceByPackResponseBody extends Model
{
    /**
     * @description The compliance evaluation results that are returned by rules in the compliance package.
     *
     * @var configRuleComplianceResult
     */
    public $configRuleComplianceResult;

    /**
     * @description The ID of the request.
     *
     * @example C6B0C0A8-3245-48F1-AEAB-BC1A446E99D0
     *
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
     * @return GetAggregateConfigRuleComplianceByPackResponseBody
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
