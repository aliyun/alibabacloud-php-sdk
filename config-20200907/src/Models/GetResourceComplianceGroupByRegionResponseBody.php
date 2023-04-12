<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByRegionResponseBody\complianceResult;
use AlibabaCloud\Tea\Model;

class GetResourceComplianceGroupByRegionResponseBody extends Model
{
    /**
     * @var complianceResult
     */
    public $complianceResult;

    /**
     * @example 0FDF8006-34A0-5334-8C79-48F64EAB34F1
     *
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
     * @return GetResourceComplianceGroupByRegionResponseBody
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
