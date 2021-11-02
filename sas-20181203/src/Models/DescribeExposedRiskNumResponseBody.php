<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeExposedRiskNumResponseBody extends Model
{
    /**
     * @var int
     */
    public $exposedInstanceCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $riskExposedInstanceCount;
    protected $_name = [
        'exposedInstanceCount'     => 'ExposedInstanceCount',
        'requestId'                => 'RequestId',
        'riskExposedInstanceCount' => 'RiskExposedInstanceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exposedInstanceCount) {
            $res['ExposedInstanceCount'] = $this->exposedInstanceCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskExposedInstanceCount) {
            $res['RiskExposedInstanceCount'] = $this->riskExposedInstanceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExposedRiskNumResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExposedInstanceCount'])) {
            $model->exposedInstanceCount = $map['ExposedInstanceCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskExposedInstanceCount'])) {
            $model->riskExposedInstanceCount = $map['RiskExposedInstanceCount'];
        }

        return $model;
    }
}
