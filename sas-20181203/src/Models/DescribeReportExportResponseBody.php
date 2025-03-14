<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeReportExportResponseBody extends Model
{
    /**
     * @description The download URL of the report.
     *
     * @example https://xxxxxxxx.oss-cn-hangzhou-1.aliyuncs.com/xxxxx/xxxxxxxxxxxxxx?Expires=1671448125&OSSAccessKeyId=xxx
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The time when the report was exported.
     *
     * @example 2022-12-15
     *
     * @var string
     */
    public $exportDate;

    /**
     * @description The ID of the export task.
     *
     * @example 2
     *
     * @var int
     */
    public $exportId;

    /**
     * @description The status of the export task. Valid values:
     *
     *   **-1**: The export task fails.
     *   **0**: The export task is being initialized.
     *   **1**: The export task is being executed.
     *   **2**: The export task is successful.
     *
     * @example 2
     *
     * @var string
     */
    public $exportStatus;

    /**
     * @description The ID of the report.
     *
     * @example 377665
     *
     * @var int
     */
    public $reportId;

    /**
     * @description The request ID.
     *
     * @example 79CFF74D-E967-5407-8A78-EE03B925FDAA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The timestamp when the download URL expires. Unit: milliseconds.
     *
     * @example 1660113647000
     *
     * @var int
     */
    public $urlExpiredTime;
    protected $_name = [
        'downloadUrl' => 'DownloadUrl',
        'exportDate' => 'ExportDate',
        'exportId' => 'ExportId',
        'exportStatus' => 'ExportStatus',
        'reportId' => 'ReportId',
        'requestId' => 'RequestId',
        'urlExpiredTime' => 'UrlExpiredTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->exportDate) {
            $res['ExportDate'] = $this->exportDate;
        }
        if (null !== $this->exportId) {
            $res['ExportId'] = $this->exportId;
        }
        if (null !== $this->exportStatus) {
            $res['ExportStatus'] = $this->exportStatus;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->urlExpiredTime) {
            $res['UrlExpiredTime'] = $this->urlExpiredTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReportExportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ExportDate'])) {
            $model->exportDate = $map['ExportDate'];
        }
        if (isset($map['ExportId'])) {
            $model->exportId = $map['ExportId'];
        }
        if (isset($map['ExportStatus'])) {
            $model->exportStatus = $map['ExportStatus'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UrlExpiredTime'])) {
            $model->urlExpiredTime = $map['UrlExpiredTime'];
        }

        return $model;
    }
}
