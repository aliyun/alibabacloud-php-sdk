<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRulesReportResponseBody;

use AlibabaCloud\Tea\Model;

class configRulesReport extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $reportCreateTimestamp;

    /**
     * @var string
     */
    public $reportId;

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
