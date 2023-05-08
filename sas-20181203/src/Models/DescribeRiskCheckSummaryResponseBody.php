<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary;
use AlibabaCloud\Tea\Model;

class DescribeRiskCheckSummaryResponseBody extends Model
{
    /**
     * @example 291B49F9-1685-4005-9D34-606B6F78740F
     *
     * @var string
     */
    public $requestId;

    /**
     * @var riskCheckSummary
     */
    public $riskCheckSummary;
    protected $_name = [
        'requestId'        => 'RequestId',
        'riskCheckSummary' => 'RiskCheckSummary',
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
        if (null !== $this->riskCheckSummary) {
            $res['RiskCheckSummary'] = null !== $this->riskCheckSummary ? $this->riskCheckSummary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRiskCheckSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskCheckSummary'])) {
            $model->riskCheckSummary = riskCheckSummary::fromMap($map['RiskCheckSummary']);
        }

        return $model;
    }
}
