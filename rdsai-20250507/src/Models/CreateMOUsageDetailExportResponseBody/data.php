<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateMOUsageDetailExportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateMOUsageDetailExportResponseBody\data\filters;

class data extends Model
{
    /**
     * @var string
     */
    public $completedAt;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var filters
     */
    public $filters;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'completedAt' => 'CompletedAt',
        'createdAt' => 'CreatedAt',
        'downloadUrl' => 'DownloadUrl',
        'errorMessage' => 'ErrorMessage',
        'expiresAt' => 'ExpiresAt',
        'fileSize' => 'FileSize',
        'filters' => 'Filters',
        'format' => 'Format',
        'ossKey' => 'OssKey',
        'rowCount' => 'RowCount',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->filters) {
            $this->filters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedAt) {
            $res['CompletedAt'] = $this->completedAt;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->expiresAt) {
            $res['ExpiresAt'] = $this->expiresAt;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->filters) {
            $res['Filters'] = null !== $this->filters ? $this->filters->toArray($noStream) : $this->filters;
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CompletedAt'])) {
            $model->completedAt = $map['CompletedAt'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['ExpiresAt'])) {
            $model->expiresAt = $map['ExpiresAt'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['Filters'])) {
            $model->filters = filters::fromMap($map['Filters']);
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
