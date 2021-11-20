<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeComplianceSummaryResponseBody\complianceSummary;
use AlibabaCloud\Tea\Model;

class DescribeComplianceSummaryResponseBody extends Model
{
    /**
     * @var complianceSummary
     */
    public $complianceSummary;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'complianceSummary' => 'ComplianceSummary',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceSummary) {
            $res['ComplianceSummary'] = null !== $this->complianceSummary ? $this->complianceSummary->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeComplianceSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceSummary'])) {
            $model->complianceSummary = complianceSummary::fromMap($map['ComplianceSummary']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
