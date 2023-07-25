<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetComplianceSummaryResponseBody\complianceSummary;
use AlibabaCloud\Tea\Model;

class GetComplianceSummaryResponseBody extends Model
{
    /**
     * @var complianceSummary
     */
    public $complianceSummary;

    /**
     * @example CAEE6F34-DEDC-4BAA-AA8C-946D5D008737
     *
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
     * @return GetComplianceSummaryResponseBody
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
