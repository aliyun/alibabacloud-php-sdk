<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRulesReportResponseBody;

use AlibabaCloud\Tea\Model;

class configRulesReport extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the rules belong.
     *
     * @example 100931896542****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The timestamp when the compliance evaluation report was generated. Unit: milliseconds.
     *
     * @example 1614687022000
     *
     * @var int
     */
    public $reportCreateTimestamp;

    /**
     * @description The ID of the compliance evaluation report.
     *
     * @example crp-88176457e0d900c9****
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The status of the compliance evaluation report. Valid values:
     *
     *   NONE: The compliance evaluation report is not generated.
     *   CREATING: The compliance evaluation report is being generated.
     *   COMPLETE: The compliance evaluation report is generated.
     *
     * @example CREATING
     *
     * @var string
     */
    public $reportStatus;

    /**
     * @description The URL that is used to download the compliance evaluation report.
     *
     * @example https://cloud-config-compliance-report.oss-cn-shanghai.aliyuncs.com/ConfigRuleReports/100931896542****\/rules/100931896542****-rules-report-202106221125.zip?Expires=162433****&OSSAccessKeyId=LTAIs86R8H59****&Signature=yT8jn6ZQSX3dyCwVKL5EOJhGJ****
     *
     * @var string
     */
    public $reportUrl;
    protected $_name = [
        'accountId'             => 'AccountId',
        'reportCreateTimestamp' => 'ReportCreateTimestamp',
        'reportId'              => 'ReportId',
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
        if (null !== $this->reportCreateTimestamp) {
            $res['ReportCreateTimestamp'] = $this->reportCreateTimestamp;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
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
     * @return configRulesReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ReportCreateTimestamp'])) {
            $model->reportCreateTimestamp = $map['ReportCreateTimestamp'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
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
