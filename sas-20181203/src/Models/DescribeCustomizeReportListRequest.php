<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomizeReportListRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description Specifies whether to pin the report. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example false
     *
     * @var bool
     */
    public $pinned;

    /**
     * @description The state of the report. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $reportStatus;

    /**
     * @description The type of the report. Valid values:
     *
     *   **0**: daily report
     *   **1**: weekly report
     *   **2**: monthly report
     *   **3**: report whose statistics are collected in a custom time range
     *
     * @example 0
     *
     * @var int
     */
    public $reportType;

    /**
     * @description The report version. Valid values:
     *
     *   **1.0.0**
     *   **2.0.0**
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $reportVersion;

    /**
     * @description The name of the report.
     *
     * @example test
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'lang'          => 'Lang',
        'pinned'        => 'Pinned',
        'reportStatus'  => 'ReportStatus',
        'reportType'    => 'ReportType',
        'reportVersion' => 'ReportVersion',
        'title'         => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pinned) {
            $res['Pinned'] = $this->pinned;
        }
        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }
        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }
        if (null !== $this->reportVersion) {
            $res['ReportVersion'] = $this->reportVersion;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomizeReportListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Pinned'])) {
            $model->pinned = $map['Pinned'];
        }
        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }
        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }
        if (isset($map['ReportVersion'])) {
            $model->reportVersion = $map['ReportVersion'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
