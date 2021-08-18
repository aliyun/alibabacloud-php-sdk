<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeExposedRiskNumResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $riskExposedInstanceCount;

    /**
     * @var int
     */
    public $exposedInstanceCount;
    protected $_name = [
        'requestId'                => 'RequestId',
        'riskExposedInstanceCount' => 'RiskExposedInstanceCount',
        'exposedInstanceCount'     => 'ExposedInstanceCount',
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
        if (null !== $this->riskExposedInstanceCount) {
            $res['RiskExposedInstanceCount'] = $this->riskExposedInstanceCount;
        }
        if (null !== $this->exposedInstanceCount) {
            $res['ExposedInstanceCount'] = $this->exposedInstanceCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskExposedInstanceCount'])) {
            $model->riskExposedInstanceCount = $map['RiskExposedInstanceCount'];
        }
        if (isset($map['ExposedInstanceCount'])) {
            $model->exposedInstanceCount = $map['ExposedInstanceCount'];
        }

        return $model;
    }
}
