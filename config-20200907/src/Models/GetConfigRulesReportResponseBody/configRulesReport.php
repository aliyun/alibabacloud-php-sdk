<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRulesReportResponseBody;

use AlibabaCloud\Tea\Model;

class configRulesReport extends Model
{
    /**
     * @var string
     */
    public $reportStatus;

    /**
     * @var string
     */
    public $reportUrl;

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $reportCreateTimestamp;
    protected $_name = [
        'reportStatus'          => 'ReportStatus',
        'reportUrl'             => 'ReportUrl',
        'accountId'             => 'AccountId',
        'reportCreateTimestamp' => 'ReportCreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }
        if (null !== $this->reportUrl) {
            $res['ReportUrl'] = $this->reportUrl;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->reportCreateTimestamp) {
            $res['ReportCreateTimestamp'] = $this->reportCreateTimestamp;
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
        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }
        if (isset($map['ReportUrl'])) {
            $model->reportUrl = $map['ReportUrl'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ReportCreateTimestamp'])) {
            $model->reportCreateTimestamp = $map['ReportCreateTimestamp'];
        }

        return $model;
    }
}
