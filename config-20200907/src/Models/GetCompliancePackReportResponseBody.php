<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackReportResponseBody\compliancePackReport;
use AlibabaCloud\Tea\Model;

class GetCompliancePackReportResponseBody extends Model
{
    /**
     * @var compliancePackReport
     */
    public $compliancePackReport;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compliancePackReport' => 'CompliancePackReport',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackReport) {
            $res['CompliancePackReport'] = null !== $this->compliancePackReport ? $this->compliancePackReport->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CompliancePackReport'])) {
            $model->compliancePackReport = compliancePackReport::fromMap($map['CompliancePackReport']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
