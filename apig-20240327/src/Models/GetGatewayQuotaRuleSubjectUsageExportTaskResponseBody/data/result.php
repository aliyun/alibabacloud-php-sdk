<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayQuotaRuleSubjectUsageExportTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var int
     */
    public $downloadUrlExpiredAt;

    /**
     * @var int
     */
    public $effectiveWindowStart;

    /**
     * @var bool
     */
    public $fileExpired;

    /**
     * @var int
     */
    public $fileExpiredAt;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var bool
     */
    public $filterFailedRequests;

    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $queryWindowEnd;

    /**
     * @var int
     */
    public $queryWindowStart;

    /**
     * @var string
     */
    public $quotaDimension;

    /**
     * @var int
     */
    public $rowCount;
    protected $_name = [
        'downloadUrl' => 'downloadUrl',
        'downloadUrlExpiredAt' => 'downloadUrlExpiredAt',
        'effectiveWindowStart' => 'effectiveWindowStart',
        'fileExpired' => 'fileExpired',
        'fileExpiredAt' => 'fileExpiredAt',
        'fileSize' => 'fileSize',
        'filterFailedRequests' => 'filterFailedRequests',
        'format' => 'format',
        'queryWindowEnd' => 'queryWindowEnd',
        'queryWindowStart' => 'queryWindowStart',
        'quotaDimension' => 'quotaDimension',
        'rowCount' => 'rowCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['downloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->downloadUrlExpiredAt) {
            $res['downloadUrlExpiredAt'] = $this->downloadUrlExpiredAt;
        }

        if (null !== $this->effectiveWindowStart) {
            $res['effectiveWindowStart'] = $this->effectiveWindowStart;
        }

        if (null !== $this->fileExpired) {
            $res['fileExpired'] = $this->fileExpired;
        }

        if (null !== $this->fileExpiredAt) {
            $res['fileExpiredAt'] = $this->fileExpiredAt;
        }

        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }

        if (null !== $this->filterFailedRequests) {
            $res['filterFailedRequests'] = $this->filterFailedRequests;
        }

        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->queryWindowEnd) {
            $res['queryWindowEnd'] = $this->queryWindowEnd;
        }

        if (null !== $this->queryWindowStart) {
            $res['queryWindowStart'] = $this->queryWindowStart;
        }

        if (null !== $this->quotaDimension) {
            $res['quotaDimension'] = $this->quotaDimension;
        }

        if (null !== $this->rowCount) {
            $res['rowCount'] = $this->rowCount;
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
        if (isset($map['downloadUrl'])) {
            $model->downloadUrl = $map['downloadUrl'];
        }

        if (isset($map['downloadUrlExpiredAt'])) {
            $model->downloadUrlExpiredAt = $map['downloadUrlExpiredAt'];
        }

        if (isset($map['effectiveWindowStart'])) {
            $model->effectiveWindowStart = $map['effectiveWindowStart'];
        }

        if (isset($map['fileExpired'])) {
            $model->fileExpired = $map['fileExpired'];
        }

        if (isset($map['fileExpiredAt'])) {
            $model->fileExpiredAt = $map['fileExpiredAt'];
        }

        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }

        if (isset($map['filterFailedRequests'])) {
            $model->filterFailedRequests = $map['filterFailedRequests'];
        }

        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['queryWindowEnd'])) {
            $model->queryWindowEnd = $map['queryWindowEnd'];
        }

        if (isset($map['queryWindowStart'])) {
            $model->queryWindowStart = $map['queryWindowStart'];
        }

        if (isset($map['quotaDimension'])) {
            $model->quotaDimension = $map['quotaDimension'];
        }

        if (isset($map['rowCount'])) {
            $model->rowCount = $map['rowCount'];
        }

        return $model;
    }
}
