<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackReportResponseBody\compliancePackReport;
use AlibabaCloud\Tea\Model;

class GetCompliancePackReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var compliancePackReport
     */
    public $compliancePackReport;
    protected $_name = [
        'requestId'            => 'RequestId',
        'compliancePackReport' => 'CompliancePackReport',
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
        if (null !== $this->compliancePackReport) {
            $res['CompliancePackReport'] = null !== $this->compliancePackReport ? $this->compliancePackReport->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCompliancePackReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CompliancePackReport'])) {
            $model->compliancePackReport = compliancePackReport::fromMap($map['CompliancePackReport']);
        }

        return $model;
    }
}
