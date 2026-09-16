<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListKnowledgeFilesResponseBody\data;

use AlibabaCloud\Dara\Model;

class files extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var int
     */
    public $fileSizeBytes;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $format;

    /**
     * @var bool
     */
    public $isDirectory;

    /**
     * @var int
     */
    public $ownerFileId;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var string
     */
    public $processMessage;

    /**
     * @var string
     */
    public $processStatus;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'CreatedAt',
        'fileId' => 'FileId',
        'fileSizeBytes' => 'FileSizeBytes',
        'fileUrl' => 'FileUrl',
        'format' => 'Format',
        'isDirectory' => 'IsDirectory',
        'ownerFileId' => 'OwnerFileId',
        'pageCount' => 'PageCount',
        'processMessage' => 'ProcessMessage',
        'processStatus' => 'ProcessStatus',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileSizeBytes) {
            $res['FileSizeBytes'] = $this->fileSizeBytes;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->isDirectory) {
            $res['IsDirectory'] = $this->isDirectory;
        }

        if (null !== $this->ownerFileId) {
            $res['OwnerFileId'] = $this->ownerFileId;
        }

        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }

        if (null !== $this->processMessage) {
            $res['ProcessMessage'] = $this->processMessage;
        }

        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileSizeBytes'])) {
            $model->fileSizeBytes = $map['FileSizeBytes'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['IsDirectory'])) {
            $model->isDirectory = $map['IsDirectory'];
        }

        if (isset($map['OwnerFileId'])) {
            $model->ownerFileId = $map['OwnerFileId'];
        }

        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }

        if (isset($map['ProcessMessage'])) {
            $model->processMessage = $map['ProcessMessage'];
        }

        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
