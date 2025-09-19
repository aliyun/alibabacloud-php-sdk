<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ExportCustomizeReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $exportDate;

    /**
     * @var int
     */
    public $exportId;

    /**
     * @var string
     */
    public $exportStatus;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $reportId;

    /**
     * @var string
     */
    public $requestId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
