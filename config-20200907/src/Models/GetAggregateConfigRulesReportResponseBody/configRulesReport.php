<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRulesReportResponseBody;

use AlibabaCloud\Tea\Model;

class configRulesReport extends Model
{
    /**
     * @var string
     */
    public $reportUrl;

    /**
     * @var string
     */
    public $reportStatus;

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $aggregatorId;

    /**
     * @var int
     */
    public $reportCreateTimestamp;
    protected $_name = [
        'reportUrl'             => 'ReportUrl',
        'reportStatus'          => 'ReportStatus',
        'accountId'             => 'AccountId',
        'aggregatorId'          => 'AggregatorId',
        'reportCreateTimestamp' => 'ReportCreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportUrl) {
            $res['ReportUrl'] = $this->reportUrl;
        }
        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
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
        if (isset($map['ReportUrl'])) {
            $model->reportUrl = $map['ReportUrl'];
        }
        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ReportCreateTimestamp'])) {
            $model->reportCreateTimestamp = $map['ReportCreateTimestamp'];
        }

        return $model;
    }
}
