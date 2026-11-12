<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\GetAiReportResponseBody\data;

use AlibabaCloud\Dara\Model;

class report extends Model
{
    /**
     * @var string
     */
    public $contentExpiresAt;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $urlExpiresAt;
    protected $_name = [
        'contentExpiresAt' => 'ContentExpiresAt',
        'downloadUrl' => 'DownloadUrl',
        'reportId' => 'ReportId',
        'urlExpiresAt' => 'UrlExpiresAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentExpiresAt) {
            $res['ContentExpiresAt'] = $this->contentExpiresAt;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        if (null !== $this->urlExpiresAt) {
            $res['UrlExpiresAt'] = $this->urlExpiresAt;
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
        if (isset($map['ContentExpiresAt'])) {
            $model->contentExpiresAt = $map['ContentExpiresAt'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['UrlExpiresAt'])) {
            $model->urlExpiresAt = $map['UrlExpiresAt'];
        }

        return $model;
    }
}
