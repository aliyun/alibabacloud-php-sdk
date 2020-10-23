<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeComplianceSummaryResponse\complianceSummary;
use AlibabaCloud\Tea\Model;

class DescribeComplianceSummaryResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var complianceSummary
     */
    public $complianceSummary;
    protected $_name = [
        'requestId'         => 'RequestId',
        'complianceSummary' => 'ComplianceSummary',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('complianceSummary', $this->complianceSummary, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->complianceSummary) {
            $res['ComplianceSummary'] = null !== $this->complianceSummary ? $this->complianceSummary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeComplianceSummaryResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ComplianceSummary'])) {
            $model->complianceSummary = complianceSummary::fromMap($map['ComplianceSummary']);
        }

        return $model;
    }
}
