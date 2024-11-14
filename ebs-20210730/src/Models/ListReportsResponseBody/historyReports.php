<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\ListReportsResponseBody;

use AlibabaCloud\Tea\Model;

class historyReports extends Model
{
    /**
     * @description Application name.
     *
     * @example default
     *
     * @var string
     */
    public $appName;

    /**
     * @description Report ID.
     *
     * @example report-e19c7b597f5fXX
     *
     * @var string
     */
    public $reportId;

    /**
     * @description Report name.
     *
     * @example default-2024-09-30~2024-10-07-Usage Report
     *
     * @var string
     */
    public $reportName;

    /**
     * @description Report generation time.
     *
     * @example 2024-10-07T02:09:17Z
     *
     * @var string
     */
    public $reportTime;

    /**
     * @description Report subscription period.
     *
     * @example Weekly
     *
     * @var string
     */
    public $subscribePeriod;
    protected $_name = [
        'appName'         => 'AppName',
        'reportId'        => 'ReportId',
        'reportName'      => 'ReportName',
        'reportTime'      => 'ReportTime',
        'subscribePeriod' => 'SubscribePeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->reportName) {
            $res['ReportName'] = $this->reportName;
        }
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }
        if (null !== $this->subscribePeriod) {
            $res['SubscribePeriod'] = $this->subscribePeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return historyReports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ReportName'])) {
            $model->reportName = $map['ReportName'];
        }
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }
        if (isset($map['SubscribePeriod'])) {
            $model->subscribePeriod = $map['SubscribePeriod'];
        }

        return $model;
    }
}
