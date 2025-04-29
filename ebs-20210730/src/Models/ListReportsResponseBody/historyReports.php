<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\ListReportsResponseBody;

use AlibabaCloud\Dara\Model;

class historyReports extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $reportName;

    /**
     * @var string
     */
    public $reportTime;

    /**
     * @var string
     */
    public $subscribePeriod;
    protected $_name = [
        'appName' => 'AppName',
        'reportId' => 'ReportId',
        'reportName' => 'ReportName',
        'reportTime' => 'ReportTime',
        'subscribePeriod' => 'SubscribePeriod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
