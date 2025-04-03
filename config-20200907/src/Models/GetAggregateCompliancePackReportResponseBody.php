<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackReportResponseBody\compliancePackReport;

class GetAggregateCompliancePackReportResponseBody extends Model
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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->compliancePackReport) {
            $this->compliancePackReport->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compliancePackReport) {
            $res['CompliancePackReport'] = null !== $this->compliancePackReport ? $this->compliancePackReport->toArray($noStream) : $this->compliancePackReport;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
