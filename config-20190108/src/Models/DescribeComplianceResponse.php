<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeComplianceResponse\complianceResult;
use AlibabaCloud\Tea\Model;

class DescribeComplianceResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var complianceResult
     */
    public $complianceResult;
    protected $_name = [
        'requestId'        => 'RequestId',
        'complianceResult' => 'ComplianceResult',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('complianceResult', $this->complianceResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->complianceResult) {
            $res['ComplianceResult'] = null !== $this->complianceResult ? $this->complianceResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeComplianceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ComplianceResult'])) {
            $model->complianceResult = complianceResult::fromMap($map['ComplianceResult']);
        }

        return $model;
    }
}
