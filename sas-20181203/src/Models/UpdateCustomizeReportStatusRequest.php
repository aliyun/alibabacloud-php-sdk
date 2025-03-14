<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomizeReportStatusRequest extends Model
{
    /**
     * @description The time when the report is pinned. Unit: milliseconds.
     *
     * @example 1717430400000
     *
     * @var int
     */
    public $pinnedTime;

    /**
     * @description The ID of the report.
     *
     * >  You can call the [DescribeCustomizeReportList](~~DescribeCustomizeReportList~~) operation to query the ID.
     *
     * This parameter is required.
     *
     * @example 123
     *
     * @var int
     */
    public $reportId;

    /**
     * @description The status of the report. Valid values:
     *
     *   **0**: disabled.
     *   **1**: enabled.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $reportStatus;
    protected $_name = [
        'pinnedTime' => 'PinnedTime',
        'reportId' => 'ReportId',
        'reportStatus' => 'ReportStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pinnedTime) {
            $res['PinnedTime'] = $this->pinnedTime;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomizeReportStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PinnedTime'])) {
            $model->pinnedTime = $map['PinnedTime'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }

        return $model;
    }
}
