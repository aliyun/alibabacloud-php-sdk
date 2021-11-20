<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackReportResponseBody;

use AlibabaCloud\Tea\Model;

class compliancePackReport extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $compliancePackId;

    /**
     * @var int
     */
    public $reportCreateTimestamp;

    /**
     * @var string
     */
    public $reportStatus;

    /**
     * @var string
     */
    public $reportUrl;
    protected $_name = [
        'accountId'             => 'AccountId',
        'compliancePackId'      => 'CompliancePackId',
        'reportCreateTimestamp' => 'ReportCreateTimestamp',
        'reportStatus'          => 'ReportStatus',
        'reportUrl'             => 'ReportUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->reportCreateTimestamp) {
            $res['ReportCreateTimestamp'] = $this->reportCreateTimestamp;
        }
        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }
        if (null !== $this->reportUrl) {
            $res['ReportUrl'] = $this->reportUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compliancePackReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['ReportCreateTimestamp'])) {
            $model->reportCreateTimestamp = $map['ReportCreateTimestamp'];
        }
        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }
        if (isset($map['ReportUrl'])) {
            $model->reportUrl = $map['ReportUrl'];
        }

        return $model;
    }
}
