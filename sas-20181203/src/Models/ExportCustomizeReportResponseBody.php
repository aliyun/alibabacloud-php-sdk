<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ExportCustomizeReportResponseBody extends Model
{
    /**
     * @description The download URL of the security report.
     *
     * @example https://xxxxxxxx.oss-cn-hangzhou-1.aliyuncs.com/xxxxx/xxxxxxxxxxxxxx?Expires=1671448125&OSSAccessKeyId=xxx
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The time when the security report was exported.
     *
     * @example 2023-01-10
     *
     * @var string
     */
    public $exportDate;

    /**
     * @description The ID of the export task.
     *
     * @example 22
     *
     * @var int
     */
    public $exportId;

    /**
     * @description The status of the export task. Valid values:
     *
     *   **fail**: The export task fails.
     *   **exporting**: The export task is being executed.
     *   **success**: The export task is successful.
     *
     * @example exporting
     *
     * @var string
     */
    public $exportStatus;

    /**
     * @description The name of the report file that is exported.
     *
     * @example test_xxxx.html
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The ID of the security report.
     *
     * @example 123
     *
     * @var int
     */
    public $reportId;

    /**
     * @description The request ID.
     *
     * @example FFDFCEB3-A5EE-590A-8E70-283EBC5D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The timestamp when the download URL expires. Unit: seconds.
     *
     * @example 1673335497000
     *
     * @var int
     */
    public $urlExpiredTime;
    protected $_name = [
        'downloadUrl' => 'DownloadUrl',
        'exportDate' => 'ExportDate',
        'exportId' => 'ExportId',
        'exportStatus' => 'ExportStatus',
        'fileName' => 'FileName',
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
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
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
     * @return ExportCustomizeReportResponseBody
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
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
