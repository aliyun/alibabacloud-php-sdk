<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ExportCustomizeReportRequest extends Model
{
    /**
     * @description The type of the security report that you want to export. Valid values:
     *
     *   **HTML**
     *   **PDF**
     *
     * >  The default value is HTML. PDF is supported only for security reports in version 2.0.0.
     *
     * @example HTML
     *
     * @var string
     */
    public $exportType;

    /**
     * @description The ID of the security report.
     *
     * >  You can call the [DescribeCustomizeReportList](~~DescribeCustomizeReportList~~) operation to query the ID.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $reportId;
    protected $_name = [
        'exportType' => 'ExportType',
        'reportId' => 'ReportId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportCustomizeReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        return $model;
    }
}
