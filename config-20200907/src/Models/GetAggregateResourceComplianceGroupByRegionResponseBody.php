<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceGroupByRegionResponseBody\complianceResult;
use AlibabaCloud\Tea\Model;

class GetAggregateResourceComplianceGroupByRegionResponseBody extends Model
{
    /**
     * @var complianceResult
     */
    public $complianceResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'complianceResult' => 'ComplianceResult',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceResult) {
            $res['ComplianceResult'] = null !== $this->complianceResult ? $this->complianceResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateResourceComplianceGroupByRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceResult'])) {
            $model->complianceResult = complianceResult::fromMap($map['ComplianceResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
