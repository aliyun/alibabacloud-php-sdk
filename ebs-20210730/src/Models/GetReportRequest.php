<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class GetReportRequest extends Model
{
    /**
     * @description Optional, AppName only takes effect when ReportType=present.
     *
     * @example App1
     *
     * @var string
     */
    public $appName;

    /**
     * @description Region name.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description When ReportType=history, ReportId is required to query historical reports based on ReportId.
     *
     * @example report-74fbea80e802xxxx
     *
     * @var string
     */
    public $reportId;

    /**
     * @description Optional values: history/present.
     *
     * @example history
     *
     * @var string
     */
    public $reportType;
    protected $_name = [
        'appName'    => 'AppName',
        'regionId'   => 'RegionId',
        'reportId'   => 'ReportId',
        'reportType' => 'ReportType',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        return $model;
    }
}
