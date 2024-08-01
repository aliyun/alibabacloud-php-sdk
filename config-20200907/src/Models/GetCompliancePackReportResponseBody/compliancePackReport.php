<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackReportResponseBody;

use AlibabaCloud\Tea\Model;

class compliancePackReport extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the compliance package belongs.
     *
     * @example 120886317861****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The ID of the compliance package.
     *
     * @example cp-fdc8626622af00f9****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The timestamp when the compliance evaluation report was generated. Unit: milliseconds.
     *
     * @example 1624329965857
     *
     * @var int
     */
    public $reportCreateTimestamp;

    /**
     * @description The status of the compliance evaluation report. Valid values:
     *
     *   NONE: The compliance evaluation report is not generated.
     *   CREATING: The compliance evaluation report is being generated.
     *   COMPLETE: The compliance evaluation report is generated.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $reportStatus;

    /**
     * @description The URL that is used to download the compliance evaluation report.
     *
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
